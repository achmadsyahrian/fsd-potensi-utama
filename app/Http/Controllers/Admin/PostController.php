<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil input pencarian
        $search = $request->input('search');
        $searchType = $request->input('search_type');
        $searchCategory = $request->input('search_category');
        $searchAuthor = $request->input('search_author');

        // Query builder dengan kondisi pencarian
        $query = Post::with('user')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            ->when($searchType, function ($query, $searchType) {
                return $query->where('type', $searchType);
            })
            ->when($searchCategory, function ($query, $searchCategory) {
                return $query->where('category_id', $searchCategory);
            })
            ->when($searchAuthor, function ($query, $searchAuthor) {
                return $query->where('user_id', $searchAuthor);
            })
            ->orderBy('created_at', 'desc');

        // Tambahkan parameter pencarian ke pagination
        $data = $query->paginate(10)->appends([
            'search' => $search,
            'search_type' => $searchType,
            'search_category' => $searchCategory,
            'search_author' => $searchAuthor
        ]);

        $categories = Category::all();
        $authors = User::all();
        
        // Kirim data ke view
        return view('admin.posts.index', compact('data', 'categories', 'authors'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts,slug',
            'category_id' => 'required|exists:categories,id',
            'tags_id' => 'array|exists:tags,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'nullable|boolean',
            'content' => 'required|string',
            'type' => 'required',
            'files.*' => 'nullable|mimes:pdf,doc,docx,xlsx,jpeg,png,jpg|max:2048',
        ]);

        // Simpan thumbnail
        $thumbnailUrl = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('public/posts/thumbnails');
            $thumbnailUrl = Storage::url($thumbnailPath);
        }

        // Simpan Postingan
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->thumbnail = $thumbnailUrl;
        $post->content = $request->input('content');
        $post->is_published = $request->input('is_published', 0);
        $post->type = $request->input('type');
        $post->user_id = auth()->user()->id;
        $post->save();

        // Simpan tags
        $post->tags()->sync($request->input('tags_id', []));

        // Simpan file tambahan
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filePath = $file->store('public/posts/files');
                $fileName = $file->getClientOriginalName();

                // Simpan detail file ke database
                $post->files()->create([
                    'file_name' => $fileName,
                    'file_path' => Storage::url($filePath),
                ]);
            }
        }

        return redirect()->route('admin.posts.index')->with('success', "Postingan '{$request->input('title')}' berhasil ditambah!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::with('tags', 'category')->find($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => ['required', 'string', Rule::unique('posts')->ignore($post->id)],
            'category_id' => 'required|exists:categories,id',
            'tags_id' => 'array|exists:tags,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'nullable|boolean',
            'content' => 'required|string',
            'type' => 'required',
            'files.*' => 'nullable|mimes:pdf,doc,docx,xlsx,jpeg,png,jpg|max:2048',
        ]);

        // Simpan thumbnail jika ada
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('public/posts/thumbnails');
            $thumbnailUrl = Storage::url($thumbnailPath);

            // Hapus thumbnail lama jika ada
            if ($post->thumbnail) {
                Storage::delete(str_replace('/storage', 'public', $post->thumbnail));
            }

            $post->thumbnail = $thumbnailUrl;
        }

        // Data Lama
        $oldTitle = $post->title;

        // Update data post
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->content = $request->input('content');
        $post->is_published = $request->input('is_published', 0);
        $post->type = $request->input('type');
        $post->user_id = $post->user_id;
        $post->save();

        // Sinkronisasi tags
        $post->tags()->sync($request->input('tags_id', []));

        // Hapus file lama jika ada
        if ($request->hasFile('files')) {
            // Ambil file lama dari database
            $oldFiles = $post->files()->get();

            // Hapus file lama dari storage dan database
            foreach ($oldFiles as $file) {
                Storage::delete(str_replace('/storage', 'public', $file->file_path));
                $file->delete();
            }

            // Simpan file baru
            foreach ($request->file('files') as $file) {
                $filePath = $file->store('public/posts/files');
                $fileName = $file->getClientOriginalName();

                // Simpan detail file ke database
                $post->files()->create([
                    'file_name' => $fileName,
                    'file_path' => Storage::url($filePath),
                ]);
            }
        }

        return redirect()->route('admin.posts.index')->with('success', "Postingan '{$oldTitle}' berhasil diperbarui!");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan post berdasarkan ID
        $post = Post::find($id);
        $oldTitle = $post->title;

        // Pastikan post ditemukan
        if (!$post) {
            return redirect()->route('admin.posts.index')->with('error', 'Postingan tidak ditemukan.');
        }

        // Hapus file thumbnail jika ada
        if ($post->thumbnail) {
            $thumbnailPath = str_replace('/storage', 'public', $post->thumbnail); // Ubah path ke path public
            if (Storage::exists($thumbnailPath)) {
                Storage::delete($thumbnailPath);
            }
        }

        // Hapus file terkait post
        $files = $post->files;
        foreach ($files as $file) {
            $filePath = str_replace('/storage', 'public', $file->file_path);
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
            $file->delete(); // Hapus record file dari database
        }

        // Hapus file dari konten jika ada
        $this->deleteFilesFromContent($post->content);

        // Hapus post
        $post->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.posts.index')->with('success', "Postingan '{$oldTitle}' berhasil dihapus.");
    }

    private function deleteFilesFromContent($content)
    {
        // Gunakan regex untuk mencari semua URL gambar dalam konten
        preg_match_all('/src="\/storage\/posts\/content\/files\/(.*?)"/', $content, $matches);

        // Loop melalui semua file yang ditemukan
        foreach ($matches[1] as $file) {
            $filePath = 'public/posts/content/files/' . $file;
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/posts/content/files', $filename);

        return response()->json(['url' => Storage::url($path)]);
    }

    public function destroyAllFiles($postId)
    {

        $post = Post::findOrFail($postId);
        $files = $post->files;

        foreach ($files as $file) {
            Storage::delete(str_replace('/storage', 'public', $file->file_path));
            $file->delete();
        }

        return redirect()->back()->with('success', 'Files tambahan berhasil dihapus.');
    }
}

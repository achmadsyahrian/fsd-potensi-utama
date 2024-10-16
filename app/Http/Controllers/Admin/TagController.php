<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil input pencarian
        $search = $request->input('search');
        
        // Query builder dengan kondisi pencarian
        $data = Tag::when($search, function ($query, $search) {
                        return $query->where('name', 'like', "%{$search}%");
                    })
                    ->orderBy('name')
                    ->paginate(10);

        // Kirim data ke view
        return view('admin.tag.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:tags,slug', // Validasi unik slug
            'description' => 'nullable',
        ]);

        // Buat record baru dalam database (misalnya tabel tags)
        $tag = new Tag();
        $tag->name = $validatedData['name'];
        $tag->slug = $validatedData['slug'];
        $tag->description = $validatedData['description'];
        
        // Simpan data ke dalam database
        $tag->save();

        // Redirect atau response setelah data disimpan
        return redirect()->route('admin.tags.index')->with('success', "Tag '{$tag->name}' berhasil ditambah.");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            return response()->json(['error' => 'Tag not found'], 404);
        }

        return response()->json($tag);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        // Simpan nama lama sebelum update
        $oldName = $tag->name;

        // Validasi input dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:tags,slug,' . $tag->id, // Validasi unik slug, tetapi hanya jika slug berbeda
            'description' => 'nullable',
        ]);

        // Update data kategori
        $tag->name = $validatedData['name'];
        $tag->slug = $validatedData['slug'];
        $tag->description = $validatedData['description'];

        // Simpan data ke dalam database
        $tag->save();

        // Redirect atau response setelah data diubah, dengan pesan berisi nama kategori lama dan baru
        return redirect()->route('admin.tags.index')->with('success', "Tag '{$oldName}' berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        // Simpan nama kategori sebelum dihapus
        $tagName = $tag->name;

        // Hapus kategori
        $tag->delete();

        // Redirect atau response setelah data dihapus, dengan pesan berisi nama kategori
        return redirect()->route('admin.tags.index')->with('success', "Tag '{$tagName}' berhasil dihapus.");
    }
}

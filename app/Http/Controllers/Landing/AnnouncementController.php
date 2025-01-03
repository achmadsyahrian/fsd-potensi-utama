<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(Request $request, $categorySlug = null, $tagSlug = null)
    {
        $title = "Pengumuman";
        $search = $request->input('s');

        // Query untuk mengambil data berdasarkan kategori, tag, dan pencarian judul
        $query = Post::with('user', 'category', 'tags')
            ->where('type', 'announcement')
            ->where('is_published', 1)
            ->orderBy('date', 'desc');
            
        // Tambahkan filter kategori jika ada
        if ($categorySlug) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        // Tambahkan filter tag jika ada
        if ($tagSlug) {
            $query->whereHas('tags', function ($q) use ($tagSlug) {
                $q->where('slug', $tagSlug);
            });
        }

        // Terakhir, tambahkan filter pencarian berdasarkan judul
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        // Ambil data dengan paginasi
        $data = $query->paginate(9);
        $data->appends([
            's' => $search,
        ]);

        // Ambil data terbaru
        $dataRecent = Post::with('user', 'category')
            ->where('type', 'announcement')
            ->where('is_published', 1)
            ->orderBy('date', 'desc')
            ->take(5)
            ->get();

        // Ambil semua tags dan kategori
        $tags = Tag::withCount('posts')->orderBy('name')->get();
        $categories = Category::withCount('posts')->orderBy('name')->get();

        // Hitung total data dengan filter kategori dan tag jika ada
        $totalDataQuery = Post::where('type', 'announcement')->where('is_published', 1);

        // Filter kategori
        if ($categorySlug) {
            $totalDataQuery->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        // Filter tag
        if ($tagSlug) {
            $totalDataQuery->whereHas('tags', function ($q) use ($tagSlug) {
                $q->where('slug', $tagSlug);
            });
        }

        $totalData = $totalDataQuery->count();

        return view('landing.posts.announcement.index', compact('data', 'dataRecent', 'tags', 'title', 'categories', 'totalData', 'tagSlug', 'categorySlug'));
    }

    public function byCategory(Request $request, $categorySlug)
    {
        // Panggil index dengan categorySlug
        return $this->index($request, $categorySlug);
    }

    public function byTag(Request $request, $tagSlug)
    {
        // Panggil index dengan tagSlug
        return $this->index($request, null, $tagSlug);
    }

    public function byType(Request $request, $typeSlug)
    {
        // Panggil index dengan typeSlug
        return $this->index($request, $typeSlug);
    }

    public function show($slug) {
        $title = "Pengumuman";
        $route = "landing.news";

        $post = Post::with('category', 'user', 'files')->where('slug', $slug)->firstOrFail();

        $dataRecent = Post::with('user', 'category')
                        ->where('type', 'announcement')
                        ->where('is_published', 1)
                        ->orderBy('updated_at', 'desc')
                        ->take(5)
                        ->get();
                        
        $tags = Tag::all();
        $categories = Category::all();

        return view('landing.posts.announcement.detail', compact('post', 'dataRecent', 'tags', 'title', 'route', 'categories'));
    }

}

<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        $title = "Pengabdian Masyarakat";
        $route = "landing.community";
        
        // Ambil nilai dari query string
        $search = $request->input('search');
        $category = $request->input('category');
        $tag = $request->input('tag');

        // Query untuk mengambil data berdasarkan kategori, tag, dan pencarian judul
        $query = Post::with('user', 'category', 'tags')
            ->where('type', 'community_service')
            ->where('is_published', 1)
            ->orderBy('date', 'desc');

        // Tambahkan filter kategori terlebih dahulu
        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        // Kemudian tambahkan filter tag
        if ($tag) {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('slug', $tag);
            });
        }

        // Terakhir, tambahkan filter pencarian berdasarkan judul
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        // Ambil data dengan paginasi
        $data = $query->paginate(8);
        $data->appends([
            'search' => $search,
            'category' => $category,
            'tag' => $tag,
        ]);

        // Ambil data terbaru
        $dataRecent = Post::with('user', 'category')
            ->where('type', 'community_service')
            ->where('is_published', 1)
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();

        // Ambil semua tags
        $tags = Tag::all();

        return view('landing.posts.index', compact('data', 'dataRecent', 'tags', 'title', 'route'));
    }

    public function show($slug) {
        $title = "Pengabdian Masyarakat";
        $route = "landing.community";

        $post = Post::with('category', 'user', 'files')->where('slug', $slug)->firstOrFail();

        $dataRecent = Post::with('user', 'category')
                        ->where('type', 'community_service')
                        ->where('is_published', 1)
                        ->orderBy('updated_at', 'desc')
                        ->take(5)
                        ->get();
                        
        $tags = Tag::all();

        return view('landing.posts.detail', compact('post', 'dataRecent', 'tags', 'title', 'route'));
    }
}

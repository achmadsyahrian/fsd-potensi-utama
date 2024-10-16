<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Header Section
        $latestNews = Post::where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        
        $totalPosts = Post::where('type', 'news')->where('is_published', 1)->count();

        $latestNewsContent = Post::where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        $latestAnnouncementContent = Post::where('type', 'announcement')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('landing.index', compact('latestNews', 'totalPosts', 'latestNewsContent', 'latestAnnouncementContent'));
    }
    
}

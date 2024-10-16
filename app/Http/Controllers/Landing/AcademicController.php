<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function engineering() {
        $title = "Teknik Industri";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 1)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 1);
                    });
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.engineering', compact('latestPosts', 'title'));
    }

    public function informatics() {
        $title = "Informatika";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 2)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 2);
                    });
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.informatics', compact('latestPosts', 'title'));
    }

    public function systems1() {
        $title = "Sistem Informasi S1";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 3)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 3);
                    });
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.systems1', compact('latestPosts', 'title'));
    }

    public function systemd3() {
        $title = "Sistem Informasi D3";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 4)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 4);
                    });
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.systemd3', compact('latestPosts', 'title'));
    }

    public function computerScience() {
        $title = "Ilmu Komputer S2";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 5)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 5);
                    });
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.computerScience', compact('latestPosts', 'title'));
    }
    
}

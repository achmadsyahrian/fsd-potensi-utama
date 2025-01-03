<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function dkv() {
        $title = "Desain Komunikasi Visual";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 1)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 1);
                    });
            })
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.dkv', compact('latestPosts', 'title'));
    }

    public function ftv() {
        $title = "Film & Televisi";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 2)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 2);
                    });
            })
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.ftv', compact('latestPosts', 'title'));
    }

    public function interior() {
        $title = "Desain Interior";
        
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->where(function ($query) {
                $query->where('category_id', 3)
                    ->orWhereHas('tags', function ($query) {
                        $query->where('tags.id', 3);
                    });
            })
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('landing.academic.interior', compact('latestPosts', 'title'));
    }

}

<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Berikan data 'latestAnnouncement' ke semua views
        View::composer('*', function ($view) {
            $latestAnnouncement = Post::where('type', 'announcement')
                ->where('is_published', 1)
                ->orderBy('date', 'desc')
                ->take(3)
                ->get();

            $view->with('latestAnnouncement', $latestAnnouncement);
        });
    }
}

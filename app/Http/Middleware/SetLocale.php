<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Set locale berdasarkan session jika ada, atau fallback ke bahasa default (ID)
        $locale = session('locale', 'id');
        App::setLocale($locale);

        return $next($request);
    }
}

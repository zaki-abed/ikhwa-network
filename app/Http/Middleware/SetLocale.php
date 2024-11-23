<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');

        if (in_array($locale, ['en', 'ar', 'fr'])) {
            App::setLocale($locale);
        } else {
            App::setLocale('ar');
        }

        return $next($request);
    }
}

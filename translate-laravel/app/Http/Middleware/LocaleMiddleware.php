<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;


class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
       
        if ($request->has('locale')) {
            $locale = $request->query('locale');
            session(['locale' => $locale]);
            session()->save();
            Log::debug("Locale set via query string: $locale");
        }

       
        $locale = session('locale', 'en');
        Log::debug("Locale from session: $locale");
        App::setLocale($locale);
        Log::debug("Middleware aplicado, idioma definido para: $locale");

        return $next($request);
    }
}

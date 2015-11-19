<?php

namespace App\Http\Middleware;
use Closure;
use App;
use Jenssegers\Date\Date;

class Locale {

    public function handle($request, Closure $next) {
        if (!$request->session()->has('custom_locale')) {
            $locale = $this->getUserLocale();
            $request->session()->put('custom_locale', $locale);
        }
        App::setLocale($request->session()->get('custom_locale'));
        Date::setLocale($request->session()->get('custom_locale'));
        return $next($request);
    }

    private function getUserLocale() {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        // Set locale to 'en' if it is neither English nor German
        if ($lang !== 'en' && $lang !== 'de') {
            $lang = 'en';
        }
        return $lang;
    }
}
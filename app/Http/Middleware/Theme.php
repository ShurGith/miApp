<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Theme
{
    public function handle(Request $request, Closure $next): Response
    {
         $themeSesion = Session::get('themeLocal');
         if(!$themeSesion)
            Session::put('themeLocal', 'light');
         return $next($request);
    }
}

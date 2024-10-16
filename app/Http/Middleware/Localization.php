<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         
        // if (Session::get('locale') !== null) {
        //     App::setLocale(Session::get('locale'));
        //     dd("found");
        // }else{
        //     dump("not found");
        // }
        // dump(session()->get('locale'));
        // if (Session::get('locale') !== null) {
        //     App::setLocale(Session::get('locale'));
        // }else{
        //     Session::put('locale','en');
        //     App::setLocale(Session::get('locale'));
        // }

        $locale = Session::get('locale') ?? 'en';
        Session::put('locale', $locale);
        App::setLocale($locale);
        
        return $next($request);
    }
}

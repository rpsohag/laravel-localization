<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change($locale)
    {
        if (! in_array($locale, ['bn', 'en', 'ch'])) {
            abort(400);
        }
     
        App::setLocale($locale);
        Session::put('locale', $locale);

        return redirect()->back();
    }
}

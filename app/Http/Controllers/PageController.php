<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function about()
    {
        $locale = App::getLocale();

        $about = Page::with(['translations' => function ($query) use ($locale) {
            $query->where('locale', $locale);
        }])->first();
    
        // Fallback to default locale if translation doesn't exist
        $translation = $about->translations->first() ?? $about->translations()->where('locale', 'en')->first();
    
        return view("about", ["about" => $about, "translation" => $translation]);
    }
}

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/change-lang/{locale}', [LanguageController::class,'change'])->name('change.lang');
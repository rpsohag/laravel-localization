<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/change-lang/{locale}', [LanguageController::class,'change'])->name('change.lang');
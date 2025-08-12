<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});


//common pages route

Route::controller(PagesController::class)->group(function () {
    Route::get('terms-and-conditions', 'terms')->name('terms.conditions');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('faq', 'faq')->name('faq');
    Route::get('privacy-policy', 'privacy')->name('privacy');
});

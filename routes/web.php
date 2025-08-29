<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');

//checkout
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');

//cart
Route::get('cart', [CartController::class, 'index'])->name('cart.index');

//products
Route::get('products', [ProductController::class, 'index'])->name('products.index');

//wishlist
Route::get('wishlists', [WishlistController::class, 'index'])->name('wishlists.index');

//compare
Route::get('compares', [CompareController::class, 'index'])->name('compares.index');


//subscribe
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');


//common pages route
Route::controller(PagesController::class)->group(function () {
    Route::get('terms-and-conditions', 'terms')->name('terms.conditions');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::post('contact/store', 'contactstore')->name('contact.store');
    Route::get('faq', 'faq')->name('faq');
    Route::get('privacy-policy', 'privacy')->name('privacy');
});

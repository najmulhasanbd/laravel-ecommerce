<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CategoryController;
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
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart-items', [CartController::class, 'cartItems'])->name('cart.items');
Route::post('/cart-remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart-update', [CartController::class, 'update'])->name('cart.update');


//products
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('product/{slug}', [ProductController::class, 'productdetails'])->name('products.details');
Route::get('category/{slug}', [ProductController::class, 'productcategory'])->name('products.category');

//wishlist
Route::get('wishlists', [WishlistController::class, 'index'])->name('wishlists.index');

//compare
Route::get('compares', [CompareController::class, 'index'])->name('compares.index');


//subscribe
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');

//category
Route::get('category-page',[CategoryController::class,'allcategory'])->name('category.all');


//common pages route
Route::controller(PagesController::class)->group(function () {
    Route::get('terms-and-conditions', 'terms')->name('terms.conditions');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::post('contact/store', 'contactstore')->name('contact.store');
    Route::get('faq', 'faq')->name('faq');
    Route::get('privacy-policy', 'privacy')->name('privacy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

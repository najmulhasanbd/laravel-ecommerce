<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Frontend\UserController;

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/orders', [UserController::class, 'orders'])->name('user.orders');
    Route::get('/reviews', [UserController::class, 'reviews'])->name('user.reviews');
});

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

//checkout
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/user/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
Route::get('compares/add/{id}', [CompareController::class, 'addToCompare'])->name('compares.add');
Route::delete('compares/remove/{id}', [CompareController::class, 'remove'])->name('compares.remove');

//subscribe
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');

//category
Route::get('category-page', [CategoryController::class, 'allcategory'])->name('category.all');

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

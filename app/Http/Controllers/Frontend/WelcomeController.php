<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->limit(6)->orderBy('en_category_name', 'asc')->get();
        $products = Product::with('category', 'brand')->where('status', 1)->limit(4)->get();
        $featuredproducts = Product::with('category', 'brand')->where('status', 1)->where('is_featured',1)->limit(4)->get();
        $best_sellingproducts = Product::with('category', 'brand')->where('status', 1)->where('is_best_selling',1)->limit(4)->get();
        $new_arrivalproducts = Product::with('category', 'brand')->where('status', 1)->where('is_new_arrival',1)->limit(4)->get();
        $onsaleproducts = Product::with('category', 'brand')->where('status', 1)->where('is_featured',1)->limit(4)->get();
        return view('frontend.welcome', compact('categories', 'products','new_arrivalproducts','onsaleproducts','best_sellingproducts','featuredproducts'));
    }
}

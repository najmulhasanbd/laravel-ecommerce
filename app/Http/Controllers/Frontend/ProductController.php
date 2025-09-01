<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $products = Product::with('category', 'brand')->where('status', 1)->get();
        return view('frontend.products.index', compact('categories', 'brands', 'products'));
    }
    public function productdetails($slug)
    {
        $details = Product::with('category')->where('slug', $slug)->first();
        $relatedproduct = Product::where('category_id', $details->category_id)->where('id', '!=', $details->id)->where('status', 1)->latest()->limit(4)->get();
        $productImage = DB::table('galleries')->where('product_id', $details->id)->get();
        return view('frontend.products.details', compact('details', 'relatedproduct', 'productImage'));
    }
    public function productcategory($slug)
    {
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $selectedCategory = Category::where('status', 1)->where('slug', $slug)->first();
        $products = Product::where('status', 1)->where('category_id', $selectedCategory->id)->get();
        return view('frontend.products.byCategory', compact('categories', 'brands', 'products','selectedCategory'));
    }
}

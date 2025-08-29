<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories=Category::where('status',1)->get();
        $brands=Brand::where('status',1)->get();
        $products=Product::with('category','brand')->where('status',1)->get();
        return view('frontend.products.index',compact('categories','brands','products'));
    }
}

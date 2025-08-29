<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function allcategory(){
        $categories=DB::table('categories')->get();
        return view('frontend.pages.category',compact('categories'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        // $categories=Category::where('status',1)->limit(6)->orderBy('name','asc')->get();
        return view('frontend.welcome');
    }
}

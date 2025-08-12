<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function terms(){
        return view('frontend.pages.terms_conditions');
    }
    public  function about(){
        return view('frontend.pages.about');
    }
    public  function contact(){
        return view('frontend.pages.contact');
    }
    public  function faq(){
        return view('frontend.pages.faq');
    }
    public  function privacy(){
        return view('frontend.pages.privacy_policy');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('frontend.user.profile');
    }
    public function reviews()
    {
        return view('frontend.user.reviews');
    }
    public function orders()
    {
        return view('frontend.user.orders');
    }
}

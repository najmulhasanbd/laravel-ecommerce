<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
 public function store(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Save subscriber
        Subscriber::create([
            'email' => $request->email,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}

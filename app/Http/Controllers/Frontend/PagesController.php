<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function terms()
    {
        return view('frontend.pages.terms_conditions');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function contactstore(Request $request)
    {
        // Validation
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'nullable|string|max:100',
            'email' => 'required|email|max:150|unique:contacts,email',
            'contact_number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Save data
        Contact::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'message' => $request->message,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Thank you for contacting us, we will contact you soon.');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function privacy()
    {
        return view('frontend.pages.privacy_policy');
    }
}

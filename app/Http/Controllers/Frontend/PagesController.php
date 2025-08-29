<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function terms()
    {
        $data=DB::table('pages')->where('slug','terms-and-conditions')->first();
        return view('frontend.pages.terms_conditions',compact('data'));
    }
    public function about()
    {
        $data=DB::table('pages')->where('slug','about')->first();    
        return view('frontend.pages.about',compact('data'));
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
        $data=DB::table('faq')->get();
        return view('frontend.pages.faq',compact('data'));
    }
    public function privacy()
    {
        $data=DB::table('pages')->where('slug','privacy-policy')->first();
        return view('frontend.pages.privacy_policy',compact('data'));
    }
}

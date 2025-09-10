<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Compare;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $compares = Compare::where('user_id', $user->id)->with('product')->get();
        // return $compares;
        return view('frontend.compare.index', compact('compares'));
    }

    public function addToCompare($id)
    {
        $user = Auth::user();

        $count = Compare::where('user_id', $user->id)->count();
        if ($count >= 2) {
            return redirect()->back()->with('error', 'You can only compare maximum 2 products');
        }

        $compare = Compare::firstOrCreate([
            'user_id' => $user->id,
            'product_id' => $id,
        ]);

        if (!$compare->wasRecentlyCreated) {
            return redirect()->back()->with('error', 'Product already in compare list');
        }

        return redirect()->back()->with('success', 'Product added to compare list successfully');
    }public function remove($id)
{
    $compare = Compare::findOrFail($id);
    $compare->delete();

    return response()->json([
        'status'  => 'success',
        'message' => 'Product removed from compare list'
    ]);
}

}

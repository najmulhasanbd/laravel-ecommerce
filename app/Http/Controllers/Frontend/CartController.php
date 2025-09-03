<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart.index');
    }
    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Product not found']);
        }

        $cart = Session::get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += 1;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->en_name,
                'price' => $product->price,
                'discounted_price' => $product->discounted_price,
                'quantity' => 1,
                'color' => $request->color,
                'size'  => $request->size,
            ];
        }

        Session::put('cart', $cart);

        $totalCount = array_sum(array_column($cart, 'quantity'));
        $totalAmount = array_sum(
            array_map(function ($item) {
                $price = $item['discounted_price'] ?? $item['price'];
                return $price * $item['quantity'];
            }, $cart),
        );

        return response()->json([
            'status' => 'success',
            'totalCount' => $totalCount,
            'totalAmount' => $totalAmount,
            'message' => $product->en_name . ' added to cart',
            'cart' => $cart,
        ]);
    }

    // Get cart items (optional)
    public function cartItems()
    {
        $cart = Session::get('cart', []);
        $totalCount = array_sum(array_column($cart, 'quantity'));
        $totalAmount = array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cart));

        return response()->json([
            'cart' => $cart,
            'totalCount' => $totalCount,
            'totalAmount' => $totalAmount,
        ]);
    }
    public function remove(Request $request)
    {
        $id = $request->id;
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        // নতুন হিসাব
        $cart_count = array_sum(array_column($cart, 'quantity'));
        $cart_total = array_sum(array_map(fn($i) => ($i['discounted_price'] ?? $i['price']) * $i['quantity'], $cart));

        return response()->json([
            'status' => true,
            'message' => 'Item removed successfully',
            'cart_count' => $cart_count,
            'cart_total' => $cart_total,
        ]);
    }
    public function update(Request $request)
    {
        $id       = $request->id;
        $quantity = (int) $request->quantity;

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            if ($quantity > 0) {
                $cart[$id]['quantity'] = $quantity;
            } else {
                unset($cart[$id]); // যদি 0 হয় তাহলে রিমুভ করে দেবে
            }

            session()->put('cart', $cart);
        }

        $cart_count = array_sum(array_column($cart, 'quantity'));
        $cart_total = array_sum(array_map(fn($i) => ($i['discounted_price'] ?? $i['price']) * $i['quantity'], $cart));
        $row_total  = isset($cart[$id]) ? ($cart[$id]['discounted_price'] ?? $cart[$id]['price']) * $cart[$id]['quantity'] : 0;

        return response()->json([
            'status'     => true,
            'message'    => 'Cart updated',
            'cart_count' => $cart_count,
            'cart_total' => $cart_total,
            'row_total'  => $row_total,
            'quantity'   => $cart[$id]['quantity'] ?? 0,
        ]);
    }
}

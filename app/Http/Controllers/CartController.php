<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('them.cart.index');
    }

    public function addToCart(Request $request)
    {
        // dd($request->all());

        $request->session()->push('cartItems', [
            'productId' => $request->productId,
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
        ]);



        // dd(session()->all());

        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully');
    }
}

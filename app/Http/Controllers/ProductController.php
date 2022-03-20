<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $popularProducts = Product::inRandomOrder()->limit(4)->get();
        $relatedProducts = Product::where('category_id', $product->category_id)->inRandomOrder()->get();

        if ($product) {
            return view('products.show', compact('product', 'popularProducts', 'relatedProducts'));
        } else {
            return abort(404);
        }
    }
}

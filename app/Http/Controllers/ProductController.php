<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;


class ProductController extends Controller
{
    //
    public function index() {
        //test pour voir le contenu du panier
        //dd(Cart::content());
        $products = Product::inRandomOrder()->take(9)->get();
        //dd($products);
        return View('products.index')->with('products', $products);

    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show')->with('product', $product);
    }
}

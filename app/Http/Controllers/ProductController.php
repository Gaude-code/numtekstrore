<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class ProductController extends Controller
{
    //
    public function index() {

        $products = Product::inRandomOrder()->take(9)->get();
        //dd($products);
        return View('products.index')->with('products', $products);

    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->first();

        return view('products.show')->with('product', $product);
    }
}

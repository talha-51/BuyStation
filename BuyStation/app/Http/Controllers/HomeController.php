<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('home')->with('products', $products);
    }

    public function productDetails($product_id)
    {
        $product = DB::table('products')->where('product_id', $product_id)->first();
        return view('productDetails')->with('product', $product);
    }
}

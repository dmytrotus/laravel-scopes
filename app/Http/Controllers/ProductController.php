<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::take(100)->get();
        $products = Product::withMainImage()->take(100)->get();

        //dd($products->first());

        return view('list')
        ->with('products', $products);
    }
}

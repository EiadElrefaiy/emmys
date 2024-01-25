<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productDetailsController extends Controller
{

    public function show($id)
    {
        $products = Product::all();

        $product = Product::findOrFail($id);

        return view('product_details', compact('product' , 'products'));
    }
}

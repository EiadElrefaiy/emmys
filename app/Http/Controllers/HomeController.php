<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $scrollId = $request->scrollId;

        $products = Product::all();

        return view('index', compact('products' , 'scrollId'));
    }
}

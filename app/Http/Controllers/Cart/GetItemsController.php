<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class GetItemsController extends Controller
{
        public function index(Request $request)
        {
            $userId = auth()->user()->id;
            $cartItems = Cart::where("user_id" , $userId)->get();
            $totalPrice = 0;
            for($n = 0; $n < count($cartItems); $n++){
                $totalPrice += ($cartItems[$n]->quantity * Product::find($cartItems[$n]->product_id)->price);
                $cartItems[$n]->product_image = Product::find($cartItems[$n]->product_id)->image;
                $cartItems[$n]->product_price = Product::find($cartItems[$n]->product_id)->price;    
                $cartItems[$n]->product_name = Product::find($cartItems[$n]->product_id)->name;    
            }

            return view('cartpage', compact('cartItems', 'totalPrice'));
        }
    }

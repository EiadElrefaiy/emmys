<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class deleteItemController extends Controller
{
    public function removeItemFromCart(Request $request)
    {
        try {
           $CartId = $request->input('id');

           $cart_item = Cart::find($CartId);

           $cart_item ->delete();

           return response()->json(['message' => 'Item deleted successfully']);

        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return response()->json(['error' => 'Unexpected Error'], 500);
        }
   }
}

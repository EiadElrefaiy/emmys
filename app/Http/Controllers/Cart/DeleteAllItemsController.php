<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class DeleteAllItemsController extends Controller
{
    public function removeAllItemsFromCart(Request $request)
    {
        try {
           $userId = $request->input('user_id');

           $cart_items = Cart::where("user_id" , $userId)->get();

           for($n = 0; $n < count($cart_items); $n++){
           $item = Cart::find($cart_items[$n]->id);
           $item->delete();
           }

           return response()->json(['message' => 'Cart deleted successfully']);

        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return response()->json(['error' => 'Unexpected Error'], 500);
        }
   }
}

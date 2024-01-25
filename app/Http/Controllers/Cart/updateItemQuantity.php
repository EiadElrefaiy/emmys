<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class updateItemQuantity extends Controller
{
    public function updateQuantity(Request $request)
    {
        try {
            // Validate the request if necessary
            $request->validate([
                'user_id' => ['required', 'exists:users,id'],
                'product_id' => ['required', 'exists:products,id'],
                'quantity' => ['required', 'integer', 'min:1'],
            ]);

            $UserId = $request->input('user_id');
            $productId = $request->input('product_id');
            $newQuantity = $request->input('quantity');

            // Update the quantity in the database
            Cart::where('product_id', $productId)->where("user_id" , $UserId)->update(['quantity' => $newQuantity]);

            return response()->json(['message' => 'Quantity updated successfully']);
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return response()->json(['error' => 'Error updating quantity'], 500);
        }
   }
}
<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;


class AddItemController extends Controller
{
    public function addToCart(Request $request)
    {
        $userId = $request->input('user_id');
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Check if the user is authenticated
        if (!$userId) {
            return response()->json(['error' => 'User not authenticated.'], 401);
        }

        // Check if the product is already in the cart, if yes, update quantity
        $cartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // If the product is not in the cart, create a new cart item
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }

        // You can return a response if needed
        return response()->json(['message' => 'Product added to cart successfully.']);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {

            $products = Product::all();
            
            $userId = null;
    
            // Check if the user is authenticated
            if (auth()->check()) {
                $userId = auth()->user()->id;
            }
    
            $cartItems = [];
    
            // Only fetch cart items if the user is authenticated
            if ($userId) {
                $cartItems = Cart::where('user_id', $userId)->get();
                $cartTotal = 0;
    
                foreach ($cartItems as $cartItem) {
                    $product = Product::find($cartItem->product_id);
    
                    // Add product details to the cart item
                    $cartItem->product_image = $product->image;
                    $cartItem->product_price = $product->price;
                    $cartItem->product_name = $product->name;
    
                    // Calculate the total price for the cart
                    $cartTotal += ($cartItem->quantity * $product->price);
                }
            } else {
                $cartTotal = 0;
            }
    
            $view->with('cartItems', $cartItems)->with('cartTotal', $cartTotal)->with('products' , $products);
        });
            Schema::defaultStringLength(191);
    }
}

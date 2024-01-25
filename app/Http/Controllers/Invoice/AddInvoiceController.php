<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Cart;

class AddInvoiceController extends Controller
{
    public function createInvoice(Request $request)
    {
        $userId = auth()->user()->id;
        
        $cart_items = Cart::where("user_id" , $userId)->get();
        for($n = 0; $n < count($cart_items); $n++){
            $item_deleted = Cart::find($cart_items[$n]->id); 
            $item_deleted->delete();
        }
        $sixDigitNumber = random_int(100000, 999999);

        // Create an invoice
        $invoice = Invoice::create([
            'user_id' => $userId,
            'code' => strval($sixDigitNumber),
            'status' => 0,
            'total' => $request->input('total'),
        ]);

        // Add invoice items
        $items = $request->input('items');
        foreach ($items as $item) {
            InvoiceItem::create([
                'invoice_id' => $invoice->id,
                'image' => $item['product_image'],
                'price' => $item['product_price'],
                'quantity' => $item['quantity'],
                'total' => $item['total'],
                // Add other item fields as needed
            ]);
        }

        $invoices = Invoice::where("user_id" , $userId)->get();

        // You can return a response or redirect as needed
        return view('account', compact('invoices'));
    }
}

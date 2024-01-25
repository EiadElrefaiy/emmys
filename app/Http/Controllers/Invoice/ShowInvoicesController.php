<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;


class ShowInvoicesController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $invoices = Invoice::where("user_id" , $userId)->get();
        return view('account', compact('invoices'));
    }

    public function showInvoice(Request $request)
    {
        $invoiceId = $request->invoice_id;
        $invoice_items = InvoiceItem::where("invoice_id" , $invoiceId)->get();
        for($n = 0; $n < count($invoice_items); $n++){
        $product_id = Product::where("image" , $invoice_items[$n]->image)->pluck("id");
        $product = Product::find($product_id[0]);
        $invoice_items[$n]->name = $product->name;
        }
        $totalPrice =  $invoice_items->sum("total");
        return view('invoice', compact('invoice_items' , 'totalPrice'));
    }
}

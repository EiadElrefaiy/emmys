<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class AccountController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $invoices = Invoice::where("user_id" , $userId)->get();
        return view('account', compact('invoices'));
    }
}

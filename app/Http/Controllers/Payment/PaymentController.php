<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Paytabscom\Laravel_paytabs\Facades\paypage; 

class PaymentController extends Controller
{
    public function view_checkout_page(){
        return view('checkout');
    }

    public function initiate_payment(Request $request){

        $pay = paypage::sendPaymentCode('all')
        ->sendTransaction('sale', 'VISA') // Replace 'YourTransactionType' with the actual transaction type
        ->sendCart(uniqid(), 100, 'Test Product')
        ->sendCustomerDetails('John Doe', 'john@example.com', '1234567890', 'Street Address', 'City', 'State', 'Country', '12345', '127.0.0.1')
        ->sendShippingDetails(true, 'John Doe', 'john@example.com', '1234567890', 'Street Address', 'City', 'State', 'Country', '12345', '127.0.0.1')
        ->sendHideShipping(false)
        ->sendURLs('http://yourwebsite.com/return_url', 'http://yourwebsite.com/callback_url')
        ->sendLanguage('en')
        ->create_pay_page();
        return redirect($pay);
        }
}
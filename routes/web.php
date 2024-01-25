<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contacts/store', [App\Http\Controllers\ContactController::class, 'store'])->name('storeContact');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');

Route::get('/branches', [App\Http\Controllers\BranchesController::class, 'index'])->name('branches');

Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');

Route::get('/product/{id}', [App\Http\Controllers\productDetailsController::class, 'show'])->name('productDetails');

//=======================================================================================================================================

Route::post('user-update', [App\Http\Controllers\User\UserController::class, 'update'])->name('updateUser');

Route::post('/update-password', [App\Http\Controllers\User\UserController::class, 'updatePassword'])->name('updatePassword');

//=======================================================================================================================================

Route::middleware(['auth'])->group(function () {

Route::get('/cartpage', [App\Http\Controllers\Cart\GetItemsController::class, 'index'])->name('cartpage');

Route::post('/add-to-cart', [App\Http\Controllers\Cart\AddItemController::class, 'addToCart'])->name('addToCart');

Route::post('/update-cart-item-quantity', [App\Http\Controllers\Cart\updateItemQuantity::class, 'updateQuantity'])->name('updateCartItemQuantity');

Route::post('/delete-cart-item', [App\Http\Controllers\Cart\deleteItemController::class, 'removeItemFromCart'])->name('removeFromCart');

Route::post('/delete-all-cart', [App\Http\Controllers\Cart\DeleteAllItemsController::class, 'removeAllItemsFromCart'])->name('removeAllFromCart');

Route::get('/checkout', [App\Http\Controllers\CheckOutController::class, 'index'])->name('checkout');

});
Route::post('payment', [App\Http\Controllers\Payment\PaymentController::class, 'initiate_payment'])->name('payment');

Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');

Route::get('email-verification', [App\Http\Controllers\Auth\VerificationController::class, 'showVerification'])->name('EmailVerification');


//=======================================================================================================================================

Route::post('/add-invoice', [App\Http\Controllers\Invoice\AddInvoiceController::class, 'createInvoice'])->name('addInvoice');

Route::get('/show-invoices', [App\Http\Controllers\Invoice\ShowInvoicesController::class, 'index'])->name('showInvoices');

Route::get('/show-invoice', [App\Http\Controllers\Invoice\ShowInvoicesController::class, 'showInvoice'])->name('showInvoice');


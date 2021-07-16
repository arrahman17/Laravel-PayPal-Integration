<?php
use App\Http\Controllers\PayPalPaymentController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('paypal/checkout/{event}',  [PayPalPaymentController::class, 'getExpressCheckout'])->name('paypal.checkout');
Route::get('paypal/checkout-success/{event}', [PayPalPaymentController::class, 'getExpressCheckoutSuccess'])->name('paypal.success');
Route::get('paypal/checkout-cancel', [PayPalPaymentController::class, 'cancelPage'])->name('paypal.cancel');

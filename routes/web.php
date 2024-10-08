<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

//--------------------------------------------------------------------------------------------------------------------------//

use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class, 'login'])->name('home.login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register',[AuthController::class, 'register'])->name('home.register');

Route::get('/forgetpassword',[AuthController::class, 'forget_password'])->name('home.forget_password');

Route::get('/register', [AuthController::class,'register'])->name('home.register');

Route::post('/store', [AuthController::class,'store'])->name('store');

Route::get('/resetpassword',[AuthController::class, 'reset_password'])->name('home.reset_password');

Route::get('/myaccount',[AuthController::class, 'my_account'])->name('home.my_account');

Route::get('/privacypolicy',[AuthController::class, 'privacy_policy'])->name('home.privacy_policy');

Route::get('/terms',[AuthController::class, 'terms'])->name('home.terms');

//Register email 

Route::post('/send-register-mail', [AuthController::class, 'sendRegisterMail']);

//wishlist
Route::get('/wishlist', [AuthController::class, 'wishlist'])->name('home.wishlist');


//---------------------------------------------------------------------------------------------------------------------//

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Product detail page
Route::get('/products/{id}', [HomeController::class, 'show'])->name('product.show');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');


//--------------------------------------------------------------------------------------------------------------------//

use App\Http\Controllers\CartController;

// Cart listing page
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Add to Cart
Route::post('/cart/add_to_cart', [CartController::class, 'add_to_cart'])->name('cart.add_to_cart');

// Increase quantity route
Route::post('/cart/increase/{id}', [CartController::class, 'increaseQuantity'])->name('cart.increase');

// Decrease quantity route
Route::post('/cart/decrease/{id}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');

// Remove item from cart
Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Checkout route (if you have a checkout process)
// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

// Clear cart route
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

//-------------------------------------------------------------------------------------------------------------------

use App\Http\Controllers\OrderController;

Route::get('/orders', [OrderController::class, 'index'])->name('order.index');

// Order Confirmation Route place order
Route::post('place_an_order', [OrderController::class, 'place_an_order'])->name('order.place_an_order');

// Checkout Route
Route::post('checkout', [OrderController::class, 'checkout'])->name('checkout');

// Order Confirmation Route
Route::get('order/confirmation/{order}', [OrderController::class, 'confirmation'])->name('order.confirmation');

// Order history Route
Route::get('order/history/{id}', [OrderController::class, 'order_history'])->name('order.history');


// Order show Route
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');

//-------------------------------------------------------------------------------------------------------------------------


use App\Http\Controllers\InvoiceController;

    Route::get('/invoice/generate-pdf/{id}', [InvoiceController::class, 'generateInvoicePdf'])->name('invoice.generate-pdf');
    Route::get('/invoice/download-pdf/{id}', [InvoiceController::class, 'downloadInvoicePdf'])->name('invoice.download-pdf');
    Route::get('/invoice/stream-pdf/{id}', [InvoiceController::class, 'streamInvoicePdf'])->name('invoice.stream-pdf');
    Route::get('/invoice/send-email/{id}', [InvoiceController::class, 'sendInvoiceEmail'])->name('invoice.send-email');


// Fallback route for 404
Route::get('{any}', [AuthController::class, 'error'])->where('any', '.*');

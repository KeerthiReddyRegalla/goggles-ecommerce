<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashbaordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'retail.home')->name('home');
Route::view('/about', 'retail.about')->name('about');
Route::view('/checkout', 'retail.checkout')->name('checkout');
Route::view('/contact', 'retail.contact')->name('contact');
Route::view('/customer', 'retail.customer')->name('customer');
Route::view('/shop', 'retail.shop')->name('shop');
Route::view('/single', 'retail.single')->name('single');

Route::view('login', 'admin.auth.login')->name('login');
Route::post('login', [\App\Http\Controllers\CustomAuthController::class, 'login'])->name('login');
Route::view('signup', 'admin.auth.signup')->name('signup');
Route::post('signup', [\App\Http\Controllers\CustomAuthController::class, 'register'])->name('signup');
Route::post('logout', [\App\Http\Controllers\CustomAuthController::class, 'logout'])->name('logout');
Route::view('two-factor-challenge', 'admin.auth.two-factor-challenge')->name('two-factor-challenge');
Route::get('/checkout', \App\Http\Controllers\Admin\CheckoutController::class)->name('checkout');
Route::resource('payments', \App\Http\Controllers\PaymentController::class);
Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
Route::prefix('paypal')->name('paypal.')->group(function (){
    Route::post('/payment', [\App\Http\Controllers\PaymentController::class, 'paypalPayment'])->name('payment');
    Route::get('/success', [\App\Http\Controllers\PaymentController::class, 'paypalSuccess'])->name('success');
    Route::get('/cancel', [\App\Http\Controllers\PaymentController::class, 'paypalCancel'])->name('cancel');
});

Route::get('/product/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('products.show');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function (){
   Route::get('/dashboard', DashbaordController::class)->name('dashboard');
   Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
   Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
   Route::resource('customers', \App\Http\Controllers\Admin\UserController::class);
});

Route::fallback(function (){
    return view(404);
});

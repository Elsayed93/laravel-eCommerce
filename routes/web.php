<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\User\UserDashboardController;
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
    return view('them.home');
})->name('them.home');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/addToCart', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::resource('products', ProductController::class);
// Route::get('/product/{slug}', [CheckoutController::class, 'index'])->name('checkout.index');


require __DIR__ . '/auth.php';


// admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin-auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.home');
});

// user
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user-auth'], 'as' => 'user.'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard.home');
});

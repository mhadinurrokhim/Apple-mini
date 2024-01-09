<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(ShopController::class)->group(function () {
    Route::get('product/detail', 'productDetails')->name('user.product_detail');
    Route::get('products', 'productList')->name('user.product_list');
});
Route::controller(WishlistController::class)->prefix('wishlist')->group(function () {
    Route::get('/', 'index')->name('user.wishlist');
});
Route::controller(ProfileController::class)->prefix('profile')->group(function () {
    Route::get('/', 'index')->name('user.profile');
});
Route::controller(CheckoutController::class)->prefix('checkout')->group(function () {
    Route::get('/', 'index')->name('user.checkout_view');
});
Route::controller(OrderController::class)->prefix('order')->group(function () {
    Route::get('traking', 'traking')->name('user.order_traking_view');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'loginView')->name('auth.login_view');
    Route::get('register', 'registerView')->name('auth.register_view');
    Route::get('logout', 'logoutView')->name('auth.logout_view');
    Route::get('forgot-password', 'forgotPasswordView')->name('auth.forgot_password_view');
    Route::get('reset-password', 'resetPasswordView')->name('auth.reset_password_view');
});
Route::controller(CartController::class)->prefix('cart')->group(function () {
    Route::get('/', 'index')->name('cart');
});


Route::prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/products', [DashboardController::class,'products'])->name('admin.products');
    Route::get('/add-product', [DashboardController::class,'addProduct'])->name('admin.add_product');
    Route::get('/customers', [DashboardController::class,'customers'])->name('admin.customers');
    Route::get('/orders', [DashboardController::class,'orders'])->name('admin.orders');
    Route::get('/orders-details', [DashboardController::class,'orderDetails'])->name('admin.orders_details');
});
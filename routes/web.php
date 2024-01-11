<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukfilterController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfilController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//USER
Route::get('/home', [HomeController::class, 'home']);
Route::get('/produkfilter', [ProdukfilterController::class, 'produkfilter']);
Route::get('/wishlist', [WishlistController::class, 'wishlist']);
Route::get('/tracking', [TrackingController::class, 'tracking']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/profil', [ProfilController::class, 'profil']);

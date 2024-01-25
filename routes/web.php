<?php

use App\Models\Adminorder;
use App\Http\Controllers\Homeuser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminorderController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProdukfilterController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukdetailController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UlasanprodukController;

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

// LANDING PAGE
Route::get('/', function () {
    return view('welcome');
});

// LOGIN REGISTER
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/proseslogin', [AuthController::class, 'proseslogin'])->name('proseslogin');
Route::post('/Createregister', [AuthController::class, 'Createregister'])->name('Createregister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// RESET PASSWORD
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('forgot-password', 'request')->name('password.request');
    Route::post('forgot-password', 'sendEmail')->name('password.email');
    Route::get('reset-password/{token}', 'resetPassword')->name('password.reset');
    Route::post('reset-password', 'updatePassword')->name('password.update');
});


// ADMIN
Route::middleware([AdminMiddleware::class])->group(function () {

    Route::get('/AdminDashboard', [AdmindashboardController::class, 'index'])->name('dashboard.side');
    Route::get('/adminorder', [AdminorderController::class, 'index'])->name('order.side');

    Route::controller(ProdukController::class)->prefix('produk')->group(function () {
        Route::get('', 'index')->name('produk.side');
        Route::get('/create', 'create')->name('tambah.produk');
        Route::post('/store', 'store')->name('produk.store');
        Route::get('/edit/{id}', 'edit')->name('produk.edit');
        Route::put('/edit/{id}', 'update')->name('produk.update');
    });

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('', 'index')->name('kategori.side');
        Route::get('create', 'create')->name('kategori.create');
        Route::post('store', 'store')->name('kategori.store');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::put('edit/{id}', 'update')->name('kategori.update');
        Route::get('destroy/{id}', 'destroy')->name('kategori.destroy');
    });
});


// User
Route::middleware([UserMiddleware::class])->group(function () {

    Route::get('/homeuser', [HomeUserController::class, 'homeuser'])->name('homeuser');
    Route::get('/detailproduk{id}', [HomeUserController::class, 'detailproduk'])->name('detail.produk');
    Route::post('{produk_id}/order', [HomeUserController::class,'order'])->name('shop.order');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil')->name('profil');
    Route::get('/produkfilter', [ProdukfilterController::class, 'produkfilter'])->name('produkfilter');
    Route::get('/produkdetail/{id}', [ProdukfilterController::class, 'detail'])->name('produk.detail');
    Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
    Route::get('/tracking', [TrackingController::class, 'tracking'])->name('tracking');
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    // Route::patch('/checkout-keranjang', [CheckoutController::class, 'chekoutKeranjang'])->name('checkout-keranjang');
    // Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    // Route::patch('/checkout-keranjang', [CheckoutController::class, 'chekoutKeranjang'])->name('checkout-keranjang');
    Route::get('/navbar', [NavbarController::class, 'navbar'])->name('navbar');

    // Route::post('/prosescheckout{id}', [CheckoutController::class, 'prosescheckout'])->name('prosescheckout');
    // Route::get('/produkdetail', [ProdukdetailController::class, 'produkdetail'])->name('produkdetail');
    Route::get('/ulasanproduk', [UlasanprodukController::class, 'ulasanproduk']);
    // Route::controller(CheckoutController::class)->prefix('checkout')->group(function () {
    //     Route::get('/checkout/{id}', 'index')->name('checkout.index');
    //     Route::get('/checkout', 'store')->name('checkout');
    // });
    Route::controller(KeranjangController::class)->prefix('keranjang')->group(function () {
        Route::get('keranjang', 'index')->name('keranjang');
        Route::post('keranjang', 'update')->name('keranjang.update');
        Route::delete('keranjang/{id}', 'destroy')->name('keranjang.destroy');
        Route::get('keranjangcheckout/{id}', 'keranjangcheckout')->name('keranjang.checkout');
    });
    Route::post('/beli{id}',[HomeuserController::class,'beliproduk']);
    Route::get('/pembelian{id}',[HomeuserController::class,'pembelian'])->name('pembelian');
    Route::controller(ProfilController::class)->prefix('profil')->group(function () {
        Route::get('', 'index')->name('profil');
        Route::get('create', 'create')->name('profil.create');
        Route::post('store', 'store')->name('profil.store');
        Route::get('edit/{id}', 'edit')->name('profil.edit');
        Route::put('edit/{id}', 'update')->name('profil.update');
        Route::get('destroy/{id}', 'destroy')->name('profil.destroy');
        // Route::delete('destroy/{id}', 'destroy')->name('pembayaran.destroy');
    });
});
Route::controller(PembayaranController::class)->prefix('pembayaran')->group(function () {
    Route::get('', 'index')->name('pembayaran');
    Route::get('create', 'create')->name('pembayaran.create');
    Route::post('store', 'store')->name('pembayaran.store');
    Route::get('edit/{id}', 'edit')->name('pembayaran.edit');
    Route::put('edit/{id}', 'update')->name('pembayaran.update');
    Route::get('destroy/{id}', 'destroy')->name('pembayaran.destroy');
});





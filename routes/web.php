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
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminorderController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProdukfilterController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\ProdukdetailController;
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
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/proseslogin',[AuthController::class, 'proseslogin'])->name('proseslogin');
Route::post('/Createregister',[AuthController::class, 'Createregister'])->name('Createregister');
Route::get('logout',[AuthController::class, 'logout']);


// ADMIN
Route::middleware([AdminMiddleware::class])->group(function(){

    Route::get('/AdminDashboard',[AdmindashboardController::class,'index'])->name('dashboard.side');
    Route::get('/adminorder',[AdminorderController::class,'index'])->name('order.side');

    // Route::get('/produk',[ProdukController::class,'index'])->name('produk.side');
    // Route::get('/tambahproduk',[ProdukController::class,'create'])->name('tambah.produk');
    // Route::post('/create',[ProdukController::class,'store'])->name('produk.store');
    // Route::get('/produkedit/{id}',[ProdukController::class,'edit'])->name('produk.edit');
    // Route::put('/produkupdate/{id}',[ProdukController::class,'update'])->name('produk.update');

    Route::controller(ProdukController::class)->prefix('produk')->group(function(){
        Route::get('','index')->name('produk.side');
        Route::get('/tambahproduk','create')->name('tambah.produk');
        Route::post('/create','store')->name('produk.store');
        Route::get('/produkedit/{id}','edit')->name('produk.edit');
        Route::put('/produkupdate/{id}','update')->name('produk.update');
    });

    // Route::get('/kategori',[KategoriController::class,'index'])->name('kategori.side');
    // Route::get('/create',[KategoriController::class,'cretae'])->name('kategori.create');
    // Route::post('/store',[KategoriController::class,'store'])->name('kategori.store');
    // Route::get('/edit',[KategoriController::class,'edit'])->name('kategori.edit');
    // Route::put('/edit{id}',[KategoriController::class,'update'])->name('kategori.update');
    // Route::get('/destroy{id}',[KategoriController::class,'destroy'])->name('kategori.destroy');

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('', 'index')->name('kategori.side');
        Route::get('create', 'create')->name('kategori.create');
        Route::post('store', 'store')->name('kategori.store');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::put('edit/{id}', 'update')->name('kategori.update');
        Route::get('destroy/{id}', 'destroy')->name('kategori.destroy');
    });
});


// USER
Route::middleware([UserMiddleware::class])->group(function(){

        Route::get('/homeuser', [HomeUserController::class, 'homeuser']);
        Route::get('/profil',[ProfilController::class,'index'])->name('profil');
        Route::get('/home', [HomeController::class, 'home']);
        Route::get('/produkfilter', [ProdukfilterController::class, 'produkfilter']);
        Route::get('/wishlist', [WishlistController::class, 'wishlist']);
        Route::get('/tracking', [TrackingController::class, 'tracking']);
        Route::get('/checkout', [CheckoutController::class, 'checkout']);
        Route::get('/produkdetail', [ProdukdetailController::class, 'produkdetail'])->name('produkdetail');
        Route::get('/ulasanproduk', [UlasanprodukController::class, 'ulasanproduk']);
    });
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Route::controller(PelangganController::class)->prefix('pelanggan')->group(function () {
    //     Route::get('', 'index')->name('pelanggan');
    //     Route::get('create', 'create')->name('pelanggan.create');
    //     Route::post('store', 'store')->name('pelanggan.store');
    //     Route::get('edit/{id}', 'edit')->name('pelanggan.edit');

    //     Route::put('edit/{id}', 'update')->name('pelanggan.update');
    //     Route::delete('destroy/{id}', 'destroy')->name('pelanggan.destroy');
    // });
    Route::controller(PembayaranController::class)->prefix('pembayaran')->group(function () {
        Route::get('', 'index')->name('pembayaran');
        Route::get('create', 'create')->name('pembayaran.create');
        Route::post('store', 'store')->name('pembayaran.store');
        Route::get('edit/{id}', 'edit')->name('pembayaran.edit');
        Route::put('edit/{id}', 'update')->name('pembayaran.update');
        Route::get('destroy/{id}', 'destroy')->name('pembayaran.destroy');
        // Route::delete('destroy/{id}', 'destroy')->name('pembayaran.destroy');
    });


    // Route::controller(SupplierController::class)->prefix('supplier')->group(function () {
    //     Route::get('/', 'index')->name('supplier.index');
    //     Route::get('create', 'create')->name('supplier.create');
    //     Route::post('store', 'store')->name('supplier.store');
    //     Route::get('edit/{id}', 'edit')->name('supplier.edit');
    //     Route::put('edit/{id}', 'update')->name('supplier.update');
    //     Route::delete('destroy/{id}', 'destroy')->name('supplier.destroy');
    // });
    // Route::controller(PesananController::class)->prefix('pesanan')->group(function () {
    //     Route::get('/', 'index')->name('pesanan.index');
    //     Route::get('create', 'create')->name('pesanan.create');
    //     Route::post('store', 'store')->name('pesanan.store');
    //     Route::get('edit/{id}', 'edit')->name('pesanan.edit');
    //     Route::put('edit/{id}', 'update')->name('pesanan.update');
    //     Route::delete('destroy/{id}', 'destroy')->name('pesanan.destroy');
    //     Route::get('{id}/detail', 'show')->name('pesanan.detail');
    //     Route::post('{id}/terima', 'terima')->name('pesanan.terima');
    //     Route::post('{id}/tolak', 'tolak')->name('pesanan.tolak');
    // });
    // Route::controller(PengirimanController::class)->prefix('pengiriman')->group(function () {
    //     Route::get('/', 'index')->name('pengiriman.index');
    //     Route::get('create', 'create')->name('pengiriman.create');
    //     Route::post('store', 'store')->name('pengiriman.store');
    //     Route::get('edit/{id}', 'edit')->name('pengiriman.edit');
    //     Route::delete('destroy/{id}', 'destroy')->name('pengiriman.destroy');
    // });
    // Route::controller(HistoryController::class)->prefix('histori')->group(function () {
    //     Route::get('/', 'index')->name('histori.index');
    //     Route::get('create', 'create')->name('histori.create');
    //     Route::post('store', 'store')->name('histori.store');
    //     Route::get('edit/{id}', 'edit')->name('histori.edit');
    //     Route::delete('destroy/{id}', 'destroy')->name('histori.destroy');
    // });


// });

// USER



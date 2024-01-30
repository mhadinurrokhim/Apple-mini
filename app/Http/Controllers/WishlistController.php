<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\Log;

class WishlistController extends Controller
{
    public function index()
    {
    $totalpesanan = Detailpesanan::where('status', 'keranjang')->count();
    $user = auth()->user();
    $wishlist = session('wishlist', []);
    $productsInWishlist = Produk::whereIn('id', $wishlist)->get();

    // Debug: Tampilkan wishlist yang digunakan untuk menampilkan produk
    // dd($wishlist);

    return view('user.wishlist', compact('user', 'totalpesanan', 'productsInWishlist', 'wishlist'));
    }

    public function addToWishlist($productId)
{
    $wishlist = session()->get('wishlist', []);

    if (!in_array($productId, $wishlist)) {
        $wishlist[] = $productId;
        session(['wishlist' => $wishlist]);
    }

    // Debug: Tampilkan wishlist setelah penambahan
    Log::info('Product added to wishlist', ['productId' => $productId]);

    return response()->json(['success' => true]);
}
}

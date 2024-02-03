<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class WishlistController extends Controller
{
    public function index()
    {
    $produk = Produk::all();
    $totalpesanan = Detailpesanan::where('status', 'keranjang')->count();
    $user = auth()->user();
    $wishlist = Wishlist::all();
    // $wishlist = session('wishlist', []);
    // $productsInWishlist = Wishlist::with('product')->get();

    $productsInWishlist = $user->wishlists;
    // dd($productsInWishlist);
    return view('user.wishlist', compact('user', 'totalpesanan', 'productsInWishlist', 'produk', 'wishlist'));
    }

    public function addToWishlist($productId)
    {
    // $wishlist = session()->get('wishlist', []);

    // if (!in_array($productId, $wishlist)) {
    //     $wishlist[] = $productId;
    //     session(['wishlist' => $wishlist]);
    // }

    // Debug: Tampilkan wishlist setelah penambahan
    // Log::info('Product added to wishlist', ['productId' => $productId]);

    $wishlist = Wishlist::where('product_id', $productId)->where('user_id', auth()->user()->id)->first();
    if(!$wishlist) {
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $productId
        ]);
        // dd($wishlist);
        return redirect()->back()->with('success', 'product successfully added to wishlist');
    } else {
        return redirect()->back()->with('error', 'The product is already on the wishlist');
    }

    // return redirect()->back();
}

public function destroy(String $id) {
    // dd($id);
    $Wishlist = Wishlist::find($id);
    // dd($Wishlist);
    $Wishlist->delete();
    return redirect()->back()->with('success', 'product successfully deleted from wishlist');
    }
}

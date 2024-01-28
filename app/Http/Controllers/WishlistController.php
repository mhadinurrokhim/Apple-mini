<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailpesanan;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        return view('user.wishlist', compact('user', 'totalpesanan'));
    }
}

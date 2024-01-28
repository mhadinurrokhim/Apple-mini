<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailpesanan;

class UlasanprodukController extends Controller
{
    public function ulasanproduk()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        return view('user.ulasanproduk', compact('user'));
    }
}

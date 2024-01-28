<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailpesanan;

class TrackingController extends Controller
{
    public function tracking()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        return view('user.tracking',compact('user', 'totalpesanan'));
    }
}

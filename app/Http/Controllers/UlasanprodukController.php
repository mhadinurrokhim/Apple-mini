<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanprodukController extends Controller
{
    public function ulasanproduk()
    {
        $user = auth()->user();
        return view('user.ulasanproduk', compact('user'));
    }
}

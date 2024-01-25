<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $user = auth()->user();
        return view('user.wishlist', compact('user'));
    }
}

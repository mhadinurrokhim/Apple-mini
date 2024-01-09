<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function productDetails() {
        return view('user.product-details');
    }

    public function productList() {
        return view('user.products-filter');
    }
}

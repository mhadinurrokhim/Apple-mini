<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function traking() {
        return view('user.order-tracking');
    }
}

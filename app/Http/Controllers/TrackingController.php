<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function tracking()
    {
        return view('user.tracking');
    }
}

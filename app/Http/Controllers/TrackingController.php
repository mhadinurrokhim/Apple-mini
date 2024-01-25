<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function tracking()
    {
        $user = auth()->user();
        return view('user.tracking',compact('user'));
    }
}

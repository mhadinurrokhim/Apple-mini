<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function navbar(){

        $user = User::all();
        return view('layout_user.navbar', compact('user'));
    }
}

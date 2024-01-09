<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView() {
        return view('auth.sign-in');
    }
    public function registerView() {
        return view('auth.sign-up');
    }
    public function logoutView() {
        return view('auth.sign-out');
    }
    public function forgotPasswordView() {
        return view('auth.forgot-password');
    }
    public function resetPasswordView() {
        return view('auth.reset-password');
    }
}

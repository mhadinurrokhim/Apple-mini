<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function products() {
        return view('admin.products');
    }
    public function orders() {
        return view('admin.orders');
    }
    public function orderDetails() {
        return view('admin.order-details');
    }
    public function customers() {
        return view('admin.customers');
    }
    public function addProduct() {
        return view('admin.add-product');
    }
}

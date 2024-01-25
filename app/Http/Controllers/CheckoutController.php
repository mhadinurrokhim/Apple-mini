<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $id = Auth::user()->id;
        $items = DetailPesanan::where('status', 'checkout')->where('user_id', $id)->get();
        return view('user.checkout', compact('items'));
    }

    public function chekoutKeranjang()
    {
        $id = Auth::user()->id;
       $keranjang = Detailpesanan::where('user_id', $id)->get();
    //    dd($keranjang);
       foreach($keranjang as $k){
        $k->status = 'checkout';
        $k->save();
       }

       return redirect()->back();
    }
}

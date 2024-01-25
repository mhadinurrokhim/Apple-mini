<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Produkfilter;
use Illuminate\Http\Request;

class ProdukfilterController extends Controller
{
    public function produkfilter()
    {
        $produk = Produk::all();
        $user = auth()->user();
        return view('user.produkfilter', compact('produk','user'));
    }
    public function detail(Request $request, $id)
    {
        $produk = produk::where('id', $id)->get();
        $user = auth()->user();
        return view('user.produkdetail' , compact('produk','id','user'));
    }
}

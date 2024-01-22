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
        return view('user.produkfilter', compact('produk'));
    }
    public function detail(Request $request, $id)
    {
        $produk = produk::where('id', $id)->get();
        return view('user.produkdetail' , compact('produk','id'));
    }
}

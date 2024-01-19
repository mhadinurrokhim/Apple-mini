<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ProdukdetailController extends Controller
{
    public function produkdetail(string $id)
    {
        
        return view('user.produkdetail',compact('produk'));
    }
}

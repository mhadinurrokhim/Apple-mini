<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Produkfilter;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\DB;

class ProdukfilterController extends Controller
{
    public function produkfilter(Request $request)
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $kategori = Kategori::all();
        $user = auth()->user();
        $devices = $request->input('device');
        $minPrice = $request->input('min');
        $maxPrice = $request->input('max');
        $rating = $request->input('flexRadio');

        // Lakukan filter data dengan menggunakan nilai-nilai yang diperoleh dari form
        // Misalnya, jika Anda memiliki model 'Product' dan ingin menerapkan filter pada query
        // DB::enableQueryLog();
        $query = Produk::query();

        if (!empty($devices)) {
            $query->whereIn('kategori_id', $devices);
        }else {
            $devices = [0];
        }

        if (!empty($minPrice) && !empty($maxPrice)) {
            $query->whereBetween('harga', [intval($minPrice), intval($maxPrice)]);
        }else {
            $minPrice = null;
            $maxPrice = null;
        }

        // if (!empty($rating)) {
        //     $query->where('rating', '>=', $rating);
        // }

        // Eksekusi query untuk mendapatkan hasil filter
        $produk = $query->get();
        // $test = DB::getQueryLog();
        // DB::disableQueryLog();
        // dd($test);

        // Lakukan tindakan lainnya, seperti menampilkan data pada view atau mengembalikan respons JSON

        return view('user.produkfilter', compact('produk', 'user', 'kategori', 'devices', 'minPrice', 'maxPrice', 'totalpesanan'));
    }
    public function detail(Request $request, $id)
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $produk = produk::where('id', $id)->get();
        $user = auth()->user();
        return view('user.produkdetail' , compact('produk', 'id', 'user', 'totalpesanan'));
    }
}

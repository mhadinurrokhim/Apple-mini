<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\CHeckout;
use App\Models\Kategori;
use App\Models\Userbeli;
use Illuminate\Http\Request;
use App\Http\Middleware\user;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\DB;

class HomeUserController extends Controller
{
    public function homeuser()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        // $produk = DB::table('produk')->leftJoin('ulasan', 'produk.id', '=', 'ulasan.produk_id')
        //     ->select('produk.*', DB::raw('avg(rating) AS rating'), DB::raw('count(produk_id) AS totalulasan'))
        //     ->groupBy('id')
        //     ->get();
        $produk = DB::table('produk')
        ->leftJoin('ulasan', 'produk.id', '=', 'ulasan.produk_id')
        ->select('produk.id', 'produk.nama_produk','produk.path_produk','produk.harga','produk.stok','produk.deskripsi', // sertakan semua kolom non-agregasi di sini
        DB::raw('avg(rating) AS rating'), DB::raw('count(ulasan.produk_id) AS totalulasan'))
        ->groupBy('produk.id', 'produk.nama_produk','produk.path_produk','produk.harga','produk.stok','produk.deskripsi',) // sertakan semua kolom non-agregasi di sini
        ->get();
        $user = auth()->user();
        // dd($produk);
        return view('user.homeuser', compact('produk', 'user', 'totalpesanan'));
    }

    public function detailproduk(Request $request, $id)
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        // $user = produk::findOrFail($id);
        $user = auth()->user();
        $produk = DB::table('produk')->leftJoin('ulasan', 'produk.id', '=', 'ulasan.produk_id')
            ->select('produk.*', DB::raw('avg(rating) AS rating'), DB::raw('count(produk_id) AS totalulasan'))
            ->groupBy('id')
            ->get();
        return view('user.produkdetail', compact('produk', 'user', 'totalpesanan'));
    }

    public function order(Request $request, $produk)
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $kategori = Kategori::all();
        $produk = Produk::findOrFail($produk);
        $request->validate(
            [
                'jumlah' => 'numeric|min:1|max:' . $produk->stok
            ],
            [
                'jumlah.max' => "Jumlah melebihi stok yang tersedia"
            ]
        );

        $detailPesanan = Detailpesanan::where('produk_id', $produk->id)->where('status', 'keranjang')->first();

        if ($detailPesanan) {
            if ($detailPesanan->jumlah > $produk->stok) {
                return redirect()->back()->withErrors('jumlah', "Jumlah melebihi stok yang tersedia");
            } else {
                $detailPesanan->jumlah += $request->jumlah;
                $detailPesanan->total = $produk->harga * $request->jumlah;
                $detailPesanan->save();

                $produk->stok -= $request->jumlah;
                $produk->save();
            }
            // return dd($detailPesanan);
        } else {
            Detailpesanan::create([
                "produk_id" => $produk->id,
                "jumlah" => $request->jumlah,
                "total" => $produk->harga * $request->jumlah,
                "status" => 'keranjang',
                "user_id" => auth()->user()->id
            ]);

            $produk->stok -= $request->jumlah;
            $produk->save();
        }
        return redirect()->route('keranjang', compact('totalpesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function beliproduk(Request $request)
    // {
    //    $produk = Produk::findOrFail($id);
    //     return view('user.checkout',compact('produk'));

    //     try {

    //         $beli = new Checkout();
    //         $beli->user_id = $request->user_id;
    //         $beli->produk_id = $request->produk_id;
    //         $beli->jumlah = $request->jumlah;
    //         $beli->total = $request->total;
    //         $beli->save();

    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }

    // }
    public function pembelian()
    {

        $user = auth()->user();
        $beli = produk::all();
        return view('user.beli', compact('beli', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

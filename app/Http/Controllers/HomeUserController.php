<?php

namespace App\Http\Controllers;

use App\Models\Detailpesanan;
use Illuminate\Http\Request;
use App\Models\Produk;

class HomeUserController extends Controller
{
    public function homeuser()
    {
        $produk = Produk::all();
        $user = auth()->user();
        return view('user.homeuser', compact('produk', 'user'));
    }

    public function detailproduk(Request $request, $id)
    {
        // $user = produk::findOrFail($id);
        $user = auth()->user();
        $produk = produk::where('id', $id)->get();
        return view('user.produkdetail',compact('produk','user'));
    }

    public function order(Request $request, $produk)
    {
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
        // return dd($detailPesanan);

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
        return redirect()->route('keranjang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

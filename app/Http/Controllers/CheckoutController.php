<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $pesanan_id = $id;
        $pesanan = Detailpesanan::where('pesanan_id', $id)->get();
        // foreach($pesanan as $pesan) {
        //     echo $pesan->id;
        // }
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $order = Detailpesanan::where('status', 'checkout')->get()->count();
        $payments = Pembayaran::all();

        // return dd($pesanan);
        return view('user.checkout', compact('pesanan', 'totalpesanan', 'order', 'payments', 'pesanan_id'));
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
        // $pesanan = new Pesanan;
        // $pesanan->user_id = auth()->user()->id;
        // $pesanan->total = $request->total;
        // $pesanan->save();

        // $detailPesanan = $request->pesanan_id;
        // foreach ($detailPesanan as $value) {
        //     Detailpesanan::findOrFail($value)->update(['pesanan_id' => $pesanan->id, 'status' => 'checkout']);
        // }
        $id = Auth::user()->id;
        $keranjang = Detailpesanan::where('user_id', $id)->get();
        //    dd($keranjang);
        foreach ($keranjang as $k) {
            $k->status = 'checkout';
            $k->save();
        }
        return redirect()->route('checkout')->with("cart", "Pesanan berhasil dibuat. Terima kasih atas pembeliannya!");
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
    public function chekouthapus(Request $request, $id)
    {
        $detailPesanan = detailpesanan::findOrFail($id);
        $produk = Produk::find($detailPesanan->produk_id);
        $produk->stok += $detailPesanan->jumlah;
        $produk->save();
        $detailPesanan->delete();
        // return redirect()->back();
        return response()->json(['status' => 'success', 'message' => 'Item berhasil dihapus']);
    }

    public function checkout()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        $items = DetailPesanan::where('status', 'checkout')->where('user_id', $user->id)->get();
        return view('user.checkout', compact('items', 'user', 'totalpesanan'));
    }

    public function chekoutKeranjang()
    {
        $id = Auth::user()->id;
        $keranjang = Detailpesanan::where('user_id', $id)->get();
        foreach ($keranjang as $k) {
            $k->status = 'checkout';
            $k->save();
        }

        return redirect('checkout');
    }
}

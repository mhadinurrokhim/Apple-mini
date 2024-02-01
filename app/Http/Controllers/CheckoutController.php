<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\Userbeli;
use App\Models\userOrder;
use App\Models\notifikasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $pesanan_id = $id;
        $pesanan = Detailpesanan::where('pesanan_id', $id)->get();
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        dd($totalpesanan);
        $order = Detailpesanan::where('status', 'checkout')->get()->count();
        $payments = Pembayaran::all();

        $bank = Pembayaran::where('metode_pembayaran', 'bank')->get();
        $wallet = Pembayaran::where('metode_pembayaran', 'wallet')->get();


        return view('user.checkout', compact('pesanan','bank','wallet', 'totalpesanan', 'order', 'payments', 'pesanan_id'));
    }


    // public function Beli(Request $request)
    // {
    //     dd($request->all());
    //     $request->validate([
    //         'produk_id' => 'required|exists:produk,id',
    //     ]);

    //     $produk = Produk::findOrFail($request->produk_id);

    //     if ($produk->status == 'keranjang') {
    //         return response()->json(['message' => "Something went wrong, Try again later"], 422);
    //     }

    //     if ($produk->status == 'checkout') {
    //         return response()->json(['message' => 'This product is not available for purchase anymore'], 422);
    //     }

    //     $user = Auth::user();
    //     $seller = User::find($produk->user_id);

    //     DB::beginTransaction();

    //     try {
    //         Notifikasi::create([
    //             'sender_id' => $user->id,
    //             'user_id' => $produk->user_id,
    //             'title' => $user->name,
    //             'message' => "Your product " . $produk->nama_produk . " has been purchased by " . $user->name,
    //             'produk_id' => $produk->id,
    //         ]);

    //         // If you want to update the status or any other fields, you can do it here.

    //         DB::commit();

    //         return response()->json(['message' => "This product is yours now"]);
    //     } catch (Exception $e) {
    //         DB::rollBack();

    //         return response()->json(['message' => "Something went wrong, Try again later"], 500);
    //     }


    // }

    public function store(Request $request)
    {
        dd($request->all());
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
        return redirect()->route('checkout')->with("cart", "Order placed successfully. Thank you for the purchase!");
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
        return response()->json(['status' => 'success', 'message' => 'Item deleted successfully']);
    }

    public function checkout()
    {
        // $pesanan_id = $id;
        // $pesanan = Detailpesanan::where('pesanan_id', $id)->get();
        // $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $order = Detailpesanan::where('status', 'checkout')->get()->count();
        $payments = Pembayaran::all();
        $bank = Pembayaran::where('metode_pembayaran', 'bank')->get();
        $wallet = Pembayaran::where('metode_pembayaran', 'e-wallet')->get();
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        $items = DetailPesanan::where('status', 'checkout')->where('user_id', $user->id)->get();

        return view('user.checkout', compact('items', 'user', 'totalpesanan', 'wallet', 'bank'));
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

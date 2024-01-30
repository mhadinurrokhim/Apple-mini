<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        $user = auth()->user();
        $pesanans = Detailpesanan::where('status', 'keranjang')->get();
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $order = Pesanan::where('user_id', auth()->user()->id)->whereNot('status', 'completed')->get()->count();
        return view("user.keranjang", compact('pesanans', 'totalpesanan', 'order', 'user', 'pembayaran',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function keranjangcheckout(Request $request, $id)
    {
        $items = Detailpesanan::where('status', 'checkout')->get();
        $produk = Produk::findOrFail($id);
        $user = auth()->user();
        return view('user.checkout',compact('produk','user', 'items'));
    }

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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesanan = new Pesanan;
        $pesanan->user_id = auth()->user()->id;
        $pesanan->total = $request->total;
        $pesanan->save();

        $detailPesanan = $request->pesanan_id;
        foreach ($detailPesanan as $value) {
            Detailpesanan::findOrFail($value)->update(['pesanan_id' => $pesanan->id, 'status' => 'checkout']);
        }

        return redirect()->route('homeuser')->with("cart", "Pesanan berhasil dibuat. Terima kasih atas pembeliannya!");
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
    public function update(Request $request)
    {
        $quantities = json_decode($request->input('quantities'));

        // dd($quantities);
        try {
            //code...
            foreach ($quantities as $orderId => $quantity) {
                $pesanan = detailpesanan::find($orderId);
                if (intval(substr($quantity, 0, 1))  === 0) {
                    // return dd($quantity);
                    return redirect()->back()->with('update_failed', 'nominal amount is invalid');
                }
                $oldQuantity = $pesanan->jumlah;
                // return dd($quantity);

                if ($quantity - $oldQuantity > $pesanan->produk->stok) {
                    return redirect()->back()->with('update_failed', "Quantity requested exceeds available stock for this product.");
                }
                if ($quantity <= 0) {
                    return redirect()->back()->with('update_failed', "The amount requested must be more than zero.");
                }
                $harga = $pesanan->produk->harga;
                $pesanan->jumlah = $quantity;
                $pesanan->total = $quantity * $harga;
                $pesanan->save();

                // $pesanan->produk->stok -= $quantity - $oldQuantity;
                // $pesanan->save();

                $produk = Produk::find($pesanan->produk_id);
                $produk->stok -= $quantity - $oldQuantity;
                $produk->save();
            }
            return redirect()->route('keranjang')->with('update_success', 'Cart updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('keranjang')->with('update_failed', 'Failed to update cart. Please try again.');
        }
        // $detailPesanan = $request->pesanan_id;
        // foreach ($detailPesanan as $value) {
        //     Detailpesanan::findOrFail($value)->update(["jumlah" == ]);
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailPesanan = detailpesanan::findOrFail($id);
        $produk = Produk::find($detailPesanan->produk_id);
        $produk->stok += $detailPesanan->jumlah;
        $produk->save();
        $detailPesanan->delete();
        return redirect()->back();
    }
}

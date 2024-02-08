<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Exception;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\Userbeli;
use App\Models\userOrder;
use App\Models\notifikasi;
use App\Models\Pembayaran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use App\Models\Metodepengiriman;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index($id)
    // {

    //     $pesanan_id = $id;
    //     $pesanan = Detailpesanan::where('pesanan_id', $id)->get();
    //     $totalpesanan = Detailpesanan::where('status', 'checkout')->get()->count();
    //     $order = Detailpesanan::where('status', 'checkout')->get()->count();
    //     $payments = Pembayaran::all();

    //     $bank = Pembayaran::where('metode_pembayaran', 'bank')->get();
    //     $wallet = Pembayaran::where('metode_pembayaran', 'wallet')->get();

    //     // dd($pesanan);

    //     return view('user.checkout', compact('pesanan','bank','wallet', 'totalpesanan', 'order', 'payments', 'pesanan_id'));
    // }


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
        // $order = Detailpesanan::where('status', 'checkout')->get()->count();
        $user = auth()->user();
        if (is_null($user->address) and is_null($user->telp)) {
            return redirect()->route('profil');
        }else {
            $payments = Pembayaran::all();
            $pengiriman = Metodepengiriman::all();
            $bank = Pembayaran::where('metode_pembayaran', 'bank')->get();
            $wallet = Pembayaran::where('metode_pembayaran', 'e-wallet')->get();
            $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
            $items = DetailPesanan::where('status', 'checkout')->where('user_id', $user->id)->get();
    // dd($items);
            return view('user.checkout', compact('items', 'user', 'totalpesanan', 'wallet', 'bank', 'pengiriman'));
        }
    }

    public function chekoutKeranjang()
    {
        $id = Auth::user()->id;
        $keranjang = Detailpesanan::where('user_id', $id)
        ->where('status', 'keranjang')
        ->get();
        foreach ($keranjang as $k) {
            $k->status = 'checkout';
            $k->save();
        }

        return redirect('checkout');
    }

    public function bayar(Request $request)
    {
        $request->validate([
            'metode_pembayaran' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'metode_pengiriman' => 'required|string',
        ], [
            'metode_pembayaran.required' => 'The payment method field is required.',
            'foto.required' => 'The photo field is required.',
            'foto.image' => 'The photo must be an image.',
            'foto.mimes' => 'The photo must be a file of type: jpeg, png, jpg, gif.',
            'foto.max' => 'The photo may not be greater than 2048 kilobytes.',
            'metode_pengiriman.required' => 'The shipping method field is required.',
        ]);

        $totalcheckout = $request->total;
        $detailpesanan = $request->detail_pesanan;
        $file = $request->file('foto');;
        $metodepembayaran = $request->metode_pembayaran;
        $metodepengiriman = $request->metode_pengiriman;
        // dd($detailpesanan);
        $buktipembayaran = Str::random(10) . '.' .  $file->getClientOriginalExtension();
        $file->storeAs('public/invoice', $buktipembayaran);

        $order = DB::table('detail_pesanan')
        ->select(
            'detail_pesanan.jumlah',
            )
        ->whereIn('detail_pesanan.id', $detailpesanan)->get();
        $jumlah = 0;
        foreach ($order as $value) {
            $jumlah += $value->jumlah;
        }
        // dd($order);
        $checkout = new Checkout;
        $checkout->metode_pembayaran = $metodepembayaran;
        $checkout->metode_pengiriman = $metodepengiriman;
        $checkout->invoice = $buktipembayaran;
        $checkout->total = $totalcheckout;
        $checkout->status = 'pending';
        $checkout->user_id = auth()->user()->id;
        $checkout->jumlah = $jumlah;
        $checkout->save();

        // dd($checkout);
        foreach ($detailpesanan as $value) {
            Detailpesanan::findOrFail($value)->update(['checkout_id' => $checkout->id, 'status' => 'pay']);
        }

        return redirect()->route('profil')->with('success', 'Payment completed, waiting for admin to send the item.');
    }
    public function diterima(Request $request, string $id)
    {
        $status = $request->status;
        $order = DB::table('checkouts')->where('id', $id)->update(['status'=> 'delivered', 'tanggal_menerima'=> Carbon::now()]);
        return redirect()->route('profil')->with("success", "Item received successfully.");
        // echo $id;
    }
}

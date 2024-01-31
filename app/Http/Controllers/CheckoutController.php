<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\Userbeli;
use App\Models\userOrder;
use App\Models\notifikasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
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

    /**
     * Show the form for creating a new resource.
     */
    public function massUpdate(Request $request)
    {
        try {
            $user_id = Auth::id();
            $itemIds = $request->input('ids');

            foreach ($itemIds as $orderId) {
                $validatedData = $request->validate([
                    "jumlah_$orderId" => 'required|integer|min:1',
                    "catatan" => 'nullable|string|max:255',
                    "foto" => 'required|image|max:2048', // Ubah sesuai dengan aturan validasi foto
                    "barangpenjual_id_$orderId" => 'required|exists:barangpenjuals,id',
                    "toko_id_$orderId" => 'required|exists:users,id',
                    "user_id_$orderId" => 'required|exists:users,id',
                    "metodepembayaran" => 'required|in:e-wallet,bank', // Sesuaikan dengan metode pembayaran yang valid
                ], [
                    "jumlah_$orderId.required" => 'Jumlah harus diisi untuk pesanan ini.',
                    "jumlah_$orderId.integer" => 'Jumlah harus berupa angka.',
                    "jumlah_$orderId.min" => 'Jumlah minimal 1.',
                    "catatan.max" => 'Catatan maksimal 255 karakter.',
                    "foto.required" => 'Ukuran foto terlalu besar, maksimal 2MB.',
                    "foto.max" => 'Ukuran foto terlalu besar, maksimal 2MB.',
                    "foto.image" => 'File harus berupa gambar.',
                    "barangpenjual_id_$orderId.required" => 'Barang penjual tidak valid.',
                    "toko_id_$orderId.required" => 'Toko tidak valid.',
                    "user_id_$orderId.required" => 'User tidak valid.',
                    "metodepembayaran.required" => 'Metode pembayaran harus dipilih.',
                    "metodepembayaran.in" => 'Metode pembayaran tidak valid.',
                ]);

                $order = userOrder::find($orderId);

                if ($order) {
                    $order->barangpenjual_id = $validatedData["barangpenjual_id_$orderId"];
                    $order->adminstatus = 'notapprove';
                    $order->pembelianstatus = 'menunggu konfirmasi';
                    $order->jumlah = $validatedData["jumlah_$orderId"];
                    $order->catatan = $validatedData["catatan"];
                    $order->toko_id = $validatedData["toko_id_$orderId"];
                    $order->user_id = $validatedData["user_id_$orderId"];
                    $order->metodepembayaran = $validatedData["metodepembayaran"];

                    if ($request->hasFile('foto')) {
                        $filePath = Storage::disk('public')->put('pembeli/bukti_pembayaran', $request->file('foto'));
                        $order->foto = $filePath;
                    }

                    $order->save();
                }
            }

            // Iterasi melalui item pembelian
            foreach ($itemIds as $orderId) {
                $jumlah = $request->input('jumlah_' . $orderId);

                // Mengurangkan stok di barangpenjual
                $barangPenjual = Produk::find($request->input('produk_id_' . $orderId));
                $barangPenjual->stok -= $jumlah;
                $barangPenjual->save();
            }

            // $adminNotification = new adminnotifikasi();
            // $adminNotification->keterangan_admin = 'Ada pesanan masuk!';
            // $adminNotification->isi_admin = 'Cek halaman pembelian untuk konfirmasi';
            // $adminNotification->save();

            // Kirim notifikasi kepada user
            $userNotification = new notifikasi();
            $userNotification->keterangan = 'Anda berhasil membuat pesanan!';
            $userNotification->isi = 'Lihat pesanan Anda di halaman pesanan';
            $userNotification->user_id_notifikasi = $validatedData["user_id_$orderId"];
            $userNotification->save();

            // Tambahkan respons yang sesuai
            return response()->json(['message' => 'Pembaruan massal berhasil.']);
        } catch (ValidationException $e) {
            // Tangkap kesalahan validasi dan kirim respon JSON dengan pesan kesalahan
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Tangkap kesalahan lainnya dan kirim respon JSON dengan pesan kesalahan
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    public function Beli()
    {

    }

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

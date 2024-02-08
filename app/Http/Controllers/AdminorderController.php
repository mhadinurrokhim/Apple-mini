<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Adminorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAdminorderRequest;
use App\Http\Requests\UpdateAdminorderRequest;
use Carbon\Carbon;

class AdminorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        // $order = Checkout::orderBy('status', 'asc')->get();
        $order = DB::table('checkouts')
        ->leftJoin('detail_pesanan', 'checkouts.id', '=', 'detail_pesanan.checkout_id')
        ->leftJoin('users', 'detail_pesanan.user_id','=','users.id')
        ->leftJoin('produk', 'detail_pesanan.produk_id','=','produk.id')
        ->select(
            'checkouts.id',
            'checkouts.invoice',
            'checkouts.total',
            'checkouts.metode_pembayaran',
            'checkouts.metode_pengiriman',
            'checkouts.status',
            'checkouts.tanggal_pengiriman',
            'checkouts.tanggal_menerima',
            'checkouts.reject_message',
            DB::raw('checkouts.jumlah AS jumlah_order'),
            'detail_pesanan.jumlah',
            DB::raw('detail_pesanan.total AS detail_total'),
            DB::raw('detail_pesanan.id AS detail_id'),
            DB::raw('users.id AS user_id'),
            'users.name',
            'users.email',
            'users.telp',
            'users.address',
            'produk.nama_produk',
            'produk.path_produk',
            'produk.harga',
            )
        ->orderBy('checkouts.status','asc')->get();
// dd($order);
        return view('admin.order' ,compact('user', 'order'));
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
    public function store(StoreAdminorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adminorder $adminorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adminorder $adminorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status = $request->input('status');
        $delivered = ($status == 'pending') ? 'shipped' : 'completed';

        if ($delivered == 'shipped') {
            $order = DB::table('checkouts')->where('id', $id)->update(['status' => $delivered, 'tanggal_pengiriman' => Carbon::now()]);
            return redirect()->route('order.side')->with("success", "Product has been shipped successfully.");
        } else {
            $order = DB::table('checkouts')->where('id', $id)->update(['status' => $delivered]);
            return redirect()->route('order.side')->with("success", "Product has been marked as completed successfully.");
        }
    }
    public function reject(Request $request, string $id)
    {
        $checkout = Checkout::find($id);
        $validated = $request->validate([
            'reject_message' => 'required'
        ]);
        $reject_message = $validated['reject_message'];
        $checkout->update([
            'status' => 'reject',
            'reject_message' => $reject_message
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adminorder $adminorder)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Checkout;

class ProfilController extends Controller
{
    public function index()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        $totalorder = Checkout::where('user_id', $user->id)->get()->count();
        $totalpembayaran = DB::table('checkouts')
        ->select(
            DB::raw('sum(total) AS total'),
        )
        ->where('user_id', $user->id)->get();
        $lastorder = Checkout::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(1)->get();
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
        ->where('detail_pesanan.user_id', $user->id)
        ->orderBy('checkouts.status','asc')
        ->orderBy('checkouts.updated_at','desc')->get();
        // dd($order);
        return view('user.profil',compact('user', 'totalpesanan', 'order', 'lastorder', 'totalpembayaran', 'totalorder'));
    }


    public function create()
    {
        return view('user.profil');
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
    public function show(User $profil)
    {
        return view('user.profil', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profil)
    {
        return view('user.profil', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profil, $id)
    {
        try {
            $request->validate([
                'name' => 'nullable',
                'address' => 'nullable',
                'telp' => 'nullable',
                'profile' => 'nullable|image',
            ], [
                'profile.image' => 'The profile must be an image.',
            ]);

            $user = User::find($id);

            if (!$user) {
                return redirect()->route('user.index')->with('error', 'Error, please try again');
            }

            $userData = [];

            if ($request->filled('name')) {
                $userData['name'] = $request->input('name');
            }

            if ($request->filled('address')) {
                $userData['address'] = $request->input('address');
            }

            if ($request->filled('telp')) {
                $userData['telp'] = $request->input('telp');
            }

            if ($request->file('profile')) {
                $userData['profile'] = $request->file('profile')->store('profil', 'public');

                if ($user->profile) {
                    Storage::disk('public')->delete($user->profile);
                }
            }

            $user->update($userData);

            return redirect()->route('profil')->with('success', 'Successfully updated profile');
        } catch (\Exception $e) {
            return redirect()->route('profil')->with('error', 'Error');
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\DB;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        return view('user.ulasanproduk', compact('user', 'totalpesanan'));
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
        // $request->validate([
        //     'nama_kategori' => 'required|string|max:255', // Tambahkan aturan lain sesuai kebutuhan
        // ], [
        //     'nama_kategori.required' => 'The Category Name column is mandatory.',
        //     // 'nama_kategori.string' => 'Category Name must be text.',
        // ]);

        Ulasan::create($request->all());
        return redirect()->route('ulasanproduk', $request->input('produk_id'))->with("success", "Review data added successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        // $ulasan = Ulasan::where('produk_id', $id)->get();
        $ulasan = DB::table('ulasan')
            ->join('users', 'users.id','=','ulasan.user_id')
            ->select('ulasan.*', 'users.name')
            ->where('produk_id','=', $id)
            ->get();
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        // $alluser = User::whereNot('role', 'admin')->get();
        // dd($ulasan);
        return view('user.ulasanproduk', compact('user', 'totalpesanan', 'ulasan', 'produk'));
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

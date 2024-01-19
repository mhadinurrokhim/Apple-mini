<?php

namespace App\Http\Controllers;

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

<?php

namespace App\Http\Controllers;

use App\Models\Metodepengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $pengiriman = Metodepengiriman::all();
        return view("admin.pengiriman.index", compact("user", "pengiriman"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view("admin.pengiriman.create", compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kurir' => 'required|string|max:255', // Tambahkan aturan lain sesuai kebutuhan
        ], [
            'nama_kurir.required' => 'The Shipping Method column is mandatory.',
            // 'nama_kategori.string' => 'Category Name must be text.',
        ]);

        Metodepengiriman::create($request->all());
        return redirect()->route('pengiriman')->with("success", "Shipping data added successfully!");

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
        $pengiriman = Metodepengiriman::find($id);
        $user = auth()->user();
        return view("admin.pengiriman.edit", compact("pengiriman", "user"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengiriman = Metodepengiriman::find($id);
        $pengiriman->update($request->all());
        return redirect()->route('pengiriman')->with("success", "Shipping data updated successfully.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengiriman = Metodepengiriman::find($id);
        try {
            //code...
            $pengiriman->delete();
            return redirect()->route("pengiriman")->with("success", "Shipping data has been successfully deleted!");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('pengiriman')->with("error", "Failed to delete because shipping data is in use!");
        }
    }
}

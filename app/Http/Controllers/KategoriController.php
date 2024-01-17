<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.kategori.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255', // Tambahkan aturan lain sesuai kebutuhan
        ], [
            'nama_kategori.required' => 'Kolom Nama Kategori wajib diisi.',
            'nama_kategori.string' => 'Nama Kategori harus berupa teks.',
            'nama_kategori.max' => 'Nama Kategori tidak boleh lebih dari :max karakter.',
        ]);

        Kategori::create($request->all());
        return redirect('/kategori')->with("success", "Data kategori berhasil ditambahkan!");
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
        $kategori = Kategori::find($id);
        return view("admin.kategori.edit", compact("kategori"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255', // Tambahkan aturan lain sesuai kebutuhan
        ], [
            'nama_kategori.required' => 'Kolom Nama Kategori wajib diisi.',
            'nama_kategori.string' => 'Nama Kategori harus berupa teks.',
            'nama_kategori.max' => 'Nama Kategori tidak boleh lebih dari :max karakter.',
        ]);

        $pembayaran = Kategori::find($id);
        $pembayaran->update($request->all());
        return redirect()->route('kategori')->with("success", "Data kategori berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = kategori::find($id);
        try {
            //code...
            $kategori->delete();
            return redirect()->route("kategori")->with("success", "Data kategori berhasil dihapus!");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('kategori')->with("error", "Gagal menghapus karena data kategori sedang digunakan!");
        }
    }
}

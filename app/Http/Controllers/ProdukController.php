<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view("admin.produk.index", compact("produk", "kategori"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view("admin.produk.create", compact("produk", "kategori"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        // // $request->validate([
        // //     // 'path_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // //     'nama_produk' => 'required|regex:/^[a-zA-Z ]+$/|max:255', // Hanya karakter alfabet dan spasi yang diperbolehkan
        // //     'harga' => 'required|numeric|min:10000|max:1000000000',
        // //     'stok' => 'required|numeric|min:1',
        // //     // 'deskripsi' => 'required|string',
        // //     'kategori_id' => 'required|exists:kategori,id',
        // //     'supplier_id' => 'required|exists:supplier,id',
        // // ], [
        // //     // 'path_produk.required' => 'Gambar produk wajib diunggah.',
        // //     // 'path_produk.image' => 'Berkas harus berupa gambar.',
        // //     // 'path_produk.mimes' => 'Gambar harus berupa berkas dengan tipe: jpeg, png, jpg, gif.',
        //     // 'path_produk.max' => 'Gambar tidak boleh lebih dari 2 megabita.',

        //     'nama_produk.required' => 'Nama produk wajib diisi.',
        //     'nama_produk.regex' => 'Nama produk hanya boleh mengandung karakter alfabet dan spasi.',
        //     'nama_produk.max' => 'Nama produk tidak boleh lebih dari :max karakter.',

        //     'harga.required' => 'Harga produk wajib diisi.',
        //     'harga.numeric' => 'Harga produk harus berupa angka.',
        //     'harga.min' => 'Harga produk minimal harus :10000.',
        //     'harga.max' => 'Harga produk maksimal: 1000000000.',

        //     'stok.numeric' => 'Stok produk harus berupa angka.',
        //     'stok.required' => 'Stok produk wajib diisi.',
        //     'stok.min' => 'Stok produk minimal harus :min.',

        //     // 'deskripsi.required' => 'Deskripsi wajib diisi.',
        //     // 'deskripsi.string' => 'Deskripsi harus berupa teks.',

        //     'kategori_id.required' => 'Kategori wajib diisi.',
        //     'kategori_id.exists' => 'Kategori yang dipilih tidak valid.',

        //     'supplier_id.required' => 'Pemasok wajib diisi.',
        //     'supplier_id.exists' => 'Pemasok yang dipilih tidak valid.',
        // ]);

        if ($image = $request->file('path_produk')) {
            $path = 'assets/img/photo/';
            $extension = $image->getClientOriginalExtension(); // Mendapatkan ekstensi asli file
            $hashName = hash('md5', time()) . '.' . $extension; // Menghasilkan nama file yang di-hash
            $image->move($path, $hashName);
            // $produk['path_buku'] = $hashName;
        }

        // return dd($request);

        produk::create([
            "path_produk" => $path . $hashName,
            "nama_produk" => $request->nama_produk,
            "deskripsi"=> $request->deskripsi,
            "harga"=> $request->harga,
            "stok"=> $request->stok,
            "kategori_id"=> $request->kategori_id,
        ]);

        return redirect()->route("produk.index")->with("success", "Data produk berhasil ditambahkan.");
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
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        return view("admin.produk.edit", compact("produk","kategori"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'path_produk' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'nama_produk' => 'required|regex:/^[a-zA-Z ]+$/|max:255', // Hanya karakter alfabet dan spasi yang diperbolehkan
        //     'harga' => 'required|numeric|min:10000|max:1000000000',
        //     'stok' => 'required|numeric|min:1',
        //     'deskripsi' => 'required|string',
        //     'kategori_id' => 'required|exists:tb_kategori,id',
        //     'supplier_id' => 'required|exists:tb_supplier,id',
        // ], [
        //     'path_produk.required' => 'Gambar produk wajib diunggah.',
        //     'path_produk.image' => 'Berkas harus berupa gambar.',
        //     'path_produk.mimes' => 'Gambar harus berupa berkas dengan tipe: jpeg, png, jpg, gif.',
        //     'path_produk.max' => 'Gambar tidak boleh lebih dari 2 megabita.',

        //     'nama_produk.required' => 'Nama produk wajib diisi.',
        //     'nama_produk.regex' => 'Nama produk hanya boleh mengandung karakter alfabet dan spasi.',
        //     'nama_produk.max' => 'Nama produk tidak boleh lebih dari :max karakter.',

        //     'harga.required' => 'Harga produk wajib diisi.',
        //     'harga.numeric' => 'Harga produk harus berupa angka.',
        //     'harga.min' => 'Harga produk minimal harus :10000.',
        //     'harga.max' => 'Harga produk maksimal: 1000000000.',

        //     'stok.numeric' => 'Stok produk harus berupa angka.',
        //     'stok.required' => 'Stok produk wajib diisi.',
        //     'stok.min' => 'Stok produk minimal harus :1.',

        //     'deskripsi.required' => 'Deskripsi wajib diisi.',
        //     'deskripsi.string' => 'Deskripsi harus berupa teks.',

        //     'kategori_id.required' => 'Kategori wajib diisi.',
        //     'kategori_id.exists' => 'Kategori yang dipilih tidak valid.',

        //     'supplier_id.required' => 'Pemasok wajib diisi.',
        //     'supplier_id.exists' => 'Pemasok yang dipilih tidak valid.',
        // ]);

        $produk = produk::find($id);

        // Memeriksa apakah data yang akan diubah sama dengan data sebelumnya
        // if (
        //     $request->judul_buku == $produk->judul_buku &&
        //     $request->tahun_terbit == $produk->tahun_terbit &&
        //     $request->isbn == $produk->isbn &&
        //     $request->id_pengarang == $produk->id_pengarang &&
        //     $request->id_kategori == $produk->id_kategori
        // ) {
        //     return redirect()->back()->with("error", "The data you're trying to edit is the same as before.");
        // }

        $produkData = $request->except('path_produk');

        if ($image = $request->file('path_produk')) {
            $path = 'assets/img/photo/';

            // Dapatkan nama file lama dari database
            $oldFileName = $produk->path_produk;

            $extension = $image->getClientOriginalExtension(); // Dapatkan ekstensi asli file
            $hashedFileName = hash('md5', time()) . '.' . $extension; // Buat nama file yang di-hash

            $image->move($path, $hashedFileName);
            $produk->path_produk = $path . $hashedFileName;

            // Hapus file lama jika ada
            if ($oldFileName && file_exists($oldFileName)) {
                unlink($oldFileName);
            }
        }


        $produk->update($produkData);

        return redirect()->route('produk.index')->with("success", "Data produk berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

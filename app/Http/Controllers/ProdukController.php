<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Produk $produk, $id)
    {
        $produk = Produk::FindOrFail($id);
        return view("admin.produk.edit", compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $deskripsi = strip_tags($request->deskripsi);
        // dd($request->all());
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

        $file = $request->file('path_produk');
        $fileName = Str::random(10) . '.' .  $file->getClientOriginalExtension();
        $file->storeAs('public/Product', $fileName);

        produk::create([
            "path_produk" => $fileName,
            "nama_produk" => $request->nama_produk,
            "deskripsi"=> $request->deskripsi,
            "harga"=> $request->harga,
            "stok"=> $request->stok,
            "kategori_id"=> $request->kategori_id,
        ]);

        return redirect('/produk')->with("success", "Data produk berhasil ditambahkan.");
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


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request,[
            'nama_produk' => 'required',
            'path_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required|gt:0',
            'kategori_id' => 'required',
        ],[
            'nama_produk.required' => 'title mohon untuk diisi',
            'path_produk.required' => 'gambar mohon untuk diisi',
            'deskripsi'=> 'test',
            'category.required' => 'pilih',


        ]);

        $produk = produk::find($id);
        $existingimage = $produk->path_produk;
        $deskripsi = strip_tags($request->deskripsi);

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id,
        ]);

        if($request->hasFile('path_produk')){
            $this->validate($request, [
                'path_produk' => 'image|mimes:jpeg,png,jpg,gif',
            ]);

            $file = $request->file('path_produk');
            $fileName = Str::random('10') .'.'. $file->getClientOriginalExtension();
            $file->move(public_path('storage/product'),$fileName);

            $produk->update(['path_produk'=> $fileName]);

            if($existingimage){
                Storage::delete('path_produk/' . $existingimage);
            }
        }

        return redirect('/produk')->with("success", "Data produk berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

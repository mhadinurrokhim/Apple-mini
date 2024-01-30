<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $produk = Produk::all();
        $user = auth()->user();
        $kategori = Kategori::all();
        return view("admin.produk.index", compact("produk", "kategori", "user"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        $user = auth()->user();
        return view("admin.produk.create", compact("produk", "kategori",'user'));
    }

    public function edit(Produk $produk, $id)
    {
        $produk = Produk::FindOrFail($id);
        $kategori = Kategori::all();
        $user = auth()->user();
        return view("admin.produk.edit", compact('produk','kategori','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $deskripsi = strip_tags($request->deskripsi);

    $this->validate($request, [
        'nama_produk' => 'required',
        'path_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:50024', // Adjust the allowed image formats and maximum size as needed
        'deskripsi' => 'required|max:300',
        'harga' => 'required|gt:0',
        'stok' => 'required|gt:0',
        'kategori_id' => 'required',
    ], [
        'nama_produk.required' => 'Please fill in the product title',
        'path_produk.required' => 'Please fill in the image',
        'path_produk.image' => 'The file must be an image',
        'path_produk.mimes' => 'Allowed image formats: jpeg, png, jpg, gif',
        'path_produk.max' => 'Image size should not exceed 2 MB',
        'deskripsi.required' => 'Please fill in the description',
        'deskripsi.max' => 'Descriptions cannot be more than :max characters',
        'harga.required' => 'Please fill in the price',
        'harga.gt' => 'The price entered is invalid',
        'stock.required' => 'Please fill in the stock',
        'stok.gt' => 'The stock entered is invalid',
        'kategori.required' => 'Please fill in the category',
    ]);

    $file = $request->file('path_produk');
    $fileName = Str::random(10) . '.' .  $file->getClientOriginalExtension();
    $file->storeAs('public/Product', $fileName);

    produk::create([
        "path_produk" => $fileName,
        "nama_produk" => $request->nama_produk,
        "deskripsi"=> $deskripsi,
        "harga"=> $request->harga,
        "stok"=> $request->stok,
        "kategori_id"=> $request->kategori_id,
    ]);

    return redirect()->route('produk')->with("success", "Product data added successfully.");
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
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $existingimage = $produk->path_produk;
        $deskripsi = strip_tags($request->deskripsi);

        $validator = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kategori_id' => 'required',
            'path_produk' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
        ]);

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id,
        ]);

        if ($request->hasFile('path_produk')) {
            $file = $request->file('path_produk');
            $fileName = Str::random('10') .'.'. $file->getClientOriginalExtension();
            $file->move(public_path('storage/product'), $fileName);

            $produk->update(['path_produk' => $fileName]);

            if ($existingimage) {
                Storage::delete('path_produk/' . $existingimage);
            }
        }

        return redirect()->route('produk')->with("success", "Product data updated successfully.");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}

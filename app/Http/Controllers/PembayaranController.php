<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Ewallet;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $pembayaran = Pembayaran::all();
        return view("admin.pembayaran.index", compact('pembayaran','user'));
    }

    public function metodepembayaran()
    {
        $pembayaran = Pembayaran::all();
        return view('admin.pembayaran.create'.compact('pembayaran'));
    }

    public function create()
    {
        $user = auth()->user();
        $pembayaran = Pembayaran::all();
        return view("admin.pembayaran.create", compact('pembayaran','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());


        if($request->keterangan_ewallet == null)
        {
            if($request->keterangan_bank == null)
            {
               return redirect('pembayaran');
            }else{
                Pembayaran::create([
                    'metode_pembayaran' => $request->metode_pembayaran,
                    'tujuan' => $request->tujuan_bank,
                    'keterangan' => $request->keterangan_bank,
                ]);
            }
        }else{
            $namefile = $request->file('keterangan_ewallet');
            $path = $namefile->hashName();
            $namefile->storeAs('public/product', $path);
            Pembayaran::create([
                'metode_pembayaran' => $request->metode_pembayaran,
                'tujuan' => $request->tujuan_ewallet,
                'keterangan' => $path,
            ]);

        }

        // $request->validate([
        //     'metode_pembayaran' => 'required',
        //     'tujuan' => 'required',
        //     'keterangan' => [
        //         'required',
        //         function ($attribute, $value, $fail) use ($request) {
        //             if ($request->input('metode_pembayaran') == 'bank') {
        //                 if (!is_numeric($value)) {
        //                     $fail('Keterangan untuk metode pembayaran bank harus berupa angka.');
        //                 }
        //                 $isUnique = Pembayaran::where('metode_pembayaran', 'bank')
        //                     ->where('keterangan', $value)
        //                     ->count();

        //                 if ($isUnique > 0) {
        //                     $fail('Keterangan untuk metode pembayaran bank sudah ada.');
        //                 }
        //             } elseif ($request->input('metode_pembayaran') == 'ewallet') {
        //                 if (
        //                     !$request->file('keterangan')->isValid() ||
        //                     !in_array($request->file('keterangan')->getClientOriginalExtension(), ['jpeg', 'jpg', 'png'])
        //                 ) {
        //                     $fail('Keterangan untuk metode pembayaran e-wallet harus berupa file dengan format jpeg, jpg, atau png.');
        //                 }
        //                 if ($request->file('keterangan')->getSize() > 2048) {
        //                     $fail('Ukuran maksimal Keterangan untuk metode pembayaran e-wallet adalah 2MB.');
        //                 }
        //             }
        //         },
        //     ],
        // ], [
        //     'metode_pembayaran.required' => 'Metode pembayaran wajib dipilih.',
        //     'tujuan.required' => 'Tujuan wajib diisi.',
        //     'keterangan-required' => 'keterangan harus di isi',
        // ]);

        // Pembayaran::create($request->all());
        // return redirect()->route('pembayaran')->with("success","Data pembayaran berhasil ditambahkan.");
        // $request->validate([
        //     'metode_pembayaran' => 'required',
        //     'tujuan' => 'required',
        //     'keterangan' => [
        //         'required',
        //         function ($attribute, $value, $fail) use ($request) {
        //             if ($request->input('metode_pembayaran') == 'bank') {
        //                 if (!is_numeric($value)) {
        //                     $fail('Keterangan untuk metode pembayaran bank harus berupa angka.');
        //                 }
        //                 // Selain validasi angka, tambahkan validasi keunikan untuk metode pembayaran 'bank'
        //                 $isUnique = Pembayaran::where('metode_pembayaran', 'bank')
        //                     ->where('keterangan', $value)
        //                     ->count();

        //                 if ($isUnique > 0) {
        //                     $fail('Keterangan untuk metode pembayaran bank sudah ada.');
        //                 }
        //             } elseif ($request->input('metode_pembayaran') == 'ewallet') {
        //                 if (
        //                     !$request->file('keterangan')->isValid() ||
        //                     !in_array($request->file('keterangan')->getClientOriginalExtension(), ['jpeg', 'jpg', 'png'])
        //                 ) {
        //                     $fail('Keterangan untuk metode pembayaran e-wallet harus berupa file dengan format jpeg, jpg, atau png.');
        //                 }
        //                 if ($request->file('keterangan')->getSize() > 2048) {
        //                     $fail('Ukuran maksimal Keterangan untuk metode pembayaran e-wallet adalah 2MB.');
        //                 }
        //             }
        //         },
        //     ],
        // ], [
        //     'metode_pembayaran.required' => 'Metode pembayaran wajib dipilih.',
        //     'tujuan.required' => 'Tujuan wajib diisi.',
        //     'keterangan-required' => 'keterangan harus di isi',
        // ]);


        // $pembayaran = new Pembayaran();
        // $pembayaran->metode_pembayaran = $request->metode_pembayaran;
        // $pembayaran->tujuan = $request->tujuan;
        // $pembayaran->keterangan = $request->input('keterangan');

        // if ($request->file('keterangan')) {
        //     $image = $request->file('keterangan');
        //     $filename = $image->hashName();
        //     $image->storeAs('public/product', $filename);
        //     $pembayaran->keterangan = $filename;
        // }
        // $pembayaran->save();
        return redirect('pembayaran')->with('success', 'Berhasil menambah kategori');
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
        $pembayaran = Pembayaran::find($id);
        $user = auth()->user();
        return view("admin.pembayaran.edit", compact('pembayaran','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'metode_pembayaran' => 'required|string|max:255',
        ], [
            'metode_pembayaran.required' => 'The Payment Method column is mandatory.',
            'metode_pembayaran.string' => 'Payment Method must be text.',
            'metode_pembayaran.max' => 'Payment Method must have no more than :max characters.',
        ]);

        $pembayaran = Pembayaran::find($id);
        $pembayaran->update($request->all());
        return redirect()->route('pembayaran')->with("success", "Payment data updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        try {
            //code...
            $pembayaran->delete();
            return redirect()->route("pembayaran")->with("success", "Category data has been successfully deleted!");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('pembayaran')->with("error", "Failed to delete because category data is in use!");
        }
    }
}

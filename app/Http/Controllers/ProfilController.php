<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Detailpesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
        $user = auth()->user();
        return view('user.profil',compact('user', 'totalpesanan'));
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
        // dd($request);
        try {
            $request->validate([
                'name' => 'nullable',
                'address' => 'nullable',
                'telp' => 'nullable',
                'profile' => 'nullable|image',
            ], [
                'profile.image' => 'Profil harus gambar',
            ]);

            // Perbarui data menggunakan metode update
            $user = User::find($id);

        if (!$user) {
            // Handle jika pengguna tidak ditemukan
            return redirect()->route('user.index')->with('error', 'Kesalahan, silahkan coba lagi');
        }

        // Perbarui data pengguna berdasarkan input yang ada
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

            // Hapus foto lama setelah perbarui data
            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }
        }

        // Update data pengguna
        $user->update($userData);
            return redirect()->route('profil')->with('success', 'Successfully updated profile');
        } catch (\Exception $e) {
            return redirect()->route('profil')->with('error', 'Kesalahan');




            // Simpan path profil lama
            $oldProfilPath = $user->profil;

            // Perbarui data pengguna
            $user->profil = $request->file('profile')->store('profil', 'public');
            $user->save();

            // Hapus foto lama setelah perbarui data
            if ($oldProfilPath) {
                Storage::disk('public')->delete($oldProfilPath);
            }

            return redirect()->route('profil')->with('success', 'Profile updated successfully');
        }}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

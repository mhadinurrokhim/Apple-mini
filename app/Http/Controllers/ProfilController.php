<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user.profil',compact('user'));
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
        $profil = User::find($id);
        $profil->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
            'address' => $request->input('address')
        ]);

        return back()->with('success', 'Data berhasil di perbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

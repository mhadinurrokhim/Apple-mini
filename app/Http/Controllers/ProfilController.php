<?php

namespace App\Http\Controllers;

use App\Http\Middleware\user;
use App\Models\Profil;
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
    public function show(Profil $profil)
    {
        return view('user.profil', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        return view('user.profil', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profil $profil, $id)
    {
        $profil = profil::find($id);
        $profil->update([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
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

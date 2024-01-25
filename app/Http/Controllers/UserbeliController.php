<?php

namespace App\Http\Controllers;

use App\Models\Userbeli;
use App\Http\Requests\StoreUserbeliRequest;
use App\Http\Requests\UpdateUserbeliRequest;

class UserbeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserbeliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Userbeli $userbeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Userbeli $userbeli)
    {
        $user = auth()->user();
        return view('',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserbeliRequest $request, Userbeli $userbeli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Userbeli $userbeli)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Adminorder;
use App\Http\Requests\StoreAdminorderRequest;
use App\Http\Requests\UpdateAdminorderRequest;

class AdminorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view('admin.order' ,compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adminorder $adminorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adminorder $adminorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminorderRequest $request, Adminorder $adminorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adminorder $adminorder)
    {
        //
    }
}

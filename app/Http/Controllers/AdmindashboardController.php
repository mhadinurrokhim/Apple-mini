<?php

namespace App\Http\Controllers;

use App\Models\admindashboard;
use App\Http\Requests\StoreadmindashboardRequest;
use App\Http\Requests\UpdateadmindashboardRequest;

class AdmindashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
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
    public function store(StoreadmindashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admindashboard $admindashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admindashboard $admindashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateadmindashboardRequest $request, admindashboard $admindashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admindashboard $admindashboard)
    {
        //
    }
}

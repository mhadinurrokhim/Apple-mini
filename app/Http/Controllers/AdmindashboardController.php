<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Produk;
use App\Models\admindashboard;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreadmindashboardRequest;
use App\Http\Requests\UpdateadmindashboardRequest;

class AdmindashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $totalUser = User::where('role', 'user')->count();
        $totalProduct = Produk::count();
        $produk = Produk::where('stok', '<=', 0)->get();
        $user = auth()->user();
        return view('admin.dashboard', compact('totalUser', 'totalProduct', 'user', 'produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getTaxData()
    {
        $currentYear = date('Y');
        $months = range(1, 12);

        $taxData = collect($months)->map(function ($month) use ($currentYear) {
            $date = Carbon::create($currentYear, $month, 1);

            return [
                'month' => $date->format('F Y'),
                'total_tax' => $this->getTotalTaxForMonth($month, $currentYear)
            ];
        });

        $allMonths = collect($months)->map(function ($month) use ($currentYear) {
            $monthKey = Carbon::create($currentYear, $month, 1)->format('F Y');
            return [
                'month' => $monthKey,
                'total_tax' => 0,
            ];
        });

        $mergedData = $allMonths->map(function ($monthRecord) use ($taxData) {
            $taxDataValue = $taxData->where('month', $monthRecord['month'])->first()['total_tax'] ?? null;

            return array_merge($monthRecord, ['total_tax' => $taxDataValue ?? 0]);
        });

        return response()->json($mergedData);
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

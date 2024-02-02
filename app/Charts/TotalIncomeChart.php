<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Detailpesanan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalIncomeChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $user = auth()->user();
        $tahun = date('Y');
        $bulan = 12;
        $databulan = [];
        $datatotalproduk = [];

        for ($i = 1; $i <= $bulan; $i++) {
            $totalProduk = Produk::whereYear('created_at', $tahun)->whereMonth('created_at', $i)->count();
            $datatotalproduk[] = $totalProduk;
            $databulan[] = Carbon::create()->month($i)->format('F');
        }

        return $this->chart->lineChart()
            ->setTitle('Total Produk Overview')
            ->setSubtitle('Comparison between different products created each month.')
            ->addData('Product Total', $datatotalproduk)
            ->setHeight(500)
            ->setWidth(950)
            ->setXAxis($databulan);
    }
}

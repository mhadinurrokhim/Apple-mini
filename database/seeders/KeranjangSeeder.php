<?php

namespace Database\Seeders;

use App\Models\Detailpesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detailpesanan::create([
            'user_id' => '2',
            'checkout_id' => '1',
            'produk_id' => '1',
            'jumlah' => '5',
            'total' => 23000000*5,
            'status' => 'pay',
        ]);
        Detailpesanan::create([
            'user_id' => '2',
            'checkout_id' => '1',
            'produk_id' => '3',
            'jumlah' => '5',
            'total' => 21999000*5,
            'status' => 'pay',
        ]);
        Detailpesanan::create([
            'user_id' => '3',
            'checkout_id' => '2',
            'produk_id' => '5',
            'jumlah' => '5',
            'total' => 15999000*5,
            'status' => 'pay',
        ]);
        Detailpesanan::create([
            'user_id' => '2',
            'checkout_id' => '3',
            'produk_id' => '6',
            'jumlah' => '5',
            'total' => 44499000*5,
            'status' => 'pay',
        ]);
    }
}

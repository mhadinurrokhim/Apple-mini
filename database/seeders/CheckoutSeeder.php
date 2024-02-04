<?php

namespace Database\Seeders;

use App\Models\Checkout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checkout::create([
            'user_id' => '2',
            'invoice' => 'qMJY0aoIJH.jpg',
            'total' => 21999000*5+23000000*5,
            'metode_pembayaran' => 'e-wallet',
            'status' => 'completed',
        ]);
        Checkout::create([
            'user_id' => '3',
            'invoice' => 'qMJY0aoIJH.jpg',
            'total' => 15999000*5,
            'metode_pembayaran' => 'e-wallet',
            'status' => 'shipped',
        ]);
        Checkout::create([
            'user_id' => '2',
            'invoice' => 'qMJY0aoIJH.jpg',
            'total' => 44499000*5,
            'metode_pembayaran' => 'e-wallet',
            'status' => 'pending',
        ]);
    }
}

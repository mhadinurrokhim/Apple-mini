<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'MacBook ',
            'path_produk' => 'M2_Macbook_Air_Starlight_model.jpg',
            'harga' => '123456',
            'kategory_id' => 1,
            'deskripsi' => 'sjadaajdskdhajdbahdjadhkasdhakdhakjdhashajkdhajk',
            'stok' => '10000 ',
        ]);
    }
}

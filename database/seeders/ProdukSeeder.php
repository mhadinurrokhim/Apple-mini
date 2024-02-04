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
            'nama_produk' => 'iPhone 15 Pro Max',
            'path_produk' => 'wX7yAdjrJEVNfuRh8nPm0HfZbbY2UVqgmavGb9UP.jpg',
            'harga' => '23000000',
            'kategori_id' => '1',
            'deskripsi' => 'iPhone 15 Pro Max. Lahir dari titanium dan dilengkapi chip A17 Pro terobosan, tombol Tindakan yang dapat disesuaikan, dan sistem kamera iPhone paling andal yang pernah ada.',
            'stok' => '199',
        ]);

        Produk::create([
            'nama_produk' => 'iPad Pro (Generasi ke-6)',
            'path_produk' => 'lCfELOQ1oQ.jpg',
            'harga' => '14799000',
            'kategori_id' => '2',
            'deskripsi' => 'iPad Pro. Dengan performa yang menakjubkan, konektivitas nirkabel super cepat, dan pengalaman Apple Pencil generasi berikutnya. Ditambah, fitur produktivitas dan kolaborasi baru yang andal di iPadOS 16. iPad Pro adalah pengalaman iPad terbaik.',
            'stok' => '199',
        ]);

        Produk::create([
            'nama_produk' => 'MacBook Air M2 (2023)',
            'path_produk' => 'c81nFMa53Z.jpg',
            'harga' => '21999000',
            'kategori_id' => '3',
            'deskripsi' => 'MacBook Air 15 inci luar biasa tipis dan dilengkapi layar Liquid Retina yang memukau. Bertenaga super berkat chip M2 — dan dengan kekuatan baterai hingga 18 jam (1) — MacBook Air ini menghadirkan performa luar biasa dalam desain yang ultra portabel.',
            'stok' => '199',
        ]);

        Produk::create([
            'nama_produk' => 'AirPods Pro (generasi ke-2)',
            'path_produk' => 'DSUWDshZMs.jpg',
            'harga' => '3499000',
            'kategori_id' => '4',
            'deskripsi' => 'AirPods Pro dilengkapi Peredam Kebisingan Aktif 2x lebih baik,1 plus Transparansi Adaptif, dan Audio Spasial Personal dengan pelacakan gerakan kepala dinamis untuk suara yang menghanyutkan.2 Kini dengan berbagai ukuran ear tip (XS, S, M, L) serta waktu dengar hingga 6 jam.',
            'stok' => '199',
        ]);

        Produk::create([
            'nama_produk' => 'Apple Watch Ultra 2 with Ocean Band',
            'path_produk' => 'NUf5AiQuEd.jpg',
            'harga' => '15999000',
            'kategori_id' => '5',
            'deskripsi' => 'Apple Watch paling tangguh dan andal. Dirancang untuk petualangan outdoor dan olahraga berat dengan casing titanium ringan, kekuatan baterai lebih lama,(1) dan layar paling terang yang pernah ada. Dengan gerakan ketuk dua kali,(2) sebuah cara istimewa untuk berinteraksi dengan Apple Watch.',
            'stok' => '199',
        ]);

        Produk::create([
            'nama_produk' => 'MacBook Pro M3 Pro / M3 Max 16 Inci (2024)',
            'path_produk' => 'vbt4eZY15a.jpg',
            'harga' => '44499000',
            'kategori_id' => '3',
            'deskripsi' => 'MacBook Pro 16 inci melesat berkat M3 Pro dan M3 Max, chip yang sepenuhnya canggih serta menghadirkan kemampuan dan performa masif untuk alur kerja paling ekstrem. Dengan kekuatan baterai terbaik di kelasnya — hingga 22 jam — dan layar Liquid Retina XDR menawan, ini adalah laptop profesional yang tak ada tandingannya. Kini dalam warna baru: Hitam Kosmik.',
            'stok' => '199',
        ]);
    }
}

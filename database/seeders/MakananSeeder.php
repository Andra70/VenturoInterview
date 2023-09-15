<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Makanan
        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Soto",
            "total_penjualan" => 7000,
            'kategori' => 'makanan',
            'created_at' => now(),

        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Nasi Goreng",
            "total_penjualan" => 12000,
            'kategori' => 'makanan',
            'created_at' => now(),

        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Lentog",
            "total_penjualan" => 6000,
            'kategori' => 'makanan',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Lontong",
            "total_penjualan" => 2000,
            'kategori' => 'makanan',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Mie Goreng",
            "total_penjualan" => 10000,
            'kategori' => 'makanan',
            'created_at' => now(),
        ]);


        //MINUMAN
        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Es Teh",
            "total_penjualan" => 2000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Es Jeruk",
            "total_penjualan" => 3000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Aqua",
            "total_penjualan" => 3000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Nutrisari",
            "total_penjualan" => 2000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "tanggal" => "2023-09-14",
            "menu" => "Susu",
            "total_penjualan" => 3000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);
}
}
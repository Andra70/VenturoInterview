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
            "menu" => "Soto",
            "total_penjualan" => 7000,
            'kategori' => 'makanan',
            'created_at' => now(),

        ]);

        Penjualan::create([
            "menu" => "Nasi Goreng",
            "total_penjualan" => 12000,
            'kategori' => 'makanan',
            'created_at' => now(),

        ]);

        Penjualan::create([
            "menu" => "Lentog",
            "total_penjualan" => 6000,
            'kategori' => 'makanan',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "menu" => "Lontong",
            "total_penjualan" => 2000,
            'kategori' => 'makanan',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "menu" => "Mie Goreng",
            "total_penjualan" => 10000,
            'kategori' => 'makanan',
            'created_at' => now(),
        ]);


        //MINUMAN
        Penjualan::create([
            "menu" => "Es Teh",
                "total_penjualan" => 2000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "menu" => "Es Jeruk",
                "total_penjualan" => 3000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "menu" => "Aqua",
            "total_penjualan" => 3000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "menu" => "Nutrisari",
            "total_penjualan" => 2000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);

        Penjualan::create([
            "menu" => "Susu",
            "total_penjualan" => 3000,
            'kategori' => 'minuman',
            'created_at' => now(),
        ]);
}
}
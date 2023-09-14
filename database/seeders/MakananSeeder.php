<?php

namespace Database\Seeders;

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
        $data = [
            [
                "menu" => "Soto",
                "total_penjualan" => "7000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Nasi Goreng",
                "total_penjualan" => "12000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Lentog",
                "total_penjualan" => "6000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Lontong",
                "total_penjualan" => "2000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Mie Goreng",
                "total_penjualan" => "10000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        DB::table('penjualan')->insert($data);
    
    }
}

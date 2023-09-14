<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "menu" => "Es Teh",
                "total_penjualan" => "2000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Es Jeruk",
                "total_penjualan" => "3000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Aqua",
                "total_penjualan" => "3000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Nutrisari",
                "total_penjualan" => "2000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "menu" => "Susu",
                "total_penjualan" => "5000",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        DB::table('minuman')->insert($data);
    }
    }


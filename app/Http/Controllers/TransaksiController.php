<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $transaksi = Penjualan::all();
    }

    public function jsonTransaksi(Request $request)
    {
        $transaksi = Penjualan::get(['tanggal', 'menu', 'total_penjualan']); // Ambil hanya atribut-atribut yang Anda inginkan

        // Filter item dengan nilai null
        $filteredData = [];
        foreach ($transaksi as $item) {
            if ($item['tanggal'] !== null && $item['menu'] !== null && $item['total'] !== null) {
                $filteredData[] = $item;
            }
        }

        $jsonData = json_encode($filteredData);
        return $jsonData;
    }

}

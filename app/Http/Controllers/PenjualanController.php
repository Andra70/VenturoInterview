<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use Carbon\Carbon;

class PenjualanController extends Controller
{
    // Mendapatkan semua data penjualan
    public function index(Request $request)
    {
        $penjualan = Penjualan::all();
        $total = Penjualan::sum('total_penjualan');
        // return response()->json($penjualan, 200);

        $date = $request->tahun;

            switch ($date) {
                case '2022':
                    $penjualan = Penjualan::whereYear('created_at', 2022)->get();
                    break;
                case '2023':
                    $penjualan = Penjualan::whereYear('created_at', 2023)->get();
                    break;
                
}



        $data = [
            'makanan' => Penjualan::where('kategori', 'makanan')->get(),
            'minuman' => Penjualan::where('kategori', 'minuman')->get(),
            'total' => Penjualan::sum('total_penjualan'),
        ];       
        return view('laporan2023', $data, compact('penjualan', 'total'));
        
    }

    // Menyimpan data penjualan baru
    public function store(Request $request)
    {
        $request->validate([
            'menu' => 'required|string',
            'total_penjualan' => 'required|integer',
        ]);

        $penjualan = Penjualan::create($request->all(
            'menu',
            'total_penjualan'
        ));

        return response()->json($penjualan, 201);
    }

    // Mendapatkan data penjualan berdasarkan ID
    public function show($id)
    {
        $penjualan = Penjualan::find($id);

        if (!$penjualan) {
            return response()->json(['message' => 'Data penjualan tidak ditemukan'], 404);
        }

        return response()->json($penjualan, 200);
    }


    public function jsonMenu(Request $request)
    {
        $penjualan = Penjualan::get(['menu', 'kategori']); // Ambil hanya atribut-atribut yang Anda inginkan
        $jsonData = json_encode($penjualan);
        return $jsonData;
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

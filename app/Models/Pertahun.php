<?php

namespace App\Models;

use App\Models\Minuman;
use App\Models\Penjualan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pertahun extends Model
{
    use HasFactory;

    protected $table = 'pertahun'; // Sesuaikan dengan nama tabel yang sesuai jika perlu

    protected $fillable = [
        'tahun',
        'years',
    ];

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
    public function minuman()
    {
        return $this->hasMany(Minuman::class);
    }
    // Definisikan relasi jika diperlukan
}

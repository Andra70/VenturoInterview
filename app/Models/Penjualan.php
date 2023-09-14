<?php

namespace App\Models;

use App\Models\Pertahun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $fillable = [
        'menu',
        'total_penjualan',
        'total_penjualans'
    ];

    public function pertahun()
    {
        return $this->belongsTo(Pertahun::class);
    }
}

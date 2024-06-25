<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenyewaan extends Model
{
    use HasFactory;

    protected $table = 'detail_penyewaan';

    protected $fillable = [
        'penyewaan_id',
        'alat_id',
        'jumlah',
        'harga_sewa',
    ];
}


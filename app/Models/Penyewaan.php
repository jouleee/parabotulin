<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = 'penyewaan';

    protected $fillable = [
        'pelanggan_id',
        'alat_id',
        'total_harga',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function alat()
    {
        return $this->belongsTo(Alat::class, 'alat_id');
    }
}

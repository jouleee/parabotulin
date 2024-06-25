<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'nominal',
        'status'
    ];

    public function booking()
    {
        return $this->belongsTo(Penyewaan::class);
    }

    public function getStatusAttribute($value)
    {
        return $value == 'lunas' ? 'Lunas' : 'Belum Lunas';
    }
}

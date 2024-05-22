<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'kota_asal',
        'kota_tujuan',
        'alamat_penjemputan',
        'alamat_tujuan',
        'tanggal_pergi',
        'jumlah_kursi',
        'harga',
    ];
}

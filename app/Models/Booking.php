<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'notelp',
        'tanggal',
        'durasi',
        'tipe_kamar',
        'smoking_room',
        'breakfast',
        'harga_paket',
        'jumlah_tagihan',
    ];
}

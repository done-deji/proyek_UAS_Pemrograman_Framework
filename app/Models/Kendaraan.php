<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = [
        'pelanggan_id',
        'merk',
        'tipe',
        'plat_nomor',
        'tahun',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
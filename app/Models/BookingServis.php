<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingServis extends Model
{
    protected $table = 'booking_servis';

    protected $fillable = [
        'pelanggan_id',
        'kendaraan_id',
        'tanggal_booking',
        'keluhan',
        'status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
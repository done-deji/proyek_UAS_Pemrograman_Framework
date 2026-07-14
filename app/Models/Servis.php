<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    protected $table = 'servis';

    protected $fillable = [
        'booking_servis_id',
        'mekanik_id',
        'tanggal_servis',
        'biaya_jasa',
    ];

    public function bookingServis()
    {
        return $this->belongsTo(BookingServis::class);
    }

    public function mekanik()
    {
        return $this->belongsTo(Mekanik::class);
    }

    public function detailServis()
    {
        return $this->hasMany(DetailServis::class);
    }

    public function detailSparepart()
    {
        return $this->hasMany(DetailSparepart::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
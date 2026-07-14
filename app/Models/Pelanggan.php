<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
    ];

    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class);
    }

    public function bookingServis()
    {
        return $this->hasMany(BookingServis::class);
    }
}
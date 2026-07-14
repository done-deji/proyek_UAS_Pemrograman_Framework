<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'servis_id',
        'total_bayar',
        'tanggal_bayar',
        'metode',
    ];

    public function servis()
    {
        return $this->belongsTo(Servis::class);
    }
}
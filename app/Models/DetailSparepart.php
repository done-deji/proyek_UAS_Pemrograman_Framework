<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailSparepart extends Model
{
    protected $table = 'detail_spareparts';

    protected $fillable = [
        'servis_id',
        'sparepart_id',
        'jumlah',
        'subtotal',
    ];

    public function servis()
    {
        return $this->belongsTo(Servis::class);
    }

    public function sparepart()
    {
        return $this->belongsTo(Sparepart::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailServis extends Model
{
    protected $table = 'detail_servis';

    protected $fillable = [
        'servis_id',
        'nama_pekerjaan',
        'keterangan',
        'biaya',
    ];

    public function servis()
    {
        return $this->belongsTo(Servis::class);
    }
}
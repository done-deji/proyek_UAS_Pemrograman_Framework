<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
   protected $fillable = [
    'kode',
    'nama',
    'stok',
    'harga',
];

    public function detailSpareparts()
    {
        return $this->hasMany(DetailSparepart::class);
    }
}
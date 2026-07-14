<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'keahlian',
    ];

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
}
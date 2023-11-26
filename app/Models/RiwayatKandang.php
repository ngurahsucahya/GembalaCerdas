<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKandang extends Model
{
    use HasFactory;

    public function kandang()
    {
        return $this->belongsTo(Kandang::class, 'id_kandang');
    }
}

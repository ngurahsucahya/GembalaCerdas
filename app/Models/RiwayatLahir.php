<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatLahir extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kawin',
        'id_anak',
        'tanggal_lahir',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_lahir');
    }

    public function riwayatKawin()
    {
        return $this->belongsTo(RiwayatKawin::class, 'id_lahir');
    }
}

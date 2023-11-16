<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKawin extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_induk',
        'id_pejantan',
    ];

    public function induk()
    {
        return $this->belongsTo(Induk::class, 'id_induk');
    }

    public function pejantan()
    {
        return $this->belongsTo(Pejantan::class, 'id_pejantan');
    }

    public function riwayatLahir()
    {
        return $this->hasMany(RiwayatLahir::class, 'id_lahir');
    }
}

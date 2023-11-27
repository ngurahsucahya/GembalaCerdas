<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\MorphOne;

class Induk extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    public function ternak(): MorphOne
    {
        return $this->morphOne(Ternak::class, 'statusable');
    }

    public function riwayatKawin(): HasOne
    {
        return $this->hasOne(RiwayatKawin::class, 'id_induk');
    }
}

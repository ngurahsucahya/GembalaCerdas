<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Pejantan extends Model
{
    use HasFactory;

    public function ternak(): MorphOne
    {
        return $this->morphOne(Ternak::class, 'statusable');
    }

    public function riwayatKawin(): HasOne
    {
        return $this->hasOne(RiwayatKawin::class, 'id_pejantan');
    }
}

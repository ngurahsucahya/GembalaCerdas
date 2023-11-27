<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKandang extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'riwayat_kandangs';

    protected $fillable = [
        'id_ternak',
        'id_kandang',
        'tanggal_pengelompokan',
    ];

    public function kandang()
    {
        return $this->belongsTo(Kandang::class, 'id_kandang');
    }

    public function ternak()
    {
        return $this->belongsTo(Ternak::class, 'id_ternak');
    }
}

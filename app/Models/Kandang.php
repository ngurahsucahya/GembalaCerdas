<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandang extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kandangs';

    protected $fillable = [
        'nama_kandang',
        'kapasitas',
        'deskripsi_kandang'
    ];

    public function riwayatKandang()
    {
        return $this->hasMany(RiwayatKandang::class, 'id_kandang');
    }
}

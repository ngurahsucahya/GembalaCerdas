<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKesehatan extends Model
{
    use HasFactory;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_ternak',
        'id_pemeriksa',
        'tanggal_pemeriksaan',
        'deskripsi'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function idternak()
    {
        return $this->belongsTo(Ternak::class, 'id');
    }

    public function idpemeriksa()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

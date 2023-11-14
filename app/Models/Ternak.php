<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ternak extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'data_ternak';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rfid_ternak',
        'jenis_hewan',
        'ras_kambing',
        'jenis_kelamin',
        'tanggal_lahir',
        'bobot_badan',
        'bobot_lahir',
        'bobot_sapih',
        'status',
        'kehidupan',
        'asal',
        'deskripsi_asal',
        'deskripsi_fenotip',
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
}
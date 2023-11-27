<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ternak extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ternaks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rfid',
        'nama_ternak',
        'ras',
        'jenis_kelamin',
        'tanggal_lahir',
        'bobot_badan',
        'deskripsi_fenotip',
        'status_sekarang',
        'statusable_id',
        'statusable_type',
        'id_anak'
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

    public function statusable(): MorphTo
    {
        return $this->morphTo();
    }

    public function anak(): HasOne
    {
        return $this->hasOne(Anak::class, 'id_anak');
    }

    public function riwayatKandang()
    {
        return $this->hasMany(RiwayatKandang::class, 'id_ternak');
    }

    public function updateStatus()
    {
        if (is_null($this->statusable_type) && !is_null($this->id_anak)){
            return $this->update([
                'status_sekarang' => 'Anak',
            ]);
        } else {
            return $this->update([
                'status_sekarang' => $this->jenis_kelamin === 'Jantan' ? 'Pejantan' : 'Induk'
            ]);
        }
    }
}
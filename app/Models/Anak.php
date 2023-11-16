<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Anak extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'anaks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bobot_lahir',
        'id_lahir'
    ];

    public function riwayatLahir(): HasOne
    {
        return $this->hasOne(RiwayatLahir::class, 'id_lahir');
    }

    public function ternak()
    {
        return $this->BelongsTo(Ternak::class, 'id_anak');
    }
}
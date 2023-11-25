<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'nisn';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
    public function pembayaran():HasMany
    {
        return $this->hasMany(Pembayaran::class,'nisn','nisn');
    }
    public function kelas():BelongsTo
    {
        return $this->belongsTo(Kelas::class,'id_kelas','id_kelas');
    }
    public function pem_bayaran(): BelongsTo
    {
        return $this->belongsTo(Pembayaran::class, 'id_spp');
    }

    public function spp():BelongsTo
    {
        return $this->belongsTo(Spp::class,'id_spp','id_spp');
    }
}

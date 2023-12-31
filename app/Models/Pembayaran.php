<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = false;
    protected $guarded = [];
    
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nisn');
    }
}

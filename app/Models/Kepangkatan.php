<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepangkatan extends Model
{
    use HasFactory;

    protected $table = 'kepangkatans';
    protected $fillable = [
        'nama_kepangkatan',
        'jabatan'
    ];

    public function jabatann()
    {
        return $this->belongsTo(Kinerja::class, 'jabatan', 'id');
    }
}

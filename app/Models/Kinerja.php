<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    use HasFactory;

    protected $table = 'kinerjas';
    protected $fillable = [
        'bulan',
        'tahun',
        'jabatan',
        'bobot_nilai',
        'keterangan',
    ];

    public function kinerjaa()
    {
        return $this->belongsTo(Kepangkatan::class, 'jabatan', 'id');
    }
}

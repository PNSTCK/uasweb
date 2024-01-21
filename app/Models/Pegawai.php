<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawaies';
    protected $fillable = [
        'image',
        'nip',
        'nama',
        'jk',
        'alamat',
        'kota',
        'nama_pangkat',
    ];

    public function pekerja()
    {
        return $this->belongsTo(Kepangkatan::class, 'nama_pangkat', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalaman_kerja extends Model
{
    protected $table = 'pengalaman_kerja';
    protected $fillable = [
        'nama',
        'jabatan',
        'tahun_masuk',
        'tahun_keluar',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_siswa extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'kelas',
        'email',
        'password',
        'kelas',
        'jeniskelamin',
        'agama',
        'tempatlahir',
        'tanggallahir',
        'tahunmasuk',
    ];
}

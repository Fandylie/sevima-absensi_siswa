<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_absen extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nisn',
        'tanggalabsen',
        'tempatabsen',
    ];
}

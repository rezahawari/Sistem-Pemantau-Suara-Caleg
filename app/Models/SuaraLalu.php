<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuaraLalu extends Model
{
    use HasFactory;
    protected $fillable = [
        'lat',
        'long',
        'daerah',
        'kecamatan',
        'jml_penduduk',
        'pemilih'
    ];
}

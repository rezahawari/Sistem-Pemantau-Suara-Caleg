<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktifitas extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl',
        'aktifitas',
        'potensi',
        'foto',
        'nama',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'pj'
    ];
}

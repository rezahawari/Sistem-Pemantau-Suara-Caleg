<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditedActivity extends Model
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
        'nama_edit',
        'kecamatan_edit',
        'kelurahan_edit',
        'rt_edit',
        'rw_edit',
        'pj_edit',
        'tgl_edit',
        'status',
    ];
}

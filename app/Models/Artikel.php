<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl',
        'pengapload',
        'role',
        'slug',
        'judul',
        'ringkasan',
        'isi',
        'foto_1',
        'foto_2',
        'foto_3',
        'foto_4',
        'foto_5',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'pass_view',
        'role',
        'nik',
        'ktp',
        'tgl_lahir',
        'alamat',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'potensi',
        'pj',
        'foto_profil'
    ];
}

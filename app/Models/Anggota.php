<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = ['nama', 'kelas', 'no_hp', 'posisi', 'status', 'tanggal_daftar'];

    protected $casts = [
        'tanggal_daftar' => 'date',
    ];
}

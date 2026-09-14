<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['title', 'tanggal', 'jam', 'lokasi'];

    protected $casts = [
        'tanggal' => 'date',
    ];
}

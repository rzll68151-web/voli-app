<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['title', 'body', 'image', 'tanggal'];

    protected $casts = [
        'tanggal' => 'date',
    ];
}

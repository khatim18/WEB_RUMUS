<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangRumus extends Model
{
    use HasFactory;

    protected $table = 'tentang_rumus';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
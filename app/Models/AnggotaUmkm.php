<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnggotaUmkm extends Model
{
    use HasFactory;

    protected $table = 'anggota_umkms';
    protected $primaryKey = 'id_anggota';
    protected $fillable = [
        'nama',
        'nama_umkm',
        'email',
        'no_hp',
        'alamat',
    ];
}
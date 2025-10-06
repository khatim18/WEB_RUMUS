<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = 'umkms';
    protected $primaryKey = 'id_umkm';
    protected $fillable = [
        'nama_umkm',
        'nama_pemilik',
        'no_hp',
        'deskripsi',
    ];
    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_umkm', 'id_umkm');
    }
}

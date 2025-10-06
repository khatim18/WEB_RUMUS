<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GambarProduk extends Model
{
     protected $table = 'gambar_produks';
    protected $primaryKey = 'id_gambar';

    protected $fillable = ['id_produk','path_gambar','is_cover','urutan'];

    public function produk() {
       return $this->belongsTo(\App\Models\Produk::class, 'id_produk', 'id_produk');
    }
}

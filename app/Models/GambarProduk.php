<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarProduk extends Model
{
    use HasFactory;

    protected $table = 'gambar_produks';
    protected $fillable = ['id_produk', 'path_gambar', 'is_cover'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}

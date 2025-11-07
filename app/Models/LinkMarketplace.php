<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkMarketplace extends Model
{
    use HasFactory;

    protected $table = 'link_marketplaces';
    protected $primaryKey = 'id_link';

    protected $fillable = [
        'id_produk',
        'nama_marketplace',
        'url',
        'is_active',
        'icon',
    ];

    /**
     * Relasi ke tabel produk.
     * Setiap link marketplace milik satu produk.
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}

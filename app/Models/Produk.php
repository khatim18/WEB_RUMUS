<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $primaryKey = 'id_produk';

    public $timestamps = true;

    protected $fillable = [
        'id_kategori',
        'id_umkm',
        'id_admin',
        'nama_produk',
        'slug',
        'kode_produk',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'harga',
        'is_active'
    ];


    public function umkm()
    {
        return $this->belongsTo(\App\Models\Umkm::class, 'id_umkm', 'id_umkm');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function legalitas()
    {
        return $this->belongsToMany(Legalitas::class, 'produk_legalitas')
            ->withPivot(['nomor_sertifikat','tanggal_terbit','tanggal_kadaluwarsa'])
            ->withTimestamps();
    }

    public function gambar()
    {
        return $this->hasMany(\App\Models\GambarProduk::class, 'id_produk', 'id_produk');
    }

    public function links()
    {
        return $this->hasMany(LinkMarketplace::class, 'id_produk', 'id_produk');
    }

    public function coverImage()
    {
        return $this->hasOne(GambarProduk::class)->where('is_cover', true);
    }

    public function getCoverUrlAttribute(): ?string
    {
        $cover = $this->coverImage()->first();
        if ($cover) return asset('storage/' . $cover->path);
        $first = $this->gambar()->orderBy('urutan')->first();
        return $first ? asset('storage/' . $first->path) : null;
    }
}

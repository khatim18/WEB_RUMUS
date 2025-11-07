<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Legalitas extends Model
{
    protected $table = 'legalitas';

    protected $primaryKey = 'id_legalitas';

    protected $fillable = [
        'nama_legalitas',
        'slug',
        'penerbit',
        'deskripsi',
        'lampiran',
    ];

    public $timestamps = true;

    protected static function booted()
    {
    static::saving(function ($legalitas) {
        if (empty($legalitas->slug)) {
            $legalitas->slug = Str::slug($legalitas->nama_legalitas);
        }
    });
    }

   public function produks()
{
    return $this->belongsToMany(Produk::class, 'produk_legalitas', 'id_legalitas', 'id_produk')
        ->withPivot(['nomor_sertifikat','tanggal_terbit','tanggal_kadaluwarsa'])
        ->withTimestamps();
}

}

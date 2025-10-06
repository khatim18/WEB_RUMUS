<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Legalitas extends Model
{
    use HasFactory;

    protected $table = 'legalitas';

    protected $primaryKey = 'id_legalitas';

    protected $fillable = [
        'nama_legalitas',
        'slug',
        'penerbit',
        'deskripsi',
        'lampiran',
    ];

    public $timestamps = false;

    protected static function booted()
    {
        static::creating(function ($legalitas) {
            if (empty($legalitas->slug)) {
                $legalitas->slug = Str::slug($legalitas->nama);
            }
        });
    }

    public function produks()
    {
        return $this->belongsToMany(Produk::class, 'produk_legalitas')
            ->withPivot(['nomor_sertifikat','tanggal_terbit','tanggal_kadaluwarsa'])
            ->withTimestamps();
    }
}

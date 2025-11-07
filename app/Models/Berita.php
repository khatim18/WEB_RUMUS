<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi_singkat',
        'isi_berita',
        'jenis',
        'penulis',
        'tanggal',
        'gambar',
    ];

    public function getSlugAttribute()
    {
        return Str::slug($this->judul);
    }
    // Buat slug otomatis dari judul
    protected static function booted()
    {
        static::creating(function ($berita) {
            if (empty($berita->slug)) {
                $berita->slug = Str::slug($berita->judul);
            }
        });

        static::updating(function ($berita) {
            if (empty($berita->slug)) {
                $berita->slug = Str::slug($berita->judul);
            }
        });
    }
    public function show(Berita $berita)
    {
        $beritaLainnya = Berita::where('id_berita', '!=', $berita->id_berita)
            ->latest()
            ->take(3)
            ->get();

        return view('berita.show', [
            'item' => $berita,
            'beritaLainnya' => $beritaLainnya,
        ]);
    }
}
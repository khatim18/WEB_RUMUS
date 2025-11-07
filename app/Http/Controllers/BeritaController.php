<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->paginate(6);
        return view('berita.index', compact('berita'));
    }

    public function show($slug)
   {
    // Ubah slug jadi judul (misalnya "pelatihan-umkm" => "Pelatihan UMKM")
    $judul = str_replace('-', ' ', $slug);

    // Cari berita berdasarkan judul (case-insensitive)
    $item = Berita::whereRaw('LOWER(judul) = ?', [strtolower($judul)])->firstOrFail();

    // Ambil berita lain untuk ditampilkan di bawah
    $beritaLainnya = Berita::where('id_berita', '!=', $item->id_berita)
        ->latest()
        ->take(3)
        ->get();

    return view('berita.show', compact('item', 'beritaLainnya'));
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Produk;
use App\Models\UMKM;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(3)->get();
        $kegiatans = Kegiatan::latest()->take(3)->get();
        $produks = Produk::with(['gambar','kategori','links'])->latest()->paginate(4);
        $umkms = UMKM::latest()->take(3)->get();

        return view('home.index', compact('beritas', 'kegiatans', 'produks', 'umkms'));
    }
}

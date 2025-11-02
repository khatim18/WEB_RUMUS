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
        $berita = Berita::latest()->take(3)->get();
        $kegiatan = Kegiatan::latest()->take(3)->get();
        $produk = Produk::latest()->take(4)->get();
        $umkm = UMKM::latest()->take(3)->get();

        return view('home.index', compact('berita', 'kegiatan', 'produk', 'umkm'));
    }
}

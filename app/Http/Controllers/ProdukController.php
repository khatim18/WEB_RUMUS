<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\GambarProduk;
use App\Models\Umkm;
use App\Models\ProdukLegalitas;
use App\Models\LinkMarketplace;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Ambil produk + relasi gambar dan kategori
        $produk = Produk::with('gambar', 'kategori')
            ->latest()
            ->paginate(8);

        return view('produk.index', compact('produk'));
    }

    public function show($id_produk)
    {
        // Ambil produk berdasarkan ID + relasi tambahan
        $produk = Produk::with('gambar', 'kategori', 'umkm', 'legalitas', 'links')
            ->where('id_produk', $id_produk)
            ->firstOrFail();

        // Produk terkait (opsional)
        $terkait = Produk::with('gambar')
            ->where('id_produk', '!=', $produk->id_produk)
            ->inRandomOrder()
            ->take(4)
            ->get();

        // Kirim ke halaman detail
        return view('produk.show', compact('produk', 'terkait'));
    }
}
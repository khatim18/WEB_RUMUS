<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Ambil produk + relasi gambar
        $produk = Produk::with('gambar', 'kategori')->latest()->paginate(8);

        return view('produk.index', compact('produk'));
    }
}

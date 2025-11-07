<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TentangRumusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KisahController;
use App\Http\Controllers\GaleriController;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

//kisah
Route::get('/kisah', [KisahController::class, 'index'])->name('kisah.index');
Route::get('/kisah/{id}', [KisahController::class, 'show'])->name('kisah.show');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

// Kegiatan
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');

// Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id_produk}', [ProdukController::class, 'show'])->name('produk.show');

// Tentang
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang.index');
Route::get('/tentang/sejarah', [TentangController::class, 'sejarah'])->name('tentang.sejarah');
Route::get('/tentang/visi-misi', [TentangController::class, 'visiMisi'])->name('tentang.visi-misi');Route::get('/tentang/tujuan', [TentangController::class, 'tujuan'])->name('tentang.tujuan');
Route::get('/tentang/anggota', [TentangController::class, 'anggota'])->name('tentang.anggota');
Route::get('/tentang/struktur', [TentangController::class, 'struktur'])->name('tentang.struktur');

// UMKM
Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm.index');
Route::get('/umkm/{id}', [UMKMController::class, 'detail'])->name('umkm.detail');

// Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show'])->name('berita.show');

//
Route::get('/daftar-umkm', [FrontendController::class, 'umkm'])->name('frontend.umkm');
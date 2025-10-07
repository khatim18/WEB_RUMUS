<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah file route utama untuk aplikasi Laravel kamu.
| Kamu bisa menambahkan route baru di bawah sesuai kebutuhan.
|
*/

// Halaman utama (default Laravel)
Route::get('/', function () {
    return view('welcome');
});

// Halaman Struktur Organisasi & Daftar UMKM
Route::get('/umkm', [FrontendController::class, 'umkm'])->name('umkm');

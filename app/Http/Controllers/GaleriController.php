<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();

        // Dummy data jika belum ada isi database
        if ($galeris->isEmpty()) {
            $galeris = collect([
                (object)[
                    'judul' => 'Pelatihan Desain Kemasan',
                    'deskripsi' => 'Kegiatan pelatihan desain kemasan untuk UMKM lokal agar produk lebih menarik.',
                    'gambar' => 'galeri1.jpg',
                    'tanggal' => '2024-05-10',
                ],
                (object)[
                    'judul' => 'Pameran Produk Unggulan',
                    'deskripsi' => 'UMKM binaan RUMUS menampilkan hasil produksi terbaiknya.',
                    'gambar' => 'galeri2.jpg',
                    'tanggal' => '2024-05-15',
                ],
                (object)[
                    'judul' => 'Pelatihan Digital Marketing',
                    'deskripsi' => 'Peserta diajarkan promosi digital menggunakan media sosial.',
                    'gambar' => 'galeri3.jpg',
                    'tanggal' => '2024-05-20',
                ],
                (object)[
                    'judul' => 'Kunjungan Bupati',
                    'deskripsi' => 'Kunjungan pemerintah daerah untuk melihat perkembangan UMKM desa.',
                    'gambar' => 'galeri4.jpg',
                    'tanggal' => '2024-05-25',
                ],
                (object)[
                    'judul' => 'Workshop Branding Produk',
                    'deskripsi' => 'Pelatihan strategi branding agar produk lebih dikenal masyarakat.',
                    'gambar' => 'galeri5.jpg',
                    'tanggal' => '2024-05-30',
                ],
                (object)[
                    'judul' => 'Pelatihan Keuangan',
                    'deskripsi' => 'UMKM belajar mengatur keuangan usaha dengan efektif.',
                    'gambar' => 'galeri6.jpg',
                    'tanggal' => '2024-06-05',
                ],
            ]);
        }

        return view('galeri.index', compact('galeris'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use App\Models\UMKM;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        return view('tentang.index');
    }

    public function sejarah()
    {
        $sejarah = Tentang::where('jenis', 'sejarah')->get();
        return view('tentang.sejarah', compact('sejarah'));
    }

    public function visiMisi()
    {
        $visi = Tentang::where('jenis', 'visi')->get();
        $misi = Tentang::where('jenis', 'misi')->get();
        return view('tentang.visi-misi', compact('visi', 'misi'));
    }

    public function tujuan()
    {
        $tujuan = Tentang::where('jenis', 'tujuan')->get();
        $manfaat = Tentang::where('jenis', 'manfaat')->get();
        return view('tentang.tujuan', compact('tujuan', 'manfaat'));
    }

    public function anggota()
    {
        $umkm = UMKM::latest()->paginate(12);
        return view('tentang.anggota', compact('umkm'));
    }

    public function struktur()
    {
        return view('tentang.struktur');
    }
}

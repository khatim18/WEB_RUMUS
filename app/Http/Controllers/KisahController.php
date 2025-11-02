<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kisah;

class KisahController extends Controller
{
    /**
     * Menampilkan halaman daftar kisah sukses.
     */
    public function index()
    {
        // Ambil semua data kisah dari database
        $kisahs = Kisah::latest()->get();

         $kisahs = Kisah::orderBy('created_at', 'desc')->paginate(6);
            return view('tentang.kisah', compact('kisahs'));

        return view('tentang.kisah', compact('kisahs'));
    }
}
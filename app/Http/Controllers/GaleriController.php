<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Umkm;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('galeri.index', compact('galeris'));
    }

    public function show(\App\Models\Galeri $galeri)
    {
        return view('galeri.show', compact('galeri'));
    }
}
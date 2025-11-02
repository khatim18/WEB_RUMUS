<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function index()
    {
        $umkm = UMKM::latest()->paginate(12);
        return view('umkm.index', compact('umkm'));
    }

    public function detail($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('umkm.detail', compact('umkm'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class FrontendController extends Controller
{
    public function umkm()
    {
        $umkms = Umkm::all();
        return view('frontend.umkm', compact('umkms'));
    }
}

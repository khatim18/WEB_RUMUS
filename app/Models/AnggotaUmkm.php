<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnggotaUmkm extends Model
{
    use HasFactory;

    protected $table = 'anggota_umkms';
    protected $primaryKey = 'id_anggota';
    protected $fillable = [
        'nama',
        'nama_umkm',
        'email',
        'no_hp',
        'alamat',
        'kategori_usaha',
        'jabatan',
        'foto_anggota',
    ];
    public function kategori()
    {
       return $this->belongsTo(\App\Models\Kategori::class, 'kategori_id', 'id_kategori');
    }
    public function index()
    {
    $umkm = AnggotaUmkm::paginate(12);
    $totalUmkm = AnggotaUmkm::count();

    return view('umkm.index', compact('umkm', 'totalUmkm'));
    }
}

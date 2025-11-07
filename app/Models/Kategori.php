<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model{

    protected $table = 'kategoris';
    protected $primaryKey = 'id_kategori';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama',
    ];
    public function produks() {
        return $this->hasMany(Produk::class, 'id_kategori', 'id_kategori');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $paginationTheme = 'bootstrap';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function pesanan_detail() {
        return $this->hasMany('App\Models\PesananDetail', 'barang_id', 'id');
    }

    protected $fillable = [
        'nama_barang', 
        'gambar',
        'kategori_id',
        'harga',
        'stok',
        'keterangan',
    ];

}

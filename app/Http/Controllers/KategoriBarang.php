<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Pagination;

class KategoriBarang extends Controller

{
    protected $paginationTheme = 'bootstrap';

    public function barang_kategori(Kategori $kategori){
        $barangs = Barang::paginate(8);
        return view('kategori', [
            'barangs' => $kategori->barangs,
            'title' => $kategori->nama
        ]);
    }


}

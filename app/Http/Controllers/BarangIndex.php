<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangIndex extends Controller
{
    protected $paginationTheme = 'bootstrap';
    public function index(){

        $barangs = Barang::paginate(8);
        return view('product-index', [
            'barangs' => $barangs
        ]);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
      //  $this->middleware('auth');
   // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        return view('home', [
            'barangs' => Barang::paginate(8),
            'kategoris' => Kategori::all(),
        ]);
    }

    public function adminHome(){
        $countproduk = DB::table('barangs')->count();
        $countuser = DB::table('users')->count();
        $countkategori = DB::table('kategoris')->count();
        $countpesanan = DB::table('pesanans')->count();
        return view('dashboard.index',  compact('countproduk', 'countpesanan', 'countuser', 'countkategori'));
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $countpesanan = DB::table('pesanans')->count();
        return view('dashboard.index',  compact('countpesanan'));
    }
}

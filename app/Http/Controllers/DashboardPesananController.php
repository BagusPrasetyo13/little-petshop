<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;

class DashboardPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $countpesanan = DB::table('pesanans')->count();
        $pesanan = Pesanan::latest()->get();
        return view('dashboard.pesanan.index', compact(
            'pesanan',
            'countpesanan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $countpesanan = DB::table('pesanans')->count();
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        return view('dashboard.pesanan.show', compact(
            'pesanan', 'pesanan_details', 'countpesanan'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        Pesanan::destroy($pesanan->id);
        Alert::success('Pesanan Telah DiKonfirmasi', 'Success');
        return redirect('/dashboard/pesanan');
    }
}

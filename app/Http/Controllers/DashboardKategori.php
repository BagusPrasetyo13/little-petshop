<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class DashboardKategori extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countpesanan = DB::table('pesanans')->count();
        $kategori = Kategori::all();
        return view('dashboard.kategori.index', compact(
            'kategori',
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
        $countpesanan = DB::table('pesanans')->count();
        $kategoris = new Kategori;
        return view('dashboard.kategori.create', compact(
            'kategoris'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'gambar' => 'image|file'
        ]);

        if($request->file('image')){
            $validateData['gambar'] = $request->file('image')->store('post-images');
        }
        Kategori::create($validateData);
        Alert::success('Berhasil Menambah Kategori', 'Success');
        return redirect('/dashboard/kategori');
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
        $kategori = Kategori::findOrFail($id);
        $barang = Barang::where('kategori_id', $kategori->id)->latest()->get();
        return view('dashboard.kategori.show', compact('barang','countpesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countpesanan = DB::table('pesanans')->count();
        $kategori = Kategori::findOrFail($id);
        return view('dashboard.kategori.edit', compact(
            'kategori',
            'countpesanan'
        ));
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
        $rules = [
            'nama' => 'required|max:100', 
            'gambar' => 'image|file',
        ];

        $kategori = Kategori::findOrFail($id);

        $validateData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['gambar'] = $request->file('image')->store('post-images');
        }

        Kategori::where('id' ,$kategori->id)
            ->update($validateData);
            Alert::success('Berhasil Update Kategori', 'Success');
        return redirect('/dashboard/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        if($kategori->gambar) {
            Storage::delete($kategori->gambar);
        }
        Kategori::destroy($kategori->id);
        Alert::success('Berhasil Menghapus Kategori', 'Success');
        return redirect('/dashboard/kategori');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countpesanan = DB::table('pesanans')->count();
        $barangs = Barang::latest()->get();
        return view('dashboard.produk.index', compact(
            'barangs',
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
        $kategoris = Kategori::all(); 
        $barangs = new Barang;
        return view('dashboard.produk.create', compact(
            'barangs',
            'kategoris',
            'countpesanan'
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
            'nama_barang' => 'required|max:100',
            'kategori_id' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required',
            'gambar' => 'image|file'
        ]);

        if($request->file('image')){
            $validateData['gambar'] = $request->file('image')->store('post-images');
        }
        Barang::create($validateData);
        Alert::success('Berhasil Menambah Produk', 'Success');
        return redirect('/dashboard/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $kategoris = Kategori::all();
        $barang = Barang::findOrFail($id);
        return view('dashboard.produk.edit', compact('barang', 'kategoris', 'countpesanan'));
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
            'nama_barang' => 'required|max:100',
            'kategori_id' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required', 
            'gambar' => 'image|file',
        ];

        $barang = Barang::findOrFail($id);

        $validateData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['gambar'] = $request->file('image')->store('post-images');
        }

        Barang::where('id' ,$barang->id)
            ->update($validateData);
            Alert::success('Berhasil Update Produk', 'Success');
        return redirect('/dashboard/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang, $id)

    {
        $barang = Barang::find($id);
        if($barang->gambar) {
            Storage::delete($barang->gambar);
        }
        Barang::destroy($barang->id);
        Alert::success('Berhasil Menghapus Produk', 'Success');
        return redirect('/dashboard/produk');
    }
    
}

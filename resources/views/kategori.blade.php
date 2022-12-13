@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="text-dark">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
         </ol>
     </nav>
     <h3 align="center"><strong>{{ $title }}</strong></h3>
        <div class="col-md-12 mb-3">
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-3 mt-4">
            <div class="card">
                <img src="{{ url('storage/' . $barang->gambar) }}" class="card-img-top mt-4" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
    
@endsection
@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ url('img/logo/Brown Soft Cream fix.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ url('img/logo/PRODUCT.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ url('img/logo/BEST SALES.png') }}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
              {{-- PILIH KATEGORI --}}
              <section class="pilih-kategori mt-4">
                <h3 align="center"><strong>Kategori</strong></h3>
                <div class="row mt-4">
                    @foreach($kategoris as $kategori)
                    <div class="col-md-3 mt-4">
                        <div class="card shadow">
                            <div class="card-body text-center">
                               <img src="{{ url('img/brand') }}/{{ $kategori->gambar }}" class="img-fluid">
                                <div class="nama mt-2 mb-3">
                                  <h3><strong>{{ $kategori->nama }}</strong></h3>
                                </div>
                                <a href="/kategori/{{ $kategori->nama }}" class="btn btn-info btn-block"><i class="fas fa-eye"></i> Lihat Produk</a>                        
                            </div>
                         </div>
                    </div>
                    @endforeach
                </div>
            </section>
            {{-- BEST PRODUCT --}}
            <section class="best-product mt-5">
              <h3 align="center"><strong>Produk</strong></h3>
              <div class="d-flex justify-content-end mt-3">
                <a href="{{ url('/product-index') }}" class="btn btn-info float-left"><i class="fas fa-eye"></i> Lihat Semua Produk</a>
              </div>
              <div class="row mt-4">
                  @foreach($barangs as $barang)
                  <div class="col-md-3 mt-4">
                      <div class="card shadow">
                        <img src="{{ asset('storage/' . $barang->gambar) }}" class="card-img-top mt-4" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                            <p class="card-text">
                                <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                                <strong>Stok : </strong> {{ $barang->stok }} <br>
                                <hr>
                                <strong>Keterangan :</strong><br>
                                {{ $barang->keterangan }}
                            </p>
                            <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart" ></i>  Pesan</a>
                          </div>
                       </div>
                  </div>
                  @endforeach
              </div>
            </section>
    </div>
  </div>
  @include('layouts.footer')
@endsection

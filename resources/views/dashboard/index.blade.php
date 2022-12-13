@extends('dashboard.layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6 mt-4">
                <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h4>{{ $countproduk }}</h4>
                        <p>Produk</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-archive"></i>
                        </div>
                        <a href="/dashboard/produk" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6 mt-4">
                <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h4>{{ $countpesanan }}</h4>
                        <p>Pesanan</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="/dashboard/pesanan" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6 mt-4">
                <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                        <h4>{{ $countkategori }}</h4>
                        <p>Kategori</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-th"></i>
                        </div>
                        <a href="/dashboard/kategori" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

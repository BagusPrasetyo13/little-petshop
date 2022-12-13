@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0 d-flex justify-content-center">Halaman Kategori Barang</h1>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
        <!-- /.card-header -->
        <div class="card-body">
          @if (session()->has('sukses'))
          <div class="alert alert-success d-flex justify-content-center col-md-12" role="alert">
              {{ session('sukses') }}
          </div>
          @endif
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Keterangan</th>
            </tr>
            <tbody>
              @foreach ($barang as $barang)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $barang->nama_barang }}</td>
                  <td>{{ $barang->kategori->nama }}</td>
                  <td>{{ $barang->harga }}</td>
                  <td>{{ $barang->stok }}</td>
                  <td>{{ $barang->keterangan }}</td>
                </tr>
              @endforeach
            </tbody>
            </thead>
          </table>
          <a href="/dashboard/kategori" class="btn btn-primary">Kembali</a>
        </div>
        <!-- /.card-body -->
      </div><!-- /.content-header -->
@endsection

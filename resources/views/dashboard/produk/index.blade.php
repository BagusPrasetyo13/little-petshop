@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0 d-flex justify-content-center">Halaman Barang</h1>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
        <!-- /.card-header -->
        <div class="card-body">
          @if (session()->has('sukses'))
          <div class="alert alert-success d-flex justify-content-center col-md-12" role="alert">
              {{ session('sukses') }}
          </div>
          @endif

          <a href="/dashboard/produk/create" class="btn btn-primary mb-3">Tambah Barang</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
            <tbody>
              @foreach ($barangs as $barang)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $barang->nama_barang }}</td>
                  <td>{{ $barang->kategori->nama }}</td>
                  <td>{{ $barang->harga }}</td>
                  <td>{{ $barang->stok }}</td>
                  <td>{{ $barang->keterangan }}</td>
                  <td>
                    <form action="/dashboard/produk/{{ $barang->id }}/edit" class=" d-inline">
                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                    </form>
            
                    <form action="/dashboard/produk/{{ $barang->id }}" method="POST" class=" d-inline" onclick="return confirm('Yakin menghapus data?')">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger"><i class="fas fa-trash"></i>
                         </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            </thead>
          </table>
        </div>
        <!-- /.card-body -->
      </div><!-- /.content-header -->
@endsection

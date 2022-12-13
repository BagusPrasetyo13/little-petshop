@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0 d-flex justify-content-center">Halaman Pesanan</h1>
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
              <th>Nama Pemesan</th>
              <th>Tanggal</th>
              <th>Status</th>
              <th>Kode</th>
              <th>Action</th>
            </tr>
            <tbody>
              @foreach ($pesanan as $pesanan)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $pesanan->user->name }}</td>
                  <td>{{ $pesanan->tanggal }}</td>
                  <td>
                    @if ($pesanan->status == 1)
                        Menunggu Konfirmasi Admin
                    @else
                        Belum Melakukan Konfirmasi
                    @endif
                </td>
                  <td>{{ $pesanan->kode }}</td>
                  <td class="d-block">
                    <a href="/dashboard/pesanan/{{ $pesanan->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
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

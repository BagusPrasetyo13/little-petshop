@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0 d-flex justify-content-center">Halaman Detail Pesanan</h1>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
        <!-- /.card-header -->
        <div class="card-body">
          @if (session()->has('sukses'))
          <div class="alert alert-success d-flex justify-content-center col-md-12" role="alert">
              {{ session('sukses') }}
          </div>
          @endif
          <table class="table table-striped">
            <p align="right"><strong>Tanggal Pesan : {{ $pesanan->tanggal }}</strong></p> 
            <p><strong> | Atas Nama : {{ $pesanan->user->name }} | </strong></p> 
            <p><strong> | No. HP : {{ $pesanan->user->nohp }} | </strong></p> 
            <p><strong> | Alamat : {{ $pesanan->user->alamat }} | </strong></p> 
            <table class="table table-striped">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Harga / pcs</th>
                      <th>Jumlah Harga</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no = 1; ?>
                  @foreach ($pesanan_details as $pesanan_detail)
                  <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                      <td>{{ $pesanan_detail->jumlah }} pcs</td>
                      <td align="left">Rp. {{ number_format($pesanan_detail->barang->harga)}}</td>
                      <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                  </tr>
                  @endforeach
                  <tr>
                      <td colspan="4" align="right"><strong>Total Harga Barang : </strong></td>
                      <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                  </tr>
              </tbody>
          </table>
          <a href="/dashboard/pesanan" class="btn btn-primary">Kembali</a>
          <form action="/dashboard/pesanan/{{ $pesanan->id }}" method="POST" class="d-inline" onclick="return confirm('Konfirmasi Pesanan?')">
            @method('delete')
            @csrf
            <button class="btn btn-success">
               Konfirmasi</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div><!-- /.content-header -->
@endsection

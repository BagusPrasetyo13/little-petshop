@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}"> Riwayat</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mb-3">
            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if (!empty($pesanan))
                    <br>
                    <p align = "right"><strong>Tanggal Pesan : {{ $pesanan->tanggal }}</strong></p>
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
                    @endif
                </div>
            </div>
         </div>
    </div>
</div>
@endsection

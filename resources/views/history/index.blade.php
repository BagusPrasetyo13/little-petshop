@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mb-3">
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i>  Riwayat</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($pesanans as $pesanan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pesanan->tanggal }}</td>
                                    <td>
                                        @if ($pesanan->status == 1)
                                            Pesanan Segera DiKonfirmasi
                                        @else
                                            Belum DiKonfirmasi
                                        @endif
                                    </td>
                                    <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                                    <td>
                                        <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                             Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection

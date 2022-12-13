@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0 d-flex justify-content-center">Halaman Kategori</h1>
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
            <a href="/dashboard/kategori/create" class="btn btn-primary mb-3">Tambah Kategori</a>
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Action</th>
            </tr>
            <tbody>
              @foreach ($kategori as $kategori)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $kategori->nama }}</td>
                  <td>
                    <a href="/dashboard/kategori/{{ $kategori->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <form action="/dashboard/kategori/{{ $kategori->id }}/edit" class=" d-inline">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                      </form>
                    <form action="/dashboard/kategori/{{ $kategori->id }}" method="POST" class=" d-inline" onclick="return confirm('Yakin menghapus kategori?')">
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

@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0 d-flex justify-content-center">Halaman Pengguna</h1>
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
              <th>Nama Pengguna</th>
              <th>Alamat</th>
              <th>E-Mail</th>
              <th>No. Hp</th>
              <th>Action</th>
            </tr>
            <tbody>
              @foreach ($user as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->alamat }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->nohp }}</td>
                  <td>
                    <form action="/dashboard/user/{{ $user->id }}" method="POST" class=" d-inline" onclick="return confirm('Yakin menghapus data pengguna?')">
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

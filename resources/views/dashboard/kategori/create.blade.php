@extends('dashboard.index')
@section('container')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header d-flex justify-content-center">
            <h3 class="card-title">Tambah Kategori</h3>
        </div>
        <form method="POST" action="/dashboard/kategori" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama"
                    name="nama" placeholder="Masukkan Nama Kategori" autofocus value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Tambah Gambar</label>
                    <img class="img-preview img-fluid mb-3 col-sm-6">
                    <input type="file" class="form-control @error ('image') is-invalid @enderror" id="image"
                    name="image" onchange="previewImage()" required>
                    @error('image')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('/dashboard/kategori') }}" class="btn btn-danger"> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection

@extends('dashboard.index')
@section('container')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header d-flex justify-content-center">
            <h3 class="card-title">Edit Kategori {{ $kategori->nama }}</h3>
        </div>
        <form method="POST" action="/dashboard/kategori/{{ $kategori->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
        <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama"
                    name="nama" placeholder="Masukkan Nama Barang" autofocus value="{{ old('nama', $kategori->nama) }}">
                    @error('nama')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Edit Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $kategori->gambar }}">
                    @if ($kategori->gambar)
                        <img src="{{ asset('storage/post-images/' . $kategori->gambar) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-6">
                    @endif   
                    <input type="file" class="form-control @error ('image') is-invalid @enderror" id="image"
                    name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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

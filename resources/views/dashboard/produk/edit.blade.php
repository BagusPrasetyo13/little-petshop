@extends('dashboard.index')
@section('container')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header d-flex justify-content-center">
            <h3 class="card-title">Edit Barang</h3>
        </div>
        <form method="POST" action="/dashboard/produk/{{ $barang->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
        <div class="card-body">
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control @error ('nama_barang') is-invalid @enderror" id="nama_barang"
                    name="nama_barang" placeholder="Masukkan Nama Barang" autofocus value="{{ old('nama_barang', $barang->nama_barang) }}">
                    @error('nama_barang')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga Barang</label>
                    <input type="text" class="form-control @error ('harga') is-invalid @enderror" id="harga"
                    name="harga" placeholder="Harga Barang" value="{{ old('harga', $barang->harga) }}">
                    @error('harga')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok">Stok Barang</label>
                    <input type="text" class="form-control @error ('stok') is-invalid @enderror" id="stok"
                    name="stok" placeholder="Stok Barang" value="{{ old('stok', $barang->stok) }}">
                    @error('stok')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error ('keterangan') is-invalid @enderror" id="keterangan"
                    name="keterangan" placeholder="Keterangan" value="{{ old('keterangan', $barang->keterangan) }}">
                    @error('keterangan')
                        <div class="invalid-feeback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Kategori">Kategori</label>
                    <select class="form-control" aria-label="Disabeled select" name="kategori_id">
                        <option selected align="center"> --- Pilih Kategori ---</option>
                        @foreach ($kategoris as $kategori)     
                            @if (old('kategori_id', $barang->kategori_id) == $kategori->id)
                                <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                            @else
                                <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image">Edit Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $barang->gambar }}">
                    @if ($barang->gambar)
                        <img src="{{ asset('storage/post-images/' . $barang->gambar) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
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
                    <a href="{{ url('/dashboard/produk') }}" class="btn btn-danger"> Kembali</a>
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

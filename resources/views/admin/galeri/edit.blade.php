@extends('layout.admin.index') {{-- Ganti sesuai layoutmu --}}

@section('content')
<div class="container mt-5">
    <h2>Edit Galeri</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $galeri->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $galeri->kategori) }}" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Saat Ini</label><br>
            <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="Gambar galeri" width="200"><br><br>
            <label for="gambar" class="form-label">Ganti Gambar</label>
            <input type="file" name="gambar" class="form-control">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

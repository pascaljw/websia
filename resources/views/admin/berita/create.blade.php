@extends('layout.admin.index')

@section('content')
<form action="{{ isset($berita) ? route('admin.berita.update', $berita->id) : route('admin.berita.store') }}" method="POST">
    @csrf
    @if(isset($berita)) @method('PUT') @endif

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" value="{{ old('judul', $berita->judul ?? '') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="5">{{ old('isi', $berita->isi ?? '') }}</textarea>
    </div>
     <div class="mb-3">
        <label>Kategori</label>
        <textarea name="kategori" class="form-control" rows="5">{{ old('kategori', $berita->kategori ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" required>
    </div>

    <button class="btn btn-success">{{ isset($berita) ? 'Update' : 'Simpan' }}</button>
</form>
@endsection

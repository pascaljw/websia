@extends('layout.admin.index')
@section('content')
<form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul ?? '') }}">
    </div>

    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" rows="5" class="form-control">{{ old('isi', $berita->isi ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
        @if(isset($berita) && $berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" width="100" class="mt-2">
        @endif
    </div>

    <button class="btn btn-success">{{ isset($berita) ? 'Update' : 'Simpan' }}</button>
</form>
@endsection

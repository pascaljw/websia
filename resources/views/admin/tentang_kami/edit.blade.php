@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Edit Tentang Kami</h1>
    <form action="{{ route('admin.tentang_kami.update', $tentangKami->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $tentangKami->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $tentangKami->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Foto</label><br>
            @if($tentangKami->foto)
                <img src="{{ asset('storage/'.$tentangKami->foto) }}" width="100" class="mb-2">
            @endif
            <input type="file" name="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

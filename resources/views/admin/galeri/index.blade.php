@extends('layout.admin.index')

@section('content')
<div class="container">
  <h1>Galeri</h1>
  <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary mb-3">Tambah Gambar</a>
  <div class="row">
    @foreach ($galeris as $item)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
          <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">Kategori: {{ $item->kategori }}</p>
            <a href="{{ route('admin.galeri.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Tambah Tugas Akhir</h1>

    <form action="{{ route('admin.tugas_akhir.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Abstrak</label>
            <textarea name="abstrak" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label>Pembimbing</label>
            <input type="text" name="pembimbing" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

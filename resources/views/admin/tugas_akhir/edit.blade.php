@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Edit Tugas Akhir</h1>

    <form action="{{ route('admin.tugas_akhir.update', $tugasAkhir->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" value="{{ old('nama_mahasiswa', $tugasAkhir->nama_mahasiswa) }}">
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ old('nim', $tugasAkhir->nim) }}">
        </div>

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $tugasAkhir->judul) }}">
        </div>

        <div class="mb-3">
            <label>Abstrak</label>
            <textarea name="abstrak" class="form-control" rows="4">{{ old('abstrak', $tugasAkhir->abstrak) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Pembimbing</label>
            <input type="text" name="pembimbing" class="form-control" value="{{ old('pembimbing', $tugasAkhir->pembimbing) }}">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

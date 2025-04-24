@extends('layout.admin.index')

@section('content')
    <h1>Edit Data Dosen</h1>

    <form action="{{ route('admin.dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $dosen->jabatan }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>
            <div class="mt-2">
                <img src="{{ asset('storage/' . $dosen->foto) }}" alt="Foto Dosen" width="100">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
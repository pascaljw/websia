@extends('layout.admin.index') <!-- sesuaikan dengan layout admin kamu -->

@section('content')
<div class="container">
    <h4>Tambah Mahasiswa</h4>
    <form action="{{ route('admin.mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

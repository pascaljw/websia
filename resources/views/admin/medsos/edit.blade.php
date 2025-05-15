@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Tambah Link</h1>
    <form action="{{ route('admin.medsos.update', $medsos->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- INI PENTING! -->
        <div class="mb-3">
            <label>Facebook</label>
            <input type="text" name="facebook" class="form-control" value="{{ $medsos->facebook }}" >
        </div>
        <div class="mb-3">
            <label>Instagram</label>
            <input type="text" name="instagram" class="form-control" value="{{ $medsos->instagram }}" >
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

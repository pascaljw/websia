@extends('layout.admin.index')

@section('content')
    <h1>Tambah Partner</h1>

    <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

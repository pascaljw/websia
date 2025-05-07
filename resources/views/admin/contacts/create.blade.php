@extends('layout.admin.index')

@section('content')
<div class="container">
    <h2>Tambah Kontak</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.contacts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

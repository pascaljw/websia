@extends('layout.admin.index')

@section('content')
<div class="container">
    <h2>Edit Kontak</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="address" class="form-control" value="{{ $contact->address }}" required>
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $contact->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

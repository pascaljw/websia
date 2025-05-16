@extends('layout.admin.index')

@section('content')
    <h1>Edit Partner</h1>

    <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <p>Logo saat ini:</p>
            <img src="{{ asset('storage/' . $partner->logo) }}" width="100">
        </div>

        <div>
            <label for="logo">Ganti Logo (jika perlu):</label>
            <input type="file" name="logo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

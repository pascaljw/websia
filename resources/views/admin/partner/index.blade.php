@extends('layout.admin.index')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Partner List</h2>
        <a href="{{ route('admin.partner.create') }}" class="btn btn-success mb-3">Create New Partner</a>
    </div>

    <div class="row">
        @foreach($partners as $partner)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-3">
                <img src="{{ asset('storage/' . $partner->logo) }}" alt="Logo {{ $partner->nama }}" class="img-fluid mb-3" style="max-height: 150px; object-fit: contain;">
                <h5>{{ $partner->nama }}</h5>
                <div class="d-flex justify-content-center gap-2 mt-2">
                    <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-warning">Edit</a>
                    <form method="POST" action="{{ route('admin.partner.destroy', $partner->id) }}" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

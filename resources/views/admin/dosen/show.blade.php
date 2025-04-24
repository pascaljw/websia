@extends('layout.admin.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Detail Dosen</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $dosen->foto) }}" alt="Foto Dosen" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h2>{{ $dosen->nama }}</h2>
                    <p class="lead">{{ $dosen->jabatan }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
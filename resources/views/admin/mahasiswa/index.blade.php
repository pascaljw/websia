@extends('layout.admin.index')

@section('content')
<div class="container">
    <h4>Data Mahasiswa</h4>
    <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-success mb-3">+ Tambah Mahasiswa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Data Tugas Akhir</h1>
    <a href="{{ route('admin.tugas_akhir.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Judul</th>
                <th>Pembimbing</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama_mahasiswa }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->pembimbing }}</td>
                    <td>
                        <a href="{{ route('admin.tugas_akhir.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.tugas_akhir.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

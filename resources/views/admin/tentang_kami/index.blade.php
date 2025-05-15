@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Data Tentang Kami</h1>
    @if ($tentangKamis->count() == 0)
    <a href="{{ route('admin.tentang_kami.create') }}" class="btn btn-danger">Tambah Kontak</a>
@endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tentangKamis as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($item->foto)
                        <img src="{{ asset('storage/'.$item->foto) }}" width="100">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td>{{ $item->judul }}</td>
                <td>{{ Str::limit($item->deskripsi, 100) }}</td>
                <td>
                    <a href="{{ route('admin.tentang_kami.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

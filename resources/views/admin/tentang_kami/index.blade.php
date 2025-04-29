@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Data Tentang Kami</h1>
    <a href="{{ route('admin.tentang_kami.create') }}" class="btn btn-primary">Tambah Data</a>
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
                    <form action="{{ route('admin.tentang_kami.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

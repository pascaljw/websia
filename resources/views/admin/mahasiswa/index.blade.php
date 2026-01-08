@extends('layout.admin.index')

@section('content')
<div class="container">
    <h4>Data Mahasiswa</h4>
    @if(Auth::user()->isSuperAdmin())
    <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-success mb-3">+ Tambah Mahasiswa</a>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>
                    <a href="{{ route('admin.mahasiswa.edit', $mhs->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    @if(Auth::user()->isSuperAdmin())
                    <form action="{{ route('admin.mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

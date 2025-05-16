@extends('layout.admin.index')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Daftar Dosen</h1>
        <a href="{{ route('admin.dosen.create') }}" class="btn btn-success mb-3">Tambah Dosen</a>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dosens as $dosen)
                <tr>
                    <td>
                        @if($dosen->foto)
                            <img src="{{ asset('storage/' . $dosen->foto) }}" alt="Foto Dosen" width="80" class="img-thumbnail">
                        @else
                            <img src="{{ asset('admin/images/default.png') }}" alt="Foto Default" width="80" class="img-thumbnail">
                        @endif
                    </td>

                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->jabatan }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.dosen.show', $dosen->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('admin.dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.dosen.destroy', $dosen->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data dosen</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
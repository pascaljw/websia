@extends('layout.admin.index')

@section('content')
<a href="{{ route('admin.berita.create') }}" class="btn btn-success mb-3">Tambah Berita</a>
<table class="table">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($beritas as $berita)
    <tr>
      <td>{{ $berita->judul }}</td>
      <td>{{ $berita->created_at->format('d M Y') }}</td>
      <td>
        <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Yakin ingin hapus?')">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $beritas->links() }}
@endsection

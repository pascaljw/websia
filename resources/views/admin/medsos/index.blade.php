@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1>Link Media Social</h1>
    @if ($medsos->count() == 0)
        <a href="{{ route('admin.medsos.create') }}" class="btn btn-primary">Tambah Link</a>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medsos as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->facebook }}</td>
                <td>{{ $item->instagram }}</td>
                <td>
                    <a href="{{ route('admin.medsos.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layout.admin.index')

@section('content')
<div class="container">
    <h2>Contact List</h2>
    @if ($contacts->count() == 0)
    <a href="{{ route('contacts.create') }}" class="btn btn-success mb-3">Tambah Kontak</a>
@endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

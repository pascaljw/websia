@extends('layout.admin.index')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit User</h1>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mb-3">Back to Users</a>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control" required>
            @error('name') <p class="text-danger">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control" required>
            @error('email') <p class="text-danger">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="password">Password (leave blank to keep current)</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password') <p class="text-danger">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="superadmin" {{ old('role', $user->role) == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
            </select>
            @error('role') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection
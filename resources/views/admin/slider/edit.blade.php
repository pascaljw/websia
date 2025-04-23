@extends('layout.admin.index')
@section('content')

<div class="container">
    <h1>Edit Slide</h1>
    <form action="{{ route('admin.slider.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $slider->title }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection
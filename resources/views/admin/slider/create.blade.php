@extends('layout.admin.index')
@section('content')

<div class="container">
    <h1>Create New Slide</h1>
    <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection

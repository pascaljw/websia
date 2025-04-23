@extends('layout.admin.index')

section('title', 'Slides')

@section('content')
<div class="container">
    <h1>Slides</h1>
    <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">Create New Slide</a>
    <div class="row mt-4">
        @foreach ($slider as $slider)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $slider->image) }}" class="card-img-top" alt="{{ $slider->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $slider->title }}</h5>
                    <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
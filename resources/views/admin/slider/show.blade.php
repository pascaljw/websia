@extends('layouts.admin.index')

@section('content')
<div class="container">
    <h1>{{ $slider->title }}</h1>
    <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" class="img-fluid">
    <a href="{{ route('admin.slider.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
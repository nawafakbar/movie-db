@extends('layouts.main')
@section('title', 'Create')
@section('navView', 'active')

@section('content')

<div class="container py-4">
    @if ($errors->any())
    <div class="alert alert-danger mt-5">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('/movies') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Title -->
    <div class="mb-3">
        <label for="title" class="form-label">Movie Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <!-- Synopsis -->
    <div class="mb-3">
        <label for="synopsis" class="form-label">Synopsis</label>
        <textarea class="form-control" id="synopsis" name="synopsis" rows="3"></textarea>
    </div>

    <!-- Category -->
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select" id="category_id" name="category_id" required>
            <option value="" disabled selected>-- Select Category --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Year -->
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="number" class="form-control" id="year" name="year" min="1900" max="{{ date('Y') }}" required>
    </div>

    <!-- Actors -->
    <div class="mb-3">
        <label for="actors" class="form-label">Actors</label>
        <textarea class="form-control" id="actors" name="actors" rows="2"></textarea>
    </div>

    <!-- Cover Image -->
    <div class="mb-3">
        <label for="cover_image" class="form-label">Cover Image</label>
        <input class="form-control" type="file" id="cover_image" name="cover_image" accept="image/*">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary mb-5">Save Movie</button>
</form>
</div>
@endsection
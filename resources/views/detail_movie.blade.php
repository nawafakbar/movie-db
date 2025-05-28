@extends('layouts.main')
@section('title', $movie->title . ' - Detail')
@section('navHome', 'active')

@section('content')
<div class="row pb-5 mb-5 pt-4">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $movie->cover_image) }}" class="card-img-top" style="object-fit: cover;"
                            alt="{{ $movie->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-between h-100">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text"><strong>Sinopsis:</strong> {{ Str::limit($movie->synopsis, 150) }}</p>
                            <p class="card-text"><strong>Actor:</strong> {{ Str::limit($movie->actors, 150) }}</p>
                            <p class="card-text"><strong>Category:</strong> {{ optional($movie->categories)->category_name ?? '-' }}</p>
                            <a href="/movies" class="btn btn-primary mt-3">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
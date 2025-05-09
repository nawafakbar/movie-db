@extends('layouts.main')
@section('title','List Movie')
@section('navCard', 'active')

@section('content')
<div class="container my-5">
    <div class="container">
  <div class="row d-flex justify-content-center">
    @foreach ($movies as $movie)
      <div class="col-md-6 d-flex justify-content-center mb-3">
        <div class="card mb-3" style="max-width: 440px; height: 330px;">
  <div class="row g-0 h-100">
    <div class="col-md-6 h-100">
      <img src="{{ $movie->cover_image }}" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="{{ $movie->title }}">
    </div>
    <div class="col-md-6">
      <div class="card-body d-flex flex-column justify-content-between h-100">
        <div>
          <h5 class="card-title">{{$movie->title}}</h5>
          <p class="card-text fs-6">{{ Str::limit($movie->synopsis, 50) }}</p>
        </div>
        <p class="card-text">
          <a class="btn btn-primary" href="/home">View more</a>
        </p>
      </div>
    </div>
  </div>
</div>
      </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center mt-4">
  {{ $movies->links() }}
</div>

  </div>
</div>
@endsection

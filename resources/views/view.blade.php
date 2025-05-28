@extends('layouts.main')
@section('title', 'Watch List')
@section('navView', 'active')

@section('content')

<h1 class="mt-5">List Movie</h1>
<a href="/movies/create" class="btn btn-primary mb-2">Add Movie</a>
<table class="table table-responsive table-bordered table-striped">
    <thead>
        <tr class="table-primary">
            <th>No</th>
            <th>Title</th>
            <th>Category</th>
            <th>Actors</th>
            <th>Year</th>
            <th>Cover Image</th>
            <th class="text-center">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $movies as $movie )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $movie->title }}</td>
            <td>{{ optional($movie->categories)->category_name ?? '-' }}</td>
            <td>{{ $movie->actors }}</td>
            <td>{{ $movie->year }}</td>
            <td class="text-center"><img src="{{ asset('storage/' . $movie->cover_image) }}" class="img-fluid" style="object-fit: cover; width: 100px;" alt="{{ $movie->title }}"></td>
            <td class="text-center">
            <a href="/movie/{{ $movie->id }}/{{ $movie->slug }}/dua" class="btn btn-primary mb-2">Detail</a>
            <a href="/{{ $movie->id }}/{{ $movie->slug }}/edit" class="btn btn-warning mb-2">Edit</a>
            <form action="/movies/{{$movie->id}}" method="post" class="d-inline" onsubmit="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
            @method('delete')
            @csrf
            <button class="btn btn-danger mb-2">Delete</button>
        </form></td>
        </tr>
            
        @endforeach
    </tbody>
</table>
<div class="mb-5">
    {{ $movies->links() }}
</div>
@endsection
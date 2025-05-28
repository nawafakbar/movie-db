@extends('layouts.main')
@section('title', $movie->title . ' - Detail')
@section('navView', 'active')

@section('content')
<div class="container pb-5 mb-5 pt-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-5">
                <img src="{{ asset('storage/' . $movie->cover_image) }}" alt="{{ $movie->title }}"
                    class="img-fluid h-100 w-100 object-fit-cover" style="object-fit: cover;">
            </div>
            <div class="col-lg-7 d-flex align-items-center">
                <div class="card-body p-5">
                    <h2 class="card-title mb-3">{{ $movie->title }}</h2>

                    <p class="mb-3">
                        <span class="fw-bold text-primary">Sinopsis:</span><br>
                        {{ $movie->synopsis }}
                    </p>

                    <p class="mb-3">
                        <span class="fw-bold text-primary">Aktor:</span><br>
                        {{ $movie->actors }}
                    </p>

                    <p class="mb-4">
                        <span class="fw-bold text-primary">Kategori:</span><br>
                        {{ optional($movie->categories)->category_name ?? '-' }}
                    </p>

                    <a href="/view" class="btn btn-outline-primary rounded-pill px-4">
                        <i class="bi bi-arrow-left"></i> Kembali ke Daftar Film
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

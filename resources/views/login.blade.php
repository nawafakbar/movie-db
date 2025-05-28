@extends('layouts.main')
@section('title', 'Login')
@section('navLogin', 'active')

@section('content')

<div class="row justify-content-center mt-4">
  <h1 class="text-center mt-5">Login</h1>
<form class="mt-3 mx-5 px-5" style="width: 40%" action="/login" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" 
           id="exampleInputEmail1" aria-describedby="emailHelp" name="email" 
           value="{{ old('email') }}">

    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" style="width: 125px;">Submit</button>
</form>
</div>
@endsection
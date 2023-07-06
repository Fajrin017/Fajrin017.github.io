@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

     @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

  <main class="form-signin text-center">
    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
  <form action="/login" method="post">
    @csrf
    <img class="mb-3" src="/img/maskot1.png" alt="" width="150" height="120">

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="email">Email</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
  </form>
  <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small> 
</main>
  </div>
</div>



@endsection
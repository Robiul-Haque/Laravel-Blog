@section('title', 'Login')
@extends('layouts.auth')
@section('content')
<div class="container mt-md-5">
    <div class="row mt-md-5 mt-sm-5">
        <div class="col-sm-2 col-md-3"></div>
        <div class="col-sm-8 col-md-6 rounded p-5" style="background: #F8F9FA">
          <div class="px-lg-2">
             <form class="px-5" action="{{ route('login') }}" method="POST">
                <h2>Login</h2>
                <hr>
                @csrf
                @if (\session()->has('loginErrorMessage'))
                  <p class="alert alert-danger">{{ \session()->get('loginErrorMessage') }}</p>
                @endif
                <div class="mb-3">
                  <label for="InputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="InputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">LOGIN</button>
              </form>
          </div>
        </div>
        <div class="col-sm-2 col-md-3"></div>
    </div>
</div>
@endsection
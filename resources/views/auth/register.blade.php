@section('title', 'Register')
@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-sm-2 col-md-3"></div>
        <div class="col-sm-8 col-md-6 rounded px-5 py-4" style="background: #F8F9FA">
          <div class="px-lg-2">
            <form class="px-md-5 px-5" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>Register</h2>
                <hr>
                <div class="mb-2">
                  <label for="InputNmae" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                  @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="InputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="InputPhoto" class="form-label">Photo</label>
                  <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" >
                  @error('photo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="InputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                  @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="InputPassword" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">REGISTER</button>
              </form>
          </div>
        </div>
        <div class="col-sm-2 col-md-3"></div>
    </div>
</div>
@endsection
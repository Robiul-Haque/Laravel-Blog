@section('title', 'Profile')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.profile.index') }}" class="active">Profile</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                      <h3 class="card-title">User Profile</h3>
                      <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Go Back To User List</a>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="container">
            <div class="row px-lg-5 px-md-5 py-lg-5 py-md-5">
              <div class="col-lg-4 col-md-4">
                <form action="{{ route('admin.profile.index') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-2">
                    <label for="InputName" class="form-label">User Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-2">
                    <label for="InputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-2">
                    <label for="InputImage" class="form-label">Image</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="">
                    @error('photo')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="mb-2">
                  <label for="InputDescription" class="form-label">Description</label>
                  <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" rows="7">{{ $user->description }}</textarea>
                  @error('description')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card-body text-center border rounded overflow-hidden">
                  <img class="rounded-circle" width="100" height="100" src="{{ asset('asset/uplode/user/'.$user->photo) }}" alt="{{ $user->name }}">
                    <p class="mt-2"><b>{{ $user->name }}</b></p>
                    <p>{{ $user->description }}</p>
                </div>
              </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update User</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
        </div>
        </div>
      </div>
    </div>
   </div>
@endsection
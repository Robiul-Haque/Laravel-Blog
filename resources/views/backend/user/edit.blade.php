@section('title', 'Edit')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}" class="text-dark">User</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.user.edit', $user->id) }}" class="active">Edit User</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                      <h3 class="card-title">Edit User</h3>
                      <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Go Back To User List</a>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-3"></div>
              <div class="col-lg-6 col-md-6 py-lg-4 px-lg-5 p-md-4 p-sm-1">
                <form action="{{ route('admin.user.edit', $user->id) }}" method="post">
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
                  <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label><small class="text-secondry float-right">If you want to update your password give your password</small>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Update User</button>
                </form>
              </div>
              <div class="col-lg-3 col-md-3"></div>
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
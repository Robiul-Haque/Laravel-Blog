@section('title', 'Create')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Tag</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}" class="text-dark">Tag List</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.tag.create') }}" class="active">Create Tag</a></li>
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
                      <h3 class="card-title">Create Tag</h3>
                      <a href="{{ route('admin.tag.index') }}" class="btn btn-primary">Go Back To Tag List</a>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-3"></div>
              <div class="col-lg-6 col-md-6 py-lg-4 px-lg-5 p-md-4 p-sm-1">
                <form action="{{ route('admin.tag.create') }}" method="post">
                  @csrf
                  <div class="mb-2">
                    <label for="InputName" class="form-label">Tag Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="InputDescription" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" rows="3" name="description"></textarea>
                    @error('description')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
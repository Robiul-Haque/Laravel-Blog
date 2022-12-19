@section('title', 'Create')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}" class="text-dark">Post</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.post.create') }}" class="active">Create Post</a></li>
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
                      <h3 class="card-title">Create Post</h3>
                      <a href="{{ route('admin.post.index') }}" class="btn btn-primary">Go Back To Post List</a>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 pt-lg-2 pr-lg-4 pl-lg-5">
                <form action="{{ route('admin.post.create') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-2">
                    <label for="InputName" class="form-label">Post Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-2">
                    <label for="SelectCategory" class="form-label">Category</label>
                    <select name="category" class="form-control custom-select @error('category') is-invalid @enderror">
                      @if ($categories->count() == '0')
                        <option>No Category Found</option>
                      @else
                        <option value="" selected>Select Category</option>
                        @foreach ($categories as $key => $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      @endif
                    </select>
                    @error('category')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div>
                    <label for="Checkbox" class="form-label">Choose Post Tag</label>
                      <div class="ml-4">
                        @foreach ($tags as $tag)
                          <input class="form-check-input" type="checkbox" name="tag[]" value="{{ $tag->id }}">
                          <label class="form-check-label mr-4" for="inlineCheckbox">{{ $tag->name }}</label>
                        @endforeach
                      </div>
                  </div>
                  <div class="mb-2">
                    <label for="InputFile" class="form-label">Image</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                    @error('photo')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 pt-lg-2 pr-lg-5 pl-lg-4">
                <div class="mb-3">
                  <label for="InputDescription" class="form-label">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" id="summernote" name="description">{{ old('description') }}</textarea>
                  @error('description')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="text-center mb-3"><button type="submit" class="btn btn-primary">Create Post</button></div>
          </form>
          </div>
        </div>
      </div>
        </div>
        </div>
      </div>
    </div>
   </div>
@endsection
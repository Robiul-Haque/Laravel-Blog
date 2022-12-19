@section('title', 'Edit')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}" class="text-dark">Post</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.post.edit', $post->id) }}" class="active">Edit Post</a></li>
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
                      <h3 class="card-title">Edit Post</h3>
                      <a href="{{ route('admin.post.index') }}" class="btn btn-primary">Go Back To Post List</a>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 pt-lg-3 pr-lg-4 pl-lg-5">
                <form action="{{ route('admin.post.edit', $post->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-2">
                    <label for="InputName" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}">
                    @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-2">
                    <label for="SelectCategory" class="form-label">Category</label>
                    <select name="category" class="form-control custom-select @error('category') is-invalid @enderror">
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    </select>
                    @error('category')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-2">
                    <label for="Checkbox" class="form-label d-block">Choose Post Tag</label>
                    <div class="ml-4">
                      @foreach ($tags as $tag)
                        <input class="form-check-input" type="checkbox" name="tag[]" value="{{ $tag->id }}" 
                        @if ($post->tag)
                            @foreach ($post->tag as $t)
                              @if ($tag->id == $t->id)
                                checked
                              @endif
                            @endforeach
                          @endif>
                        <label class="form-check-label mr-4" for="inlineCheckbox">{{ $tag->name }}.</label>
                      @endforeach
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="row">
                        <div class="col-8">
                            <label for="InputFile" class="form-label">Image</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                            @error('photo')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-4 text-right">
                            <div style="max-width: 100px;max-height: 100px;overflow: hidden; margin-left:auto">
                                <img src="{{ asset('asset/uplode/post/'. $post->photo) }}" alt="{{ $post->title }}" class="img-fluid rounded mt-3">
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 pt-lg-3 pr-lg-5 pl-lg-4">
                <div class="mb-2">
                  <label for="InputDescription" class="form-label">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" id="summernote" name="description">{{ $post->description }}</textarea>
                  @error('description')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="text-center mb-3 mt-2"><button type="submit" class="btn btn-primary">Update Post</button></div>
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
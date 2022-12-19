@section('title', 'Create')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item text-dark"><a href="{{ route('admin.setting.index') }}" class="text-dark">Setting</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('admin.setting.create') }}">Create Site Information</a></li>
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
                      <h3 class="card-title">Setting</h3>
                      <a href="{{ route('admin.setting.index') }}" class="btn btn-primary">Go Back To Setting</a>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="container">
            <div class="row">
              <div class="col-md-6 pl-md-5 pr-md-3 pt-md-4">
                <form action="{{ route('admin.setting.create') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-2">
                    <label for="InputSiteName" class="form-label">Site Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="e.g">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="mb-2 ">
                      <label for="InputFacebook" class="form-label">Facebook</label>
                      <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" placeholder="https://">
                      @error('facebook')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-2">
                      <label for="InputTwitter" class="form-label">Twitter</label>
                      <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="https://">
                      @error('twitter')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="mb-2">
                      <label for="InputInstagram" class="form-label">Instagram</label>
                      <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="https://">
                      @error('instagram')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-2">
                      <label for="InputCopyright" class="form-label">Copyright</label>
                      <input type="text" class="form-control @error('copyright') is-invalid @enderror" name="copyright" placeholder="e.g">
                      @error('copyright')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
              </div>
                <div class="col-md-6 pr-md-5 pl-md-3 pt-md-4">
                  <div class="mb-2">
                    <div class="row">
                          <div class="col-8">
                            <label for="InputFile" class="form-label">Site Logo</label>
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                            @error('logo')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                      </div>
                  </div>
                  <div class="mb-3">
                    <label for="InputSiteDescription" class="form-label">Site Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" rows="4" name="description"></textarea>
                    @error('description')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                  <div class="text-center mb-4"><button type="submit" class="btn btn-primary">Submit</button></div>
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
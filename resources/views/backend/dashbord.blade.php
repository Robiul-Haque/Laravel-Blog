@section('title', 'Dashbord')
@extends('layouts.backend')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-md-2">Dashbord</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid mb-md-3">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{ route('admin.post.index') }}">
              <div class="small-box bg-info text-center shadow">
                <div class="inner">
                  <h3>{{ $postCount ? $postCount : '0' }}</h3>
                  <h4 class="fw-bold"><img class="mr-md-3" src="https://img.icons8.com/material-outlined/24/FFFFFF/mailbox-opened-flag-down.png" width="45px">Post</h4>
                  <hr>
                </div>
              </div>
            </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{ route('admin.category.index') }}">
              <div class="small-box bg-success text-center shadow">
                <div class="inner">
                  <h3>{{ $categoryCount ? $categoryCount : '0' }}</h3>
                  <h4 class="fw-bold"><img class="mr-md-3" src="https://img.icons8.com/external-gradak-royyan-wijaya/24/FFFFFF/external-category-gradak-interface-gradak-royyan-wijaya.png" width="45px">Category</h4>
                  <hr>
                </div>
              </div>
            </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{ route('admin.tag.index') }}">
              <div class="small-box bg-warning text-center shadow">
                <div class="inner">
                  <h3 class="text-white">{{ $tagCount ? $tagCount : '0' }}</h3>
                  <h4 class="fw-bold text-white"><img class="mr-md-2 text-white" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/FFFFFF/external-tag-interface-kiranshastry-lineal-kiranshastry-1.png" width="45px">Tag</h4>
                  <hr class="text-white">
                </div>
              </div>
            </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="{{ route('admin.user.index') }}">
              <div class="small-box bg-danger text-center shadow">
                <div class="inner">
                  <h3>{{ $userCount ? $userCount : '0' }}</h3>
                  <h4 class="fw-bold"><img class="mr-md-2 text-white" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/FFFFFF/external-user-user-tanah-basah-basic-outline-tanah-basah-7.png" width="45px"> User</h4>
                  <hr>
                </div>
              </div>
            </a>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                      <h3 class="card-title">Post List</h3>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped table-responsive-sm">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Author</th>
                <th>Published</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @if ($posts->count())
                    @foreach ($posts as $key => $post)
                        <tr>
                            <td colspan="1">{{ $key + 1 }}</td>
                            <td colspan="1">
                                <div style="max-width:70px; max-height:70px; overflow:hidden;">
                                    <img class="img-fluid rounded" src="{{ asset('asset/uplode/post/'.$post->photo) }}" alt="{{ $post->title }}">
                                </div>
                            </td>
                            <td colspan="1">{{ $post->title }}</td>
                            <td colspan="1">{{ $post->category->name }}</td>
                            <td colspan="1">
                              @foreach ($post->tag as $tag)
                                <span class="badge badge-primary">{{ $tag->name }}</span>
                              @endforeach
                            </td>
                            <td colspan="1" style="text-transform: capitalize;">{{ $post->user->name }}</td>
                            <td colspan="1">{{ $post->published_at->format('d M, y') }}</td>
                            <td colspan="1" class="text-center">
                              <a class="btn btn-sm btn-success" href="{{ route('admin.post.view', $post->id) }}"><img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/visible--v1.png" style="width: 18"/></a>
                              <a class="btn btn-sm btn-primary m-1" href="{{ route('admin.post.edit', $post->id) }}"><img src="https://img.icons8.com/glyph-neue/64/FFFFFF/edit.png" style="width: 18"/></a>
                              <a class="btn btn-sm btn-danger" href="{{ route('admin.post.delete', $post->id) }}"><img src="https://img.icons8.com/sf-black-filled/64/FFFFFF/trash.png" style="width: 18"/></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8"><h4 class="text-center">No post found</h4></td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
        @if ($posts->hasPages())
          <div class="pagination-wrapper">
            {{ $posts->links() }}
          </div>
        @endif
        </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
@endsection

{{-- <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Category</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}">Home</a></li>
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
                  <h3 class="card-title">Category List</h3>
                  <a href="{{ route('admin.createCategory') }}" class="btn btn-primary">Create Category</a>
                </div>
              </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Post Count</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Update software</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-danger">55%</span></td>
            <td></td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Clean database</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar bg-warning" style="width: 70%"></div>
              </div>
            </td>
            <td><span class="badge bg-warning">70%</span></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    </div>
    </div>
  </div>
</div> --}}
@section('title', 'Post')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}" class="active">Post</a></li>
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
                      <h3 class="card-title">Post List</h3>
                      <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Create Post</a>
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
                            <td colspan="1" class="text-center">
                              <a class="btn btn-sm btn-success" href="{{ route('admin.post.view', $post->id) }}"><img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/visible--v1.png" style="width: 18"/></a>
                              <a class="btn btn-sm btn-primary m-1" href="{{ route('admin.post.edit', $post->id) }}"><img src="https://img.icons8.com/glyph-neue/64/FFFFFF/edit.png" style="width: 18"/></a>
                              <a class="btn btn-sm btn-danger" href="{{ route('admin.post.delete', $post->id) }}"><img src="https://img.icons8.com/sf-black-filled/64/FFFFFF/trash.png" style="width: 18"/></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7"><h4 class="text-center">No post found</h4></td>
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
@endsection
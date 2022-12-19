@section('title', 'Tag')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tag List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}" class="active">Tag</a></li>
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
                      <h3 class="card-title">Tag List</h3>
                      <a href="{{ route('admin.tag.create') }}" class="btn btn-primary">Create Tag</a>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped table-responsive-sm">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @if ($tags->count())
                    @foreach ($tags as $key => $tag)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->slug }}</td>
                            <td>{{ $tag->description }}</td>
                            <td class="text-center">
                              <a class="btn btn-sm btn-primary m-1" href="{{ route('admin.tag.edit', $tag->id) }}"><img src="https://img.icons8.com/glyph-neue/64/FFFFFF/edit.png" style="width: 18"/></a>
                              <a class="btn btn-sm btn-danger" href="{{ route('admin.tag.delete', $tag->id) }}"><img src="https://img.icons8.com/sf-black-filled/64/FFFFFF/trash.png" style="width: 20"/></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5"><h4 class="text-center">No tag found</h4></td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
        @if ($tags->hasPages())
          <div class="pagination-wrapper">
            {{ $tags->links() }}
          </div>
        @endif
        </div>
        </div>
      </div>
    </div>
   </div>
@endsection
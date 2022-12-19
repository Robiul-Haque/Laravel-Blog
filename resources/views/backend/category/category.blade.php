@section('title', 'Category')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}" class="active">Category</a></li>
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
                      <h3 class="card-title">Category List</h3>
                      <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Create Category</a>
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
                  @if ($categories->count())
                      @foreach ($categories as $key => $category)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $category->name }}</td>
                          <td>{{ $category->slug }}</td>
                          <td>{{ $category->description }}</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-primary m-1" href="{{ route('admin.category.edit', $category->id) }}"><img src="https://img.icons8.com/glyph-neue/64/FFFFFF/edit.png" style="width: 18"/></a>
                            <a class="btn btn-sm btn-danger" href="{{ route('admin.category.delete', $category->id) }}"><img src="https://img.icons8.com/sf-black-filled/64/FFFFFF/trash.png" style="width: 20"/></a>
                          </td>
                        </tr>
                      @endforeach
                  @else
                      <tr>
                          <td colspan="5"><h4 class="text-center">No category found</h4></td>
                      </tr>
                  @endif
            </tbody>
          </table>
        </div>
      </div>
        @if ($categories->hasPages())
          <div class="pagination-wrapper">
            {{ $categories->links() }}
          </div>
        @endif
        </div>
        </div>
      </div>
    </div>
   </div>
@endsection
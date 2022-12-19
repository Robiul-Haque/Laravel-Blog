@section('title', 'User')
@extends('layouts.backend')
@section('content')
   <div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}" class="active">User </a></li>
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
                      <h3 class="card-title">User List</h3>
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped table-responsive-sm">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @if ($users->count())
                    @foreach ($users as $key => $user)
                        <tr>
                            <td colspan="1">{{ $key + 1 }}</td>
                            <td colspan="1">
                                <div style="max-width:70px; max-height:70px; overflow:hidden;">
                                    <img class="img-fluid rounded" src="{{ asset('asset/uplode/user/'.$user->photo) }}" alt="{{ $user->name }}">
                                </div>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td colspan="1" class="text-center">
                                <a class="btn btn-sm btn-primary m-1" href="{{ route('admin.user.edit', $user->id) }}"><img src="https://img.icons8.com/glyph-neue/64/FFFFFF/edit.png" style="width: 18"/></a>
                                {{-- <a class="btn btn-sm btn-danger" href="#"><img src="https://img.icons8.com/sf-black-filled/64/FFFFFF/trash.png" style="width: 18"/></a> --}}
                              </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5"><h4 class="text-center">No User found</h4></td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
        @if ($users->hasPages())
          <div class="pagination-wrapper">
            {{ $users->links() }}
          </div>
        @endif
        </div>
        </div>
      </div>
    </div>
   </div>
@endsection
@section('title', 'Setting')
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
              <li class="breadcrumb-item"><a href="{{ route('admin.setting.index') }}" class="active">Setting</a></li>
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
                    </div>
                  </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card mt-3">
                  <div class="card-header">
                      <div class="d-flex justify-content-between align-items-center">
                          {{-- <a class="btn btn-primary m-1" href="{{ route('admin.setting.edit') }}">Edit <img src="https://img.icons8.com/glyph-neue/64/FFFFFF/edit.png" style="width: 25; padding-left: 6px"/></a> --}}
                          @if ($siteInfo)
                            <a class="btn btn-danger m-1" href="{{ route('admin.setting.delete', $siteInfo->id) }}">Delete <img src="https://img.icons8.com/sf-black-filled/64/FFFFFF/trash.png" style="width: 25; padding-left: 6px"/></a>
                          @else
                            <a href="{{ route('admin.setting.create') }}" class="btn btn-primary">Create Site Information</a>
                          @endif
                      </div>
                    </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="width: 100px" class="text-center">Site logo</th>
                        <td><img src="{{ asset('asset/uplode/logo/'. $siteInfo?->logo) }}" alt="site-logo" style="max-height: 100px;max-width: 100px;overflow:hidden;"></td>
                    </tr>
                    <tr>
                        <th style="width: 100px" class="text-center">Site name</th>
                        <td>{{ $siteInfo?->name}}</td>
                    </tr>
                    <tr>
                        <th style="width: 100px" class="text-center">Copyright</th>
                        <td>{{ $siteInfo?->copyright}}</td>
                    </tr>
                    <tr>
                        <th style="width: 100px" class="text-center">Facebook</th>
                        <td>{{ $siteInfo?->facebook}}</td>
                    </tr>
                    <tr>
                        <th style="width: 100px" class="text-center">Twitter</th>
                        <td style="text-transform: capitalize;">{{ $siteInfo?->twitter}}</td>
                    </tr>
                    <tr>
                        <th style="width: 100px" class="text-center">Instagram</th>
                        <td style="">{{ $siteInfo?->instagram}}</td>
                    </tr>
                    <tr>
                      <th style="width: 100px" class="text-center">Site Description</th>
                      <td style="text-transform: capitalize;">{{ $siteInfo?->description}}</td>
                  </tr>
                </tbody>
            </table>
        </div>
        </div>
          </div>
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
@section('title', 'View')
@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0">Post View</h1>
                </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
             <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}" class="text-dark">Post</a></li>
             <li class="breadcrumb-item active"><a href="{{ route('admin.post.view', $post->id) }}" class="active">Post View</a></li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Post View</h3>
                        <a href="{{ route('admin.post.index') }}" class="btn btn-primary">Go Back To Post List</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 100px" class="text-center">Image</th>
                                <td><img src="{{ asset('asset/uplode/post/'. $post->photo) }}" alt="{{ $post->title }}" style="max-height: 100px;max-width: 100px;overflow:hidden;"></td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Title</th>
                                <td>{{ $post->title }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Category</th>
                                <td>{{ $post->category->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Tags</th>
                                <td>
                                    @foreach ($post->tag as $tag)
                                      <span class="badge badge-primary">{{ $tag->name }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Author</th>
                                <td style="text-transform: capitalize;">{{ $post->user->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Description</th>
                                <td style="">{!! $post->description !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
@endsection
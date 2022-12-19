@section('title', 'Message')
@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0">Message</h1>
                </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
             <li class="breadcrumb-item active"><a href="{{ route('admin.message.index') }}" class="active">Message</a></li>
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
                        <h3 class="card-title">Message</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($contacts->count())
                                @foreach ($contacts as $key => $contact)
                                    <tr>
                                        <td colspan="1">{{ $key + 1 }}</td>
                                        <td colspan="1">{{ $contact->name }}</td>
                                        <td colspan="1">{{ $contact->email }}</td>
                                        <td colspan="1">{{ $contact->subject }}</td>
                                        <td colspan="1">{{ $contact->message }}</td>
                                        <td colspan="1" class="text-center">
                                          <a class="btn btn-sm btn-success" href="{{ route('admin.message.view', $contact->id) }}"><img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/visible--v1.png" style="width: 18"/></a>
                                          <a class="btn btn-sm btn-danger" href="{{ route('admin.message.delete', $contact->id) }}"><img src="https://img.icons8.com/sf-black-filled/64/FFFFFF/trash.png" style="width: 18"/></a>
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
        </div>
    </div>
   </div>
</div>
@endsection
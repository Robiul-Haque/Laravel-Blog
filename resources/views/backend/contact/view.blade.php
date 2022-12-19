@section('title', 'View')
@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                    <h1 class="m-0">Message View</h1>
                </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{ route('admin.dashbord') }}" class="text-dark">Dashboard</a></li>
             <li class="breadcrumb-item"><a href="{{ route('admin.message.index') }}" class="text-dark">Message</a></li>
             <li class="breadcrumb-item active"><a href="{{ route('admin.message.view', $contact->id) }}" class="active">Message View</a></li>
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
                        <h3 class="card-title">Message View</h3>
                        <a href="{{ route('admin.message.index') }}" class="btn btn-primary">Go Back To Message List</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 100px" class="text-center">Name</th>
                                <td>{{ $contact->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Email</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Subject</th>
                                <td>
                                    {{ $contact->subject }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 100px" class="text-center">Message</th>
                                <td style="text-transform: capitalize;">{{ $contact->message }}</td>
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
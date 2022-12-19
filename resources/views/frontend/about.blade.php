@section('title','About')
@extends('layouts.frontend')
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url({{ asset('asset/frontend/images/img_4.jpg') }})">
        <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
                <h1 class="">About Us</h1>
                <p class="lead mb-4 text-white"></p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container m-lg-5 m-md-5 text-center">
        <div class="row">
            <div class="col-md-6 order-md-1">
            <img src="{{ asset('asset/uplode/user/'.$userInfo->photo) }}" alt="Image" class="img-fluid rounded-circle" style="width: 120px; height: 120px;">
            </div>
            <div class="col-md-6 mr-auto order-md-2">
                <h2>{{ $userInfo->name }}</h2>
                <p>{{ $userInfo->description }}</p>
            </div>
        </div>
        </div>
    </div>
@endsection
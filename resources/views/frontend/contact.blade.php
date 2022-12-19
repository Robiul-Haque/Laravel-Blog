@section('title','Contact')
@extends('layouts.frontend')
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url({{ asset('asset/frontend/images/img_4.jpg') }})">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <h1 class="">Contact Us</h1>
              <p class="lead mb-4 text-white"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <form action="{{ route('contact') }}" method="post" class="p-5 bg-white rounded-3">
              @csrf
              {{-- @include('includes.errors')
              @if(Session::has('message-send'))
                <div class="alert alert-success">{{ Session::get('message-send') }}</div>
              @endif --}}
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black mb-md-2" for="fname">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
              </div>
              <div class="row form-group mt-2">
                <div class="col-md-12">
                  <label class="text-black mb-md-2" for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
              </div>
              <div class="row form-group mt-2">
                <div class="col-md-12">
                  <label class="text-black mb-md-2" for="subject">Subject</label>
                  <input type="subject" class="form-control @error('subject') is-invalid @enderror" name="subject">
                    @error('subject')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
              </div>
              <div class="row form-group mt-2">
                <div class="col-md-12">
                  <label class="text-black mb-md-2" for="message">Message</label>
                  <textarea name="message" rows="3" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>
              <div class="row form-group mt-3">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div class="p-5 mb-3 bg-white rounded-3">
              <p class="mb-0 font-weight-bold"><span class="icon-envelope p-2"></span> {{ $setting->email }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
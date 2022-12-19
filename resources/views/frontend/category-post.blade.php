@section('title','Category Post')
@extends('layouts.frontend')
@section('content')
  <div class="site-section bg-light">
    <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12">
              <h2>Recent Posts</h2>
            </div>
          </div>
          <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 mb-4">
              <div class="entry2">
                <a href="#"><img  src="{{ asset('asset/uplode/post/'.$post->photo) }}" alt="Image" class=" rounded" style="width: 100%; height: 17vw;"></a>
                <div class="excerpt">
                <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name }}</span>

                <h2><a href="{{ route('post', ['slug' => $post->slug]) }}" class="text-decoration-none">{{ $post->title }}</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0"><img src="{{ asset('asset/uplode/user/'.$post->user->photo) }}" alt="Image" class="img-fluid"></figure>
                  <span class="">By <a href="#">{{ $post->user->name }}</a></span>
                  <span>&nbsp;-&nbsp; {{ $post->published_at->format('M d, Y') }}</span>
                </div>
                  <p>{!!  substr(strip_tags($post->description), 0, 100) !!}</p>
                  <p><a href="{{ route('post', ['slug' => $post->slug]) }}" class="text-decoration-none">Read More</a></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="row text-center pt-5 border-top">
            <div class="col-md-12">
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
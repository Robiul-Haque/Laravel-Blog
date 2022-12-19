@section('title','Home')
@extends('layouts.frontend')
@section('content')
    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2">
          <div class="col-md-4">
            @if (count($firstPosts) == 0)
              <h5>No post found</h5>
            @else
              @foreach ($firstPosts as $firstPost)
              <a href="{{ route('post', ['slug' => $firstPost->slug]) }}" class="h-entry mb-30 v-height gradient" style="background-image: url({{ asset('asset/uplode/post/'.$firstPost->photo) }}">
                <div class="text">
                  <h2>{{ $firstPost->title }}</h2>
                  <span class="date">{{ $firstPost->published_at->format('M d, Y') }}</span>
                </div>
              </a>
            @endforeach
            @endif
          </div>

          <div class="col-md-4">
            @if ($middlePost)
              <a href="{{ route('post', ['slug' => $middlePost->slug]) }}" class="h-entry img-5 h-100 gradient" style="background-image: url({{ asset('asset/uplode/post/'.$middlePost->photo) }})">
                <div class="text">
                  {{-- <div class="post-categories mb-3">
                    <span class="post-category bg-danger">Travel</span>
                    <span class="post-category bg-primary">Food</span>
                  </div> --}}
                  <h2>{{ $middlePost->title }}</h2>
                  <span class="date">{{ $middlePost->published_at->format('M d, Y') }}</span>
                </div>
              </a>
            @else
            <a href="#" class="h-entry img-5 h-100 gradient">
              <div class="text">
                <h2>No post found</h2>
                <span class="date"></span>
              </div>
            </a>
            @endif
          </div>
          
          <div class="col-md-4">
            @foreach ($lastPosts as $lastPost)
                <a href="{{ route('post', ['slug' => $lastPost->slug]) }}" class="h-entry mb-30 v-height gradient" style="background-image: url({{ asset('asset/uplode/post/'.$lastPost->photo) }}">
                <div class="text">
                  <h2>{{ $lastPost->title }}</h2>
                  <span class="date">{{ $lastPost->published_at->format('M d, Y') }}</span>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>
        <div class="row">
          @foreach ($recentPosts as $post)
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="{{ route('post', ['slug' => $post->slug]) }}"><img  src="{{ asset('asset/uplode/post/'.$post->photo) }}" alt="Image" class=" rounded" style="width: 100%; height: 17vw;"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name }}</span>

              <h2><a href="{{ route('post', ['slug' => $post->slug]) }}" class="text-decoration-none">{{ $post->title }}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0"><img src="{{ asset('asset/uplode/user/'.$post->user->photo) }}" alt="Image" class="img-fluid"></figure>
                <span class="">By <a href="{{ route('about') }}">{{ $post->user->name }}</a></span>
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
            @if ($recentPosts->hasPages())
              <div class="pagination-wrapper">
                {{ $recentPosts->links() }}
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout">
          <div class="col-md-5 order-md-2">
            @foreach ($bottomPosts_2 as $bottomPost2)
              <a href="{{ route('post', ['slug' => $bottomPost2->slug]) }}" class="hentry img-1 h-100 gradient" style="background-image: url({{ asset('asset/uplode/post/'.$bottomPost2->photo) }})">
                <span class="post-category text-white bg-danger">{{ $bottomPost2->category->name }}</span>
                <div class="text">
                  <h2>{{ $bottomPost2->title }}</h2>
                  <span>{{ $bottomPost2->published_at->format('M d, Y') }}</span>
                </div>
              </a>
            @endforeach
          </div>

          <div class="col-md-7">
            @foreach ($bottomPost_1 as $bottomPost1)
              <a href="{{ route('post', ['slug' => $bottomPost1->slug]) }}" class="hentry img-2 v-height mb30 gradient" style="background-image: url({{ asset('asset/uplode/post/'.$bottomPost1->photo) }})">
                <span class="post-category text-white bg-success">{{ $bottomPost1->category->name }}</span>
                <div class="text text-sm">
                  <h2>{{ $bottomPost1->title }}</h2>
                  <span>{{ $bottomPost1->published_at->format('M d, Y') }}</span>
                </div>
              </a>
            @endforeach

            <div class="two-col d-block d-md-flex">
              @foreach ($bottomPosts_3 as $bottomPosts3)
                <a href="{{ route('post', ['slug' => $bottomPosts3->slug]) }}" class="hentry v-height img-2 gradient me-4" style="background-image: url({{ asset('asset/uplode/post/'.$bottomPosts3->photo) }})">
                  <span class="post-category text-white bg-primary">{{ $bottomPosts3->category->name }}</span>
                  <div class="text text-sm">
                    <h2>{{ $bottomPosts3->title }}</h2>
                    <span>{{ $bottomPosts3->published_at->format('M d, Y') }}</span>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

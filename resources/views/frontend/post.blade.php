@section('title','Post')
@extends('layouts.frontend')
@section('content')
<div class="site-cover site-cover-sm same-height single-page" style="background-image: url({{ asset('asset/uplode/post/'.$singlePost->photo) }})">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="post-entry text-center">
            <span class="post-category text-white bg-success mb-3">{{ $singlePost->category->name }}</span>
            <h1 class="mb-4">{{ $singlePost->title }}</h1>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="{{ asset('asset/uplode/user/'.$singlePost->user->photo) }}" alt="Image" class="img-fluid"></figure>
              <span class="d-inline-block mt-1"><b>By {{ $singlePost->user->name }}</b></span>
              <span><b>&nbsp;-&nbsp; {{ $singlePost->published_at->format('M d, Y') }}</b></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="site-section py-lg">
    <div class="container">
      <div class="row blog-entries element-animate">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="post-content-body">
            <p>{!! $singlePost->description !!}</p>
          </div>
          <div class="pt-5 d-flex">
            <p><b>Categories:</b> {{$singlePost->category->name}}</p>
            <p class="mx-lg-3 mx-md-3"><b>Tags:</b>
              @if ($singlePost->tag->count() > 0)
                  @foreach ($singlePost->tag as $postTags)
                    <span>{{ $postTags->name }}</span>
                  @endforeach
              @endif
            </p>
          </div>
        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>

          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="{{ asset('asset/uplode/user/'. $singlePost->user->photo) }}" alt="{{ $singlePost->user->name }}" class="img-fluid mb-4 rounded-circle" width="80" height="80">
              <div class="bio-body">
                <h2>{{ $singlePost->user->name }}</h2>
                <p class="mb-4">{{ $singlePost->user->description }}</p>
              </div>
            </div>
          </div>

          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Popular Posts</h3>
            <div class="post-entry-sidebar">
              <ul>
                @foreach ($recentPosts as $recentPost)
                  <li>
                    <a href="{{ route('post', ['slug' => $recentPost->slug]) }}" class="text-decoration-none">
                      <img src="{{ asset('asset/uplode/post/'. $recentPost->photo) }}" alt="{{ $recentPost->title }}" class="me-4">
                      <div class="text">
                        <h4>{{ $recentPost->title }}</h4>
                        <div class="post-meta">
                          <span class="mr-2">{{ $recentPost->published_at->format('M d, Y') }}</span>
                        </div>
                      </div>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Categories</h3>
            <ul class="categories">
              @foreach ($categories as $category)
                <li><a href="{{ route('postByCategory', $category->id) }}" class="text-decoration-none">{{ $category->name }} <span>(12)</span></a></li>
              @endforeach
            </ul>
          </div>

          <!-- END sidebar-box -->
        <!-- END sidebar -->

      </div>
    </div>
  </section>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <h2>More Related Posts</h2>
        </div>
      </div>
      <div class="row align-items-stretch retro-layout">
        <div class="col-md-5 order-md-2">
          @foreach ($bottomPosts_2 as $bottomPost2)
            <a href="{{ route('post', ['slug' => $bottomPost2->slug]) }}" class="hentry img-1 h-100 gradient" style="background-image: url({{ asset('asset/uplode/post/'. $bottomPost2->photo) }})">
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
            <a href="{{ route('post', ['slug' => $bottomPost1->slug]) }}" class="hentry img-2 v-height mb30 gradient" style="background-image: url({{ asset('asset/uplode/post/'. $bottomPost1->photo) }})">
              <span class="post-category text-white bg-success">{{ $bottomPost1->category->name }}</span>
              <div class="text text-sm">
                <h2>{{ $bottomPost1->title }}</h2>
                <span>{{ $bottomPost1->published_at->format('M d, Y') }}</span>
              </div>
            </a>
          @endforeach
          <div class="two-col d-block d-md-flex">
            @foreach ($bottomPosts_3 as $bottomPosts3)
              <a href="{{ route('post', ['slug' => $bottomPosts3->slug]) }}" class="hentry v-height img-2 gradient me-4" style="background-image: url({{ asset('asset/uplode/post/'. $bottomPosts3->photo) }})">
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
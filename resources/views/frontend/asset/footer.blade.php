<div class="site-footer p-5">
      <div class="container">
        <div class="row mb-3 text-center">
          <div class="col-md-3">
            @if ($setting?->logo)
              <img src="{{ asset('asset/uplode/logo/'.$setting->logo) }}" alt="Laravel logo" width="140" class="rounded">
            @endif
          </div>
          <div class="col-md-6 ml-auto">
            <h2 class="footer-heading mb-4">Category</h2>
            <ul class="list-unstyled float-left d-flex flex-wrap">
              @foreach ($categories as $category)
                <li class="mx-2"><a href="{{ route('postByCategory', $category->id) }}" class="text-decoration-none">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-3">
            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                  <a href="{{ $setting->facebook ?? '' }}" target="_blank" class="text-decoration-none"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                  <a href="{{ $setting->twitter ?? '' }}" target="_blank" class="text-decoration-none"><span class="icon-twitter p-2"></span></a>
                  <a href="{{ $setting->instagram ?? '' }}" target="_blank" class="text-decoration-none"><span class="icon-instagram p-1"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>{{ $setting?->description }}</p>
            <p>{{ $setting->copyright ?? 'Copyright © 2022 All rights reserved | Robiul Haque' }}</p>
          </div>
        </div>
      </div>
</div>
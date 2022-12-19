<header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-4 site-logo">
              <a href="{{ route('home') }}" class="text-black h2 pt-4 fw-bold text-decoration-none">{{ $setting->name ?? '' }}</a>
          </div>
          <div class="col-8 text-right">
            <nav class="site-navigation float-end" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                @if (Auth::check())
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                @else
                  <li><a href="{{ route('login') }}">Login</a></li>
                  {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                @endif
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>
      </div>
</header>
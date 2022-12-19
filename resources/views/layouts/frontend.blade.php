<!DOCTYPE html>
<html lang="en">
  <head>
    <title> @yield('title') | {{ $setting->name ?? '' }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('asset/uplode/logo/'. $setting?->logo) }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/frontend/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Toster css cdn link --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  </head>
  <body>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    @include('frontend.asset.header')
    @yield('content')
    @include('frontend.asset.footer')

  </div>
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
  <script src="{{ asset('asset/frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/aos.js') }}"></script>
  <script src="{{ asset('asset/frontend/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
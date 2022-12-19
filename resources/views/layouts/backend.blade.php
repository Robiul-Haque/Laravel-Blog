<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @yield('title') | {{ $setting->name ?? '' }} </title>
  <link rel="shortcut icon" href="{{ asset('asset/uplode/logo/'. $setting?->logo) }}" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  {{-- Bootstrap 5 css cdn link --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('asset/backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('asset/backend/css/adminlte.min.css') }}">
  {{-- Toster css cdn link --}}
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <!-- summernote css-->
  {{-- <link href="{{ asset('asset/backend/css/summernote-bs5.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    @include('backend.asset.header')
    @include('backend.asset.left_navbar')
    @yield('content')
    @include('backend.asset.right_navbar')
    @include('backend.asset.footer')

  </div>
  <!-- REQUIRED SCRIPTS -->
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
  <!-- jQuery -->
  <script src="{{ asset('asset/backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('asset/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- bootstrap 5 js cdn link --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('asset/backend/js/adminlte.min.js') }}"></script>
  <!-- summernote js-->
  <script src="{{ asset('asset/backend/js/summernote-bs5.js') }}"></script>
  <script>
    $('#summernote').summernote({
      placeholder: 'Description...',
      tabsize: 2,
      height: 130,
    });
  </script>
</body>
</html>
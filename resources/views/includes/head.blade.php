<!doctype html>
<html lang="en">
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    
      <title>{{ config('app.name', 'Laravel') }}</title>
    
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      @yield('main-js')
    
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <!-- Styles -->
      {{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> --}}
      <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
      @yield('header-footer')
      @yield('indeksLogo')
    
      <script>
        const user_id = {{ Auth::user() ? Auth::user()->id : -1 }};
      </script>
  </head>
  <body>
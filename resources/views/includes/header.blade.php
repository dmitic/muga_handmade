<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @yield('main-js')

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/header-footer.css">

  <script>
    const user_id = {{ Auth::user() ? Auth::user()->id : -1 }};
  </script>
  <style>
      
      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }
      body *{
        margin: 0;
        padding: 0;   
        box-sizing: border-box;
      }
      a {
        text-decoration: none;
      }
      ol, ul, li {
        list-style-type: none;
      }
      
      .pozadina {
        background-image: url("photos/pozadina2.jpg");
        height: 100%; 

        box-shadow: inset 0px 0px 30px 5px rgba(126, 112, 105, 0.623), inset 0px 0px 30px 5px rgba(126, 112, 105, 0.623);

}
      #logo2{
        border-radius: 50%;
        opacity: 0.8;
        /* box-shadow: 0px 30px 49px 20px rgba(0,0,0,0.66); */
        /* box-shadow: 0px 30px 49px 20px rgb(126, 112, 105);
        -webkit-box-shadow: 0px 30px 49px 20px rgb(126, 112, 105);
        -moz-box-shadow: 0px 30px 49px 20px rgb(126, 112, 105); */
      }
      .logo{
          margin: 0 auto;
          width:auto;
      }
      .kolekcija{
        height: 200px;
        width: 200px;
        width: 200px;
      }
      .font-color{
          color:gray !important;
      }

      .header{
        justify-content: center;
        display: flex;
        justify-content: center;
        color:gray !important;
        box-shadow: inset 0px 0px 30px 5px rgba(126, 112, 105, 0.623), inset 0px 0px 30px 5px rgba(126, 112, 105, 0.623);
        background-color: rgba(192, 192, 192, 0.589);
       


      }
      .header ul li, .header ul, .header .logo,.header .header-cell {
          display: inline-block;
      }
      ul{

      }
      .header #logo2{
          height: 150px; width: auto;
      }
      .header .header-cell{
        width:400px;
        text-align: center;
        line-height: 120px;
        font-size: 1.2em; 

      }
      .header-cell a, .footer a{
        color:rgb(82, 79, 79) !important;
        }
        li a:hover{
            text-decoration: none;
            font-weight: bold;
            transition:all 0.3s ease;
            }
      
    </style>
</head>


@extends('layouts.app')

@section('korpa')
  <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/pages_kol.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@endsection

{{-- @section('pocetna-link')
  <li class="nav-item nav-cell ">
    <a class="nav-link font-color" href="{{ url('/') }}#start-section">Početna&nbspstrana</a>
  </li>
@endsection --}}

@section('content')
  <div class="d-flex justify-content-center">
    <script>
      document.addEventListener('DOMContentLoaded', ()=>{
          korpa.prikaziKorpu().length !== 0 ? korpa.napraviTabelu() : korpa.nePostoji();
        });
    </script>
    <div class="container-fluid container-korpa">
      <div id="proizvodi"></div>
    </div>
@endsection
@extends('layouts.app')

@section('pagesCss')
  <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/pages.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
@endsection

{{-- @section('pocetna-link')
  <li class="nav-item nav-cell ">
    <a class="nav-link font-color" href="{{ url('/') }}#start-section">Početna&nbspstrana</a>
  </li>
@endsection --}}

@section('content')
<div class="layer fontinit_p">
    <h1 class="h1">POVERLJIVOST PODATAKA</h1>
    <p>U ime MUGA Handmade Shoes obavezujemo se da ćemo čuvati privatnost svih naših kupaca. </p>
    <p>Prikupljamo samo neophodne, osnovne podatke o kupcima/ korisnicima i podatke neophodne za poslovanje i informisanje korisnika u skladu sa dobrim poslovnim običajima i u cilju pružanja kvalitetne usluge.</p>
    <p>Dajemo kupcima mogućnost izbora uključujući mogućnost odluke da li žele ili ne da se izbrišu sa mailing lista koje se koriste za marketinške kampanje.</p>
    <p>Svi podaci o korisnicima/kupcima se strogo čuvaju i dostupni su samo zaposlenima kojima su ti podaci nužni za obavljanje posla.</p>
    <p>Svi zaposleni MUGA Handmade Shoes odgovorni su za poštovanje načela zaštite privatnosti.</p>
  </div>
@endsection
@extends('layouts.app')

@section('pagesCss')
<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages.css') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
@endsection

<!-- @section('pocetna-link')
  <li class="nav-item nav-cell ">
    <a class="nav-link font-color" href="{{ url('/') }}#start-section">Početna&nbspstrana</a>
  </li>
@endsection -->

@section('content')
<div class="layer">
  <h1 class="h1">Dužina gazišta</h1>
  <p>Da li vam se desilo da kupujete cipele i da zatražite da probate broj koji inače nosite, a da su vam cipele male
    ili čak velike!? Šta ako pronađete željenu obuću online!? Kako je kupiti ako ne možete da je probate pre toga?
    Čini se da je razlika između kalupa proizvođača ranije nekako bila manja. Znalo se da Italijani imaju jedini nešto
    drugačije kalupe, ali su ostali bili prilično standardizovani. Danas je, međutim, ova razlika između proizvođača sve
    značajnija i javila se potreba za merenjem dužine gazišta i označavanjem tih mera. Razvojem e-trgovine i kupovinom
    obuće online ova potreba je sve veća.</p>
  <p> Pripremajući se za pisanje ovog teksta pokušala sam da pronađem što više informacija i možda neku tabelu sa
    standardnim veličinama i dužinama gazišta kako bih vam olakšala posao, međutim shvatila sam da ona toliko variraju
    od proizvođača do proizvođača da vam <strong>jedino dužina gazišta pruža određenu sigurnost prilikom kupovine,
      odnosno prodaje obuće online</strong>. Ukoliko ste prodavac, beleženjem dužine gazišta u opisu predmeta, pružićete
    najtačniju informaciju potencijalnim kupcima i izbeći ćete bilo kakve probleme koji mogu nastati naknadno: da su
    kupcu cipele/patike male ili velike. Takođe, ukoliko ste kupac izmerite dužinu svojih stopala pre nego što se
    upustite u ovakvu kupovinu i prilikom odabira obuće online obavezno obratite pažnju na dužinu gazišta, bez obzira na
    navedeni broj.</p>
  <p><strong>Kako se meri dužina gazišta</strong><br>
    Merenje dužine stopala je najlakši i najprecizniji način da odredite koji broj obuće nosite. Sve što treba jeste da
    izmerite stopalo od palca do pete kao na donjoj slici:</p>
  <div class="d-flex justify-content-center">
    <img title="Merenje dužine gazišta" width="290" height="250" src="/photos/duzina.jpg">
    <img title="Merenje dužine gazišta" width="290" height="250" src="/photos/duzina-gazista2.png">
  </div>
</div>
@endsection
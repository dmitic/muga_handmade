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
<div class="layer">
    <h1>USLOVI KORIŠĆENJA</h1>
    <p>Korišćenjem internet stranica <a href="http://www.mugashoes.rs">www.mugashoes.rs </a> smatra se da ste u potpunosti upoznati i saglasni sa ovde navedenim <a href="/uslovi">Uslovima korišćenja</a> / <a href="/reklamacije">Return Policy</a> / <a href="/poverljivost">Izjavom o poverljivosti podataka</a>. Ukoliko se sa istima ne slažete i ne prihvatate ih, molimo Vas da ne koristite ovu internet stranicu.</p>
    <p>Uslovi korišćenja odnose se na korišćenje internet stranica <a href="http://www.mugashoes.rs">www.mugashoes.rs </a> od strane korisnika. Svakim daljim korišćenjem ovih Internet stranica nakon upoznavanja sa Uslovima korišćenja, smatra se da su korisnici saglasni sa ovde navedenim uslovima i pravilima i da pristaju na korišćenje Internet stranica u skladu sa tim uslovima</p>
    <p>Korisnik je saglasan sa tim da pristup internet stranici <a href="http://www.mugashoes.rs">www.mugashoes.rs </a> ponekad može biti u prekidu, privremeno nedostupan ili isključen iz razloga kako rutinskog održavanja stranice tako i iz drugih razloga za koje nije odgovoran MUGA Handmade Shoes.</p>
    <p>Svi materijali koji se nalaze na internet stranici <a href="http://www.mugashoes.rs">www.mugashoes.rs </a> su vlasništvo MUGA Handmade Shoes, pa su kao takvi zaštićeni zakonom, ili se koriste u skladu sa odobrenjem nosioca autorskih prava i nosioca prava na pečat i / ili dizajn, kao i u skladu sa drugim potrebnim odobrenjima. MUGA Handmade Shoes je takođe nosilac autorskih prava na celokupnom idejnom sadržaju internet stranice <a href="www.mugashoes.rs">www.mugashoes.rs </a> neophodnom za ispravno i nesmetano funkcionisanje projekta. Korisnik može sa internet stranice <a href="http://www.mugashoes.rs">www.mugashoes.rs </a> preuzimati, popunjavati i čuvati materijale zaštićene autorskim pravom samo u svrhu svoje vlastite i lične upotrebe.</p>
    <p>MUGA Handmade Shoes ni u kom slučaju nije odgovorna za bilo kakvu štetu koja može nastati kao posledica korišćenja, ili zbog nemogućnosti korišćenja internet stranica <a href="http://www.mugashoes.rs">www.mugashoes.rs </a> delimično ili u celosti.</p>
    <p>Naručivanjem proizvoda na internet stranici <a href="http://www.mugashoes.rs">www.mugashoes.rs </a> smatra se da je korisnik ove <a href="/uslovi">Uslovima korišćenja</a>  u celosti pročitao.</p>
  </div>
@endsection
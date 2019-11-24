@extends('layouts.app')

@section('indeks')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/kolekcija.css') }}">
<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@endsection

@section('indeksLogo')
<link href="{{ asset('/css/velikiLogo.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- second section start-->
    <div class="layer">
        <h1 class="h1">Rucna izrada muške i ženske obuce po meri.</h1>
        <h2>Modeli iz kolekcije su radeni od razlicitih vrsta kože, prirodnog porekla, dok su donovi gumeni.</h2>
        <p>Možete iskoristiti neki od postojecih modela kao uzor za Vaš idealan par obuce, ili možete kreirati svoju
            kombinaciju po želji . Dovoljno je samo da odaberete željeni model obuce, i u delu ‘opis’, u okviru Vaše
            ‘korpe’, bliže definišete Vašu kombinaciju boja i materijala.</p>
        <p>Vreme cekanja na izradu modela je 10-ak dana.</p>
        <p class="text-right"><a class="btn btn-default btn-lg" href="/proizvodi"><span style="font-size:2em;text-decoration:none">Pogledajte proizvode iz naše kolekcije</span></a></p>
    </div>
<!-- second section end-->
@endsection

@section('prikazi-kontakt')
@include('includes.contact')
@endsection

@section('prikazi-about')
@include('includes.about')
@endsection

@section('animacija')
<div id="header-text" class="">
    <h1>MUGA<br>Handmade Shoes</h1>
    {{-- <h1>ručna izrada<br> kožne obuće po meri</h1> --}}
</div>
@endsection
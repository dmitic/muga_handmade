@extends('layouts.app')

@section('indeks')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/contact.css') }}">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@endsection

@section('indeksLogo')
    <link href="{{ asset('/css/velikiLogo.css') }}" rel="stylesheet">
@endsection

@section('content')

@endsection

@section('prikazi-kontakt')
    @include('includes.contact')
@endsection

@section('prikazi-about')
    @include('includes.about')
@endsection

@section('animacija')
    <div id="header-text" class="">
        <h1>MUGA Handmade Shoes</h1>
        {{-- <h1>ručna izrada<br> kožne obuće po meri</h1> --}}
    </div>  
@endsection
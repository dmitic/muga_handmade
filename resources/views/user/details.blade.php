@extends('user.layout.app')

@section('page-header')
<h2 class="page-header">Moji podaci</h2>
@endsection

@section('content')
<div class="d-flex">
  <form action="/user/korisnici/{{$user->id}}" class="col-md-11" method="post">
    @csrf
    @method('PUT')
    <div class="col-md-5">
      <div class="input-group">Korisničko ime: <label>{{ $user->name }}</label></div>
      <div class="input-group">Email adresa: <label>{{ $user->email }}</label></div>
      <div class="input-group">Ime: <label>{{ $user->details->first_name ?? '' }}</label></div>
      <div class="input-group">Prezime: <label>{{ $user->details->last_name ?? '' }}</label></div>
      <div class="input-group">Telefon: <label>{{ $user->phone ?? '' }}</label></div>
    </div>
    <div class="col-md-5">
      <div class="input-group">Adresa: <label>{{ $user->details->address ?? '' }}</label></div>
      <div class="input-group">Grad: <label>{{ $user->details->city ?? '' }}</label></div>
      <div class="input-group">Zip kod: <label>{{ $user->details->zip ?? '' }}</label></div>
      <div class="input-group">Država: <label>{{ $user->details->state  ?? ''}}</label></div>
      <div class="input-group">Korisnička grupa: <label>{{ $user->is_admin  ? 'Admin' : 'Korisnik'}}</label></div>
    </div>
    <div class="col-md-11">
      <hr>
        <a href="/user" class="btn btn-default" title="Nazad na CP">Nazad</a>
        <a href="{{ route('izmeniUser')}}" class="btn btn-default" title="Izmena mojih podataka">Izmeni podatke</a>
        <a href="/user/sifra" class="btn btn-default" title="Promena šifre">Promena šifre</a>
    </div>
  </form>
</div>

@endsection
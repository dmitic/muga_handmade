@extends('admin.layout.app')

@section('page-header')
<h2 class="page-header">Podaci o korisniku</h2>
@endsection

@section('content')
@error('poruka')
<div class="row  text-center">
  <div class="col-md-12">
    <div class="alert alert-success">{{ $message }}</div>
  </div>
</div>
@enderror
<div class="row d-flex">
  <form action="{{ route('brisi', ['user' => $user->id]) }}" class="col-md-11" method="post">
    @csrf
    @method('DELETE')
    <div class="input-group">Korisničko ime: <label>{{ $user->name }}</label></div>
    <div class="input-group">Email adresa: <label>{{ $user->email }}</label></div>
    <div class="input-group">Ime: <label>{{ $user->details->first_name ?? '' }}</label></div>
    <div class="input-group">Prezime: <label>{{ $user->details->last_name ?? '' }}</label></div>
    <div class="input-group">Telefon: <label>{{ $user->phone ?? '' }}</label></div>
    <div class="input-group">Adresa: <label>{{ $user->details->address ?? '' }}</label></div>
    <div class="input-group">Grad: <label>{{ $user->details->city ?? '' }}, {{ $user->details->zip ?? '' }}</label>
    </div>
    <div class="input-group">Država: <label>{{ $user->details->state  ?? ''}}</label></div>
    <div class="input-group">Korisnička grupa: <label>{{ $user->is_admin  ? 'Admin' : 'Korisnik'}}</label></div>
    <hr>
      <a href="/admin/korisnici/" class="btn btn-default" title="Nazad na listu korisnika">Nazad na listu klijenata</a>
      <a href="{{ route('izmeni', ['user' => $user->id]) }}" class="btn btn-default"
        title="Izmena podataka o korisniku">Izmeni podatke</a>
      <a href="/admin/sifra/{{ $user->id }}" class="btn btn-default" title="Promena šifre">Promena šifre</a>
      <a href="/admin/pretraga-fakture?str={{ $user->name }}" class="btn btn-default"
        title="Sve narudžbenice korisnika">Sve narudžbine</a>
      @if (Auth::User()->is_admin)
        @if (Auth::User()->id === $user->id)
        <button class="btn btn-danger" disabled>Obriši</button>
      @else
        <button class="btn btn-danger" onclick="return confirm('Da li si siguran da želiš da obišeš korisnika?')"
          title="Obriši korisnika">Obriši</button>
        @endif
      @endif
  </form>
</div>

@endsection
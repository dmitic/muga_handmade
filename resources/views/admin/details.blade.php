@extends('admin.layout.app')

@section('page-header')
<h2 class="page-header">Podaci o korisniku</h2>
@endsection

@section('content')
<div class="d-flex">
  <form action="/admin/korisnici/{{$user->id}}" class="col-md-11" method="post">
    @csrf
    @method('PUT')
    <div class="input-group">Korisničko ime: <label>{{ $user->name }}</label></div>
    <div class="input-group">Email adresa: <label>{{ $user->email }}</label></div>
    <div class="input-group">Ime: <label>{{ $user->details->first_name ?? '' }}</label></div>
    <div class="input-group">Prezime: <label>{{ $user->details->last_name ?? '' }}</label></div>
    <div class="input-group">Telefon: <label>{{ $user->phone ?? '' }}</label></div>
    <div class="input-group">Adresa: <label>{{ $user->details->address ?? '' }}</label></div>
    <div class="input-group">Grad: <label>{{ $user->details->city ?? '' }}, {{ $user->details->zip ?? '' }}</label></div>
    <div class="input-group">Država: <label>{{ $user->details->state  ?? ''}}</label></div>
    <div class="input-group">Korisnička grupa: <label>{{ $user->is_admin  ? 'Admin' : 'Korisnik'}}</label></div>
    <hr>
    <form action="/admin/korisnici/{{$user->id}}" method="post">
      @method('DELETE')
      <a href="/admin/korisnici/" class="btn btn-default" title="Nazad na listu korisnika">Nazad</a>
      <a href="{{ route('izmeni', ['user' => $user->id]) }}" class="btn btn-default" title="Izmena podataka o korisniku">Izmeni podatke</a>
      {{-- <a href="/admin/korisnici/{{$user->id}}/edit" class="btn btn-default">Izmeni podatke</a> --}}
      @if (Auth::User()->is_admin)
      @if (Auth::User()->id === $user->id)
      <button class="btn btn-danger" disabled>Obriši</button>
      @else
      <button class="btn btn-danger" title="Obriši korisnika">Obriši</button>
      @endif
      @endif
    </form>
  </form>
</div>

@endsection
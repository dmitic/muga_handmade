@extends('admin.layout.app')

@section('page-header')
<h3 class="page-header">Promena podataka o korisnika: {{ $user->name }}</h3>
@endsection

@section('content')
@error('poruka') 
<div class="row  text-center">
  <div class="col-md-12">
    <div class="alert alert-success">{{ $message }}</div>
  </div>
</div>
@enderror
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9" style="margin-right:30px;">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('update', ['user' => $user->id]) }}" class="form-group col-md-11" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <div class="col-md-10">
                <input type="hidden" name="is_admin" value="{{ $user->is_admin ? '1' : '0' }}">
                Admin: <input type="radio" name="is_admin" value="1" {{ $user->is_admin ? 'checked' : ''  }}
                  {{ Auth::User()->id === $user->id ? 'disabled' : ''}}>
                Korisnik: <input type="radio" name="is_admin" value="0" {{ !$user->is_admin ? 'checked' : ''  }}
                  {{ Auth::User()->id === $user->id ? 'disabled' : ''}}>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="name">Korisničko ime</label>
              <div class="col-md-10 @error('name') {{'has-error'}} @enderror">
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}"
                  placeholder="Korisničko ime...">
                <small class="text-danger">
                  @error('name')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="email">E-mail</label>
              <div class="col-md-10 @error('email') {{'has-error'}} @enderror">
                <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}"
                  placeholder="Email adresa...">
                <small class="text-danger">
                  @error('email')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="first_name">Ime</label>
              <div class="col-md-10 @error('first_name') {{'has-error'}} @enderror">
                <input type="text" id="first_name" name="first_name" class="form-control"
                  value="{{ isset($user->details->first_name) ? ($user->details->first_name ?? '') : old('first_name') }}" placeholder="Ime...">
                <small class="text-danger">
                  @error('first_name')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="last_name">Prezime</label>
              <div class="col-md-10 @error('last_name') {{'has-error'}} @enderror">
                <input type="text" id="last_name" name="last_name" class="form-control"
                  value="{{ isset($user->details->last_name) ? ($user->details->last_name ?? '') : old('last_name') }}" placeholder="Prezime...">
                <small class="text-danger">
                  @error('last_name')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="phone">Telefon</label>
              <div class="col-md-10 @error('phone') {{'has-error'}} @enderror">
                <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->phone ? ($user->phone ?? '') : old('phone') }}"
                  placeholder="Telefon...">
                <small class="text-danger">
                  @error('phone')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="address">Adresa</label>
              <div class="col-md-10 @error('address') {{'has-error'}} @enderror">
                <input type="text" id="address" name="address" class="form-control"
                  value="{{ isset($user->details->address) ? ($user->details->address ?? '') : old('address') }}" placeholder="Adresa...">
                <small class="text-danger">
                  @error('address')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="zip">Zip kod</label>
              <div class="col-md-10 @error('zip') {{'has-error'}} @enderror">
                <input type="text" id="zip" name="zip" class="form-control" value="{{ isset($user->details->zip) ? ($user->details->zip ?? '') : old('zip') }}"
                  placeholder="Zip kod...">
                <small class="text-danger">
                  @error('zip')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="city">Grad</label>
              <div class="col-md-10 @error('city') {{'has-error'}} @enderror">
                <input type="text" id="city" name="city" class="form-control" value="{{ isset($user->details->city) ? ($user->details->city ?? '') : old('city') }}"
                  placeholder="Grad...">
                <small class="text-danger">
                  @error('city')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="state">Država</label>
              <div class="col-md-10 @error('state') {{'has-error'}} @enderror">
                <input type="text" id="state" name="state" class="form-control"
                  value="{{ isset($user->details->state) ? ($user->details->state ?? '') : old('state') }}" placeholder="Država..">
                <small class="text-danger">
                  @error('state')
                  <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                  {{ $message }}
                  @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-10 col-md-offset-2">
                <button class="btn btn-primary btn-block">Snimi</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
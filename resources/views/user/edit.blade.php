@extends('user.layout.app')

@section('page-header')
<h3 class="page-header">Promena mojih podataka <small style="color:red;">Sva polja su obavezna!</small></h3>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9" style="margin-right:30px;">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('updateUser')}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="name">Korisničko ime</label>
              <div class="col-md-10"><input type="text" id="name" name="name" class="form-control"
                  value="{{ $user->name }}" placeholder="Korisničko ime..."></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="email">E-mail</label>
              <div class="col-md-10"><input type="text" id="email" name="email" class="form-control"
                  value="{{ $user->email }}" placeholder="Email adresa..." disabled></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="first_name">Ime</label>
              <div class="col-md-10"><input type="text" id="first_name" name="first_name" class="form-control"
                  value="{{ $user->details->first_name ?? '' }}" placeholder="Ime..."></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="last_name">Prezime</label>
              <div class="col-md-10"><input type="text" id="last_name" name="last_name" class="form-control"
                  value="{{ $user->details->last_name ?? '' }}" placeholder="Prezime..."></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="phone">Telefon</label>
              <div class="col-md-10"><input type="text" id="phone" name="phone" class="form-control"
                  value="{{ $user->phone ?? '' }}" placeholder="Telefon..."></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="address">Adresa</label>
              <div class="col-md-10"><input type="text" id="address" name="address" class="form-control"
                  value="{{ $user->details->address ?? '' }}" placeholder="Adresa..."></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="zip">Zip kod</label>
              <div class="col-md-10"><input type="text" id="zip" name="zip" class="form-control"
                  value="{{ $user->details->zip ?? '' }}" placeholder="Zip kod..."></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="city">Grad</label>
              <div class="col-md-10"><input type="text" id="city" name="city" class="form-control"
                  value="{{ $user->details->city ?? '' }}" placeholder="Grad..."></div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="state">Država</label>
              <div class="col-md-10"><input type="text" id="state" name="state" class="form-control"
                  value="{{ $user->details->state  ?? ''}}" placeholder="Država.."></div>
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


{{-- <div class="d-flex">
  <form action="{{ route('updateUser')}}" class="form-group col-md-11" method="post">
@csrf
@method('PUT')
<div class="form-group">
  <label for="name">Korisničko ime</label>
  <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}"
    placeholder="Korisničko ime...">
</div>
<div class="form-group">
  <label for="email">E-mail</label>
  <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}"
    placeholder="Email adresa..." disabled>
</div>
<div class="form-group">
  <label for="first_name">Ime</label>
  <input type="text" id="first_name" name="first_name" class="form-control"
    value="{{ $user->details->first_name ?? '' }}" placeholder="Ime...">
</div>
<div class="form-group">
  <label for="last_name">Prezime</label>
  <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $user->details->last_name ?? '' }}"
    placeholder="Prezime...">
</div>
<div class="form-group">
  <label for="phone">Telefon</label>
  <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->details->phone ?? '' }}"
    placeholder="Telefon...">
</div>
<div class="form-group">
  <label for="address">Adresa</label>
  <input type="text" id="address" name="address" class="form-control" value="{{ $user->details->address ?? '' }}"
    placeholder="Adresa...">
</div>
<div class="form-group">
  <label for="zip">Zip kod</label>
  <input type="text" id="zip" name="zip" class="form-control" value="{{ $user->details->zip ?? '' }}"
    placeholder="Zip kod...">
</div>
<div class="form-group">
  <label for="city">Grad</label>
  <input type="text" id="city" name="city" class="form-control" value="{{ $user->details->city ?? '' }}"
    placeholder="Grad...">
</div>
<div class="form-group">
  <label for="state">Država</label>
  <input type="text" id="state" name="state" class="form-control" value="{{ $user->details->state  ?? ''}}"
    placeholder="Država..">
</div>
<button class="btn btn-primary btn-block">Snimi</button>
</form>
</div> --}}
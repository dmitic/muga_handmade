@extends('user.layout.app')

@section('page-header')
<h2 class="page-header">Promena šifre</h2>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{ route('promeniSifru') }}">
            @csrf
            <div class="row  text-center">
                <div class="col-md-12">
                    @foreach ($errors->all() as $error)
                      <p class="text-danger">{{ $error }}</p>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Trenutna šifra</label>

              <div class="col-md-8">
                <input id="password" type="password" class="form-control" name="current_password"
                  autocomplete="current-password">
                {{-- <small class="text-danger">
                  @error('current_password')
                    <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                    {{ $message }}
                  @enderror
                </small> --}}
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Nova šifra</label>

              <div class="col-md-8">
                <input id="new_password" type="password" class="form-control" name="new_password"
                  autocomplete="current-password">
                {{-- <small class="text-danger">
                  @error('new_password')
                    <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                    {{ $message }}
                  @enderror
                </small> --}}
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Potvrdi novu šifru</label>

              <div class="col-md-8">
                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password"
                  autocomplete="current-password">
                {{-- <small class="text-danger">
                  @error('new_confirm_password')
                    <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                    {{ $message }}
                  @enderror
                </small> --}}
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Promeni šifru
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('admin.layout.app')

@section('page-header')
@if ($proizvod->naziv)
<h3 class="page-header">Izmena proizvoda: {{ $proizvod->naziv }}</h3>
@else
<h3 class="page-header">Dodavanje novog proizvoda</h3>
@endif
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9" style="margin-right:30px;">
      <div class="card">
        <div class="card-body">
          @if ($proizvod->id)
          <form action="{{ route('updateProizvod', ['proizvod' => $proizvod->id]) }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @else
            <form action="/admin/proizvodi/create" method="post" enctype="multipart/form-data">
              @endif
              @csrf
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="naziv">Ime proizvoda</label>
                <div class="col-md-10">
                  <input type="text" id="naziv" name="naziv" class="form-control"
                    value="{{ $proizvod->naziv ? ($proizvod->naziv ?? '') : old('naziv') }}"
                    placeholder="Ime proizvoda...">
                  <small class="text-danger">
                    @error('naziv')
                      <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                      {{ $message }}
                    @enderror
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="tip_obuce">Tip obuće</label>
                <div class="col-md-10">
                  <input type="text" id="tip_obuce" name="tip_obuce" class="form-control"
                    value="{{ $proizvod->tip_obuce ? ($proizvod->tip_obuce ?? '') : old('tip_obuce') }}"
                    placeholder="Tip obuće...">
                  <small class="text-danger">
                    @error('tip_obuce')
                      <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                      {{ $message }}
                    @enderror
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="materijali">Materijali</label>
                <div class="col-md-10">
                  <input type="text" id="materijali" name="materijali" class="form-control"
                    value="{{ $proizvod->materijali ? ($proizvod->materijali ?? '') : old('materijali') }}"
                    placeholder="Materijali...">
                  <small class="text-danger">
                    @error('materijali')
                      <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                      {{ $message }}
                    @enderror
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="boja">Boja</label>
                <div class="col-md-10">
                  <input type="text" id="boja" name="boja" class="form-control"
                    value="{{ $proizvod->boja ? ($proizvod->boja ?? '') : old('boja') }}" placeholder="Boja...">
                  <small class="text-danger">
                    @error('boja')
                      <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                      {{ $message }}
                    @enderror
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="djon">Đon</label>
                <div class="col-md-10">
                  <input type="text" id="djon" name="djon" class="form-control"
                    value="{{ $proizvod->djon ? ($proizvod->djon ?? '') : old('djon') }}" placeholder="Đon...">
                  <small class="text-danger">
                    @error('djon')
                      <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                      {{ $message }}
                    @enderror
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="sex">Pol: </label>
                <div class="col-md-10">
                  <select name="sex" id="sex" class="form-control">
                    <option value="Muške" @if ($proizvod->sex === 'Muške') {{ 'selected' }} @endif>Muške</option>
                    <option value="Ženske" @if ($proizvod->sex === 'Ženske') {{ 'selected' }} @endif>Ženske</option>
                    {{-- <option value="Uniseks" @if ($proizvod->sex === 'Uniseks') {{ 'selected' }} @endif>Uniseks
                    </option> --}}
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="sezona">Sezona</label>
                <div class="col-md-10">
                  <input type="text" id="sezona" name="sezona" class="form-control"
                    value="{{ $proizvod->sezona ? ($proizvod->sezona ?? '') : old('sezona') }}" placeholder="Sezona...">
                  <small class="text-danger">
                    @error('sezona')
                      <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                      {{ $message }}
                    @enderror
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="opis">Opis</label>
                <div class="col-md-10">
                  <textarea type="text" id="opis" name="opis" class="form-control"
                    placeholder="Opis...">{{ $proizvod->opis ? ($proizvod->opis ?? '') : old('opis') }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="napomena">Napomena</label>
                <div class="col-md-10">
                  <textarea type="text" id="napomena" name="napomena" class="form-control"
                    placeholder="Napomena...">{{ $proizvod->napomena ? ($proizvod->napomena ?? '') : old('napomena') }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="cena">Cena</label>
                <div class="col-md-10">
                  <input type="number" id="cena" name="cena" class="form-control"
                    value="{{ $proizvod->cena ? ($proizvod->cena ?? '') : old('cena') }}" placeholder="Cena...">
                  <small class="text-danger">
                    @error('cena')
                      <span class="glyphicon glyphicon-exclamation-sign text-danger" aria-hidden="true"></span>
                      {{ $message }}
                    @enderror
                  </small>
                </div>
              </div>
              <div class="form-group row">
                {{-- <label class="col-md-2 col-form-label text-md-right" for="slika">Dodaj sliku</label> --}}
                <div class="col-md-10 col-md-offset-2">
                  {{-- <input type="file" name="slika" /> --}}
                  <label for="file-upload" class="custom-file-upload"><i class="fa fa-cloud-upload"></i> Odaberi sliku
                    za proizvod</label>
                  <input id="file-upload" name="slika" type="file" />
                  <p class="help-block">Izaberi sliku proizvoda</p>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-10 col-md-offset-2">
                  <button type="submit" class="btn btn-primary btn-block">Snimi</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('admin.layout.app')

@section('page-header')
<h2 class="page-header">Detaljnije:</h2>
@endsection

@section('content')
<div class="d-flex">
  <div class="col-md-12">
    <div class="col-md-5">
      <div class="input-group">Naziv: <label>{{ $proizvod->naziv }}</label></div>
      <div class="input-group">Tip: <label>{{ $proizvod->tip_obuce }}</label></div>
      <div class="input-group">Materijali: <label>{{ $proizvod->materijali }}</label></div>
      <div class="input-group">Boja: <label>{{ $proizvod->boja }}</label></div>
      <div class="input-group">Đon: <label>{{ $proizvod->djon }}</label></div>
      <div class="input-group">Sex: <label>{{ $proizvod->sex }}</label></div>
      <div class="input-group">Sezona: <label>{{ $proizvod->sezona }}</label></div>
      <div class="input-group">Opis: <label>{{ $proizvod->opis }}</label></div>
      <div class="input-group">Cena: <label>{{ $proizvod->cena }} din</label></div>
      <div class="input-group">Napomena: <label>{{ $proizvod->napomena }}</label></div>
      <hr>
      <form action="/admin/proizvodi/{{$proizvod->id}}" method="post">
        @csrf
        @method('DELETE')
        <a href="/admin/proizvodi/" class="btn btn-default" title="Nazad na listu proizvoda">Nazad</a>
        <a href="{{ route('izmeniProizvod', ['proizvod' => $proizvod->id]) }}" class="btn btn-default"
          title="Izmeni proizvod">Izmeni</a>
        <button class="btn btn-danger" title="Obriši proizvod">Obriši</button>
      </form>
    </div>
    <div class="col-md-7 mt-5">
      @foreach ($proizvod->slike as $slika)
      <div style="display:inline-block; margin-top:15px;">
        <img src="/images/{{$slika->slika }}" alt="{{ $proizvod->naziv }}" class="srednja_slika">
        <p class="slika-proizvod-obrisi">
          <form action="{{ route('obrisiSliku', ['slika' => $slika]) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-block" title="Obriši sliku">Obriši sliku</button>
          </form>
        </p>
      </div>
      @endforeach
      <div class="form-group row" style="margin-top:20px;">
        <form action="{{ route('dodajSliku', ['proizvod' => $proizvod->id]) }}" class="form-group col-md-11"
          method="post" enctype="multipart/form-data">
          @csrf
          <label for="file-upload" class="custom-file-upload">
            <i class="fa fa-cloud-upload"></i> Odaberi dodatnu sliku za {{ $proizvod->naziv }}
          </label>
          <input id="file-upload" name="slika" type="file" />
          {{-- <label for="slika">Odaberi sliku: </label> --}}
          {{-- <input type="file" name="slika" style="display:inline-block;"/> --}}
          <button type="submit" class="btn btn-primary" style="margin-top:5px;">Dodaj sliku</button>
          <p class="help-block">Dodaj još slika za {{ $proizvod->naziv }}.</p>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection



{{-- <div class="d-flex">
    <div class="col-md-11">
      <div class="input-group">Naziv: <label>{{ $proizvod->naziv }}</label></div>
<div class="input-group">Tip: <label>{{ $proizvod->tip_obuce }}</label></div>
<div class="input-group">Materijali: <label>{{ $proizvod->materijali }}</label></div>
<div class="input-group">Đon: <label>{{ $proizvod->djon }}</label></div>
<div class="input-group">Sex: <label>{{ $proizvod->sex }}</label></div>
<div class="input-group">Sezona: <label>{{ $proizvod->sezona }}</label></div>
<div class="input-group">Opis: <label>{{ $proizvod->opis }}</label></div>
<div class="input-group">Cena: <label>{{ $proizvod->cena }} din</label></div>
<div class="input-group">Napomena: <label>{{ $proizvod->napomena }}</label></div>
<div class="input-group"><label>Slike:</label></div>
<div>
  @foreach ($proizvod->slike as $slika)
  <div style="display:inline-block;">
    <img src="/images/{{$slika->slika }}" alt="{{ $proizvod->naziv }}" class="srednja_slika">
    <p class="slika-proizvod-obrisi">
      <form action="{{ route('obrisiSliku', ['slika' => $slika]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-block" title="Obriši sliku">Obriši sliku</button>
      </form>
    </p>
  </div>
  @endforeach
  @foreach ($proizvod->slike as $slika)
  @endforeach
</div>
<hr>
<div class="form-group row">
  <form action="{{ route('dodajSliku', ['proizvod' => $proizvod->id]) }}" class="form-group col-md-11" method="post"
    enctype="multipart/form-data">
    @csrf
    <label for="slika">Dodaj sliku: </label>
    <input type="file" name="slika" style="display:inline-block;" />
    <button type="submit" class="btn btn-primary" style="margin-top:5px;">Dodaj sliku</button>
    <p class="help-block">Dodaj još slika za {{ $proizvod->naziv }}.</p>
  </form>
</div>
<hr>
<form action="/admin/proizvodi/{{$proizvod->id}}" method="post">
  @csrf
  @method('DELETE')
  <a href="/admin/proizvodi/" class="btn btn-default" title="Nazad na listu proizvoda">Nazad</a>
  <a href="{{ route('izmeniProizvod', ['proizvod' => $proizvod->id]) }}" class="btn btn-default"
    title="Izmeni proizvod">Izmeni</a>
  <button class="btn btn-danger" title="Obriši proizvod">Obriši</button>
</form>
</div>
</div> --}}
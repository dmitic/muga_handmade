@extends('admin.fakture.layout.app')

@section('page-header')
  @if ($narudzbenica)
    <button onclick="return print();" class="prnHidden btn btn-default btn-lg" style="float:right;">Štampaj</button>
    <h3 class="header">Narudžbenica broj: <strong>{{ $narudzbenica->narudzbenica_br ?? '' }}</strong></h3>
    <h4 class="page-header" style="margin-top:0;">Datum: <strong>{{ Carbon\Carbon::parse($narudzbenica->created_at)->format('j. F Y.') }}</strong></h4>
  @endif
@endsection

@section('content')
  @if ($narudzbenica)
  {{-- @if ($narudzbenica) --}}
    <div class="card mb-3">
    @if (count($stavke) > 0)
      <div class="row">
        <div class="col-md-8" style="float:left">
          <h4>Naručilac:</h4>
          @if ($narudzbenica->first_name === 'Nije upisano')
            <p class="mgb-0"><strong>Podaci nisu upisani!</strong></p>
          @else
            <p class="mgb-0"><strong>{{ $narudzbenica->first_name }} {{ $narudzbenica->last_name }}</strong></p>
            <p class="mgb-0"><strong>{{ $narudzbenica->address }}</strong></p>
            <p class="mgb-0"><strong>{{ $narudzbenica->zip }}, {{ $narudzbenica->city }}</strong></p>
            <p class="mgb-0"><strong>{{ $narudzbenica->state }}</strong></p>
          @endif
        </div>
        <div class="col-md-2 prnProdavac">
          <h4>Prodavac:</h4>
          <p class="mgb-0"><strong>Muga Handmade Shop</strong></p>
          <p class="mgb-0"><strong>Neka adresa</strong></p>
          <p class="mgb-0"><strong>11000, Beograd</strong></p>
          <p class="mgb-0"><strong>Srbija</strong></p>
        </div>
        <div class="col-md-2 prnHidden">
          <img src="/logo.jpg" alt="Muga Handmade Shoes" class="pull-right" height="150px;">
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <hr>
          <table class="table table-striped tabProizvodi" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Narudžbenica br.</th>
                <th>Proizvod</th>
                <th class="prnHidden">Boja</th>
                <th class="prnHidden">Dužina gazišta</th>
                <th>Količina</th>
                <th>Cena</th>
                <th>Ukupna cena</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $suma = 0;
              @endphp
              @foreach ($stavke as $stavka)
              @php
                  $suma += $stavka->ukupna_cena;
              @endphp
              <tr>
                <td>{{ $narudzbenica->narudzbenica_br }}</td>
                <td>{{ $stavka->naziv_proizvoda }} <span class="prnHidden"><a href="/admin/proizvodi/{{ $stavka->proizvod_id }}" style="text-decoration:none;"
                  title="Detaljnije...."><i class="glyphicon glyphicon-play"></i></a></span></td>
                <td class="prnHidden">{{ $stavka->boja }}</td>
                <td class="prnHidden">{{ $stavka->gaziste }} cm</td>
                <td>{{ $stavka->kolicina }} kom</td>
                <td>{{ $stavka->pojedinacna_cena }} RSD</td>
                <td>{{ $stavka->ukupna_cena }} RSD</td>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <hr>
        </div>
        <div class="row">
            <div class="col-md-9 pull-left">
              <span>Napomena korisnika: </span>
              <p class="mgb-0"><strong>{{ $narudzbenica->napomena_user }}</strong></p>
              <hr>
            </div>
            <hr>
            <div class="col-md-3 pull-right">
              <h2>Ukupno: {{  number_format($suma, 2, ',', '.')  }} RSD</h2>
            </div>
          </div>
      </div>
      </div>
    @else
      <p>Tražena narudžbenica ne postoji u bazi!</p>
    </div>
    @endif
  @else
    <p style="font-size:24px;">Tražena narudžbenica ne postoji u bazi!</p>
  @endif 
@endsection
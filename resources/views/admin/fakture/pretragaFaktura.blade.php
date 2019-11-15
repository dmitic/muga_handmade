@extends('admin.fakture.layout.app')

@section('page-header')
  <h3 class="page-header">Rezultati pretrage narudžbenica</h3>
@endsection

@section('content')
<div class="card mb-3">
    <div class="card-header">
      <form action="/admin/pretraga-fakture" method="get">
        <div class="row">
          <div class="col-md-3 pull-right">
            <div class="input-group">
              <input type="text" name="str" class="form-control" placeholder="Broj narudžbenice, ime, prezime, grad..."
                value="{{ $_GET['str'] ?? '' }}">
              <span class="input-group-btn">
                <button class="btn btn-default">Traži!</button>
              </span>
            </div>
            <p class="help-block">Pretraga narudžbenica.</p>
          </div>
        </div>
      </form>
    </div>
    {{-- za prikaz poruke o brisanju --}}
    @error('poruka') 
    <div class="row  text-center">
      <div class="col-md-12">
        <div class="alert alert-success">{{ $message }}</div>
      </div>
    </div>
    @enderror
    <div class="card-body">
      <div class="table-responsive">
        @if (count($fakture) > 0)
        <table class="table table-striped tabProizvodi" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Narudžbenica br.</th>
              <th>Korisničko ime</th>
              <th>Ime i prezime</th>
              <th>Napravljena</th>
              <th>Realizovana</th>
              <th>Napomena korisnika</th>
              <th>Broj stavki</th>
              <th>Ukupna cena</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Narudžbenica br.</th>
              <th>Korisničko ime</th>
              <th>Ime i prezime</th>
              <th>Napravljena</th>
              <th>Realizovana</th>
              <th>Napomena korisnika</th>
              <th>Broj stavki</th>
              <th>Ukupna cena</th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($fakture as $faktura)
            <tr>
              <td><a href="/admin/detaljnije-fakture/{{ $faktura->id }}" title="Detaljnije...">{{ $faktura->narudzbenica_br }}</a></td>
              <td><a href="{{ route('detalji', ['user' => $faktura->user_id]) }}" title="Detaljnije...">{{ $faktura->name }}</a></td>
              <td>{{ $faktura->first_name }} {{ $faktura->last_name }}</td>
              <td>{{ Carbon\Carbon::parse($faktura->created_at)->format('j. F Y.') }}</td>
              <td>
                @if ($faktura->completed_at)
                  {{ Carbon\Carbon::parse($faktura->completed_at)->format('j. F Y.') }}
                @else
                    Nerealizovana
                @endif
                </td>
              <td>{{ $faktura->napomena_user }}</td>
              <td style="text-align:center;">{{ count($faktura->stavke) }}</td>
              <td>{{ $faktura->ukup_suma }} rsd</td>
              <td style="width:100px">
                <form action="/admin/realizuj/{{ $faktura->id }}" method="post">
                  @csrf
                  @method('PUT')
                  @if ($faktura->completed_at)
                      <a href="#" class="btn btn-primary" title="Markiraj narudžbinu kao realizovanu" disabled>Realizovano</a>
                    @else
                      <button class="btn btn-primary" onclick="return confirm('Potvrdi realizaciju narudžbenice?')" title="Markiraj narudžbinu kao realizovanu">Realizuj</button>
                    @endif
                </form>
              </td>
              <td style="width:100px">
                @if (isset($_GET['str']))  
                  <form action="/admin/realizovane-fakture-pretraga/{{ $faktura->id }}" method="post">
                  <input type="hidden" name="str" value="{{ $_GET['str'] }}">
                @else 
                  <form action="/admin/realizovane-fakture/{{ $faktura->id }}" method="post">
                @endif
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Da li si siguran da želiš da obišeš naružbinu?')" title="Sorniraj narudžbinu">Storniraj</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <p>Tražena faktura <strong>
            @if(isset($_GET['str']))
            {{ $_GET['str'] }}
            @endif
          </strong> ne postoji u bazi!</p>
        @endif
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          {{ $fakture->appends(['str' => $_GET['str'] ?? ''])->links()}}
        </div>
      </div>
    </div>
  </div>
@endsection
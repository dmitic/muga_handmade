@extends('admin.fakture.layout.app')

@section('page-header')
  <h3 class="page-header">Nerealizovane narudžbenice <small>Spisak svih nerealizovanih narudžbenica</small></h3>
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
    <div class="row  text-center">
        <div class="col-md-12">
            @foreach ($errors->all() as $error)
              <div class="alert alert-success">{{ $error }}</div>
            @endforeach
        </div>
    </div>
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
              <th>Broj stavki</th>
              <th>Ukupna cena</th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($fakture as $faktura)
            <tr>
              <td><a href="/admin/detaljnije-fakture/{{ $faktura->id }}" style="text-decoration:none;" title="Detaljnije...">{{ $faktura->narudzbenica_br }}</a></td>
              <td><a href="{{ route('detalji', ['user' => $faktura->user_id]) }}" style="text-decoration:none;" title="Detaljnije...">{{ $faktura->name }}</a></td>
              <td>{{ $faktura->first_name }} {{ $faktura->last_name }}</td>
              <td>{{ Carbon\Carbon::parse($faktura->created_at)->format('j. F Y.') }}</td>
              <td>Nerealizovana</td>
              <td style="text-align:center;">{{ count($faktura->stavke) }}</td>
              <td>{{ $faktura->ukup_suma }} rsd</td>
              <td style="width:100px">
                <form action="/admin/realizuj/{{ $faktura->id }}" method="post">
                  @csrf
                  @method('PUT')
                  <button class="btn btn-primary" onclick="return confirm('Potvrdi realizaciju narudžbenice?')" title="Markiraj narudžbinu kao realizovanu">Realizuj</button>
                </form>
              </td>
              <td style="width:100px">
                <form action="/admin/nerealizovane-fakture/{{ $faktura->id }}" method="post">
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
          {{ $fakture->links()}}
        </div>
      </div>
    </div>
  </div>
@endsection
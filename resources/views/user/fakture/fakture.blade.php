@extends('user.fakture.layout.app')

@section('page-header')
  <h3 class="page-header">Moje narudžbenice</small></h3>
@endsection

@section('content')
<div class="card mb-3">
    <div class="card-header">
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if (count($fakture) > 0)
        <table class="table table-striped tabProizvodi" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Narudžbenica br.</th>
              <th>Korisničko ime</th>
              <th>Napravljena</th>
              <th>Realizovana</th>
              <th>Napomena</th>
              <th>Broj stavki</th>
              <th>Ukupna suma</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Narudžbenica br.</th>
              <th>Korisničko ime</th>
              <th>Napravljena</th>
              <th>Realizovana</th>
              <th>Napomena</th>
              <th>Broj stavki</th>
              <th>Ukupna cena</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($fakture as $faktura)
            <tr>
              <td><a href="/user/fakture/{{ $faktura->id }}" title="Detaljnije...">{{ $faktura->narudzbenica_br }}</a></td>
              <td><a href="/user/fakture/{{ $faktura->id }}" title="Detaljnije...">{{ $faktura->name }}</a></td>
              <td>{{ Carbon\Carbon::parse($faktura->created_at)->format('j. F Y.') }}</td>
              <td>
                  @if ($faktura->completed_at !== null)
                    {{ Carbon\Carbon::parse($faktura->completed_at)->format('j. F Y.') }}
                  @else
                      Nerealizovana
                  @endif
                  </td>
                <td>{{ $faktura->napomena_user }}</td>
              <td style="text-align:center;">{{ count($faktura->stavke) }}</td>
              <td>{{ $faktura->ukup_suma }} rsd</td>
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
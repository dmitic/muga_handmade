@extends('user.fakture.layout.app')

@section('page-header')
  <h3 class="page-header">Moje narudžbenice</small></h3>
@endsection

@section('content')
<div class="card mb-3">
    <div class="card-header">
      {{-- <form action="/admin/pretraga-fakture" method="get">
        <div class="row">
          <div class="col-md-3 pull-right">
            <div class="input-group">
              <input type="text" name="str" class="form-control" placeholder="Pretraga narudžbenica po korisničkom imenu..."
                value="{{ $_GET['str'] ?? '' }}">
              <span class="input-group-btn">
                <button class="btn btn-default">Traži!</button>
              </span>
            </div>
            <p class="help-block">Pretraga narudžbenica po korisničkom imenu kupca.</p>
          </div>
        </div>
      </form> --}}
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
              <th>Broj stavki</th>
              <th>Ukupna suma</th>
              <th style="text-align:center;">Akcija</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Narudžbenica br.</th>
              <th>Korisničko ime</th>
              <th>Napravljena</th>
              <th>Realizovana</th>
              <th>Broj stavki</th>
              <th>Ukupna cena</th>
              <th style="text-align:center;">Akcija</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($fakture as $faktura)
            <tr>
              {{-- <td>
                <a href="/user/fakture/{{ $faktura->id }}" title="Detaljnije...">
                  {{ Carbon\Carbon::parse($faktura->created_at)->format('Y') }}-{{ $faktura->id }}
                </a>
              </td> --}}
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
              <td style="text-align:center;">{{ count($faktura->stavke) }}</td>
              <td>{{ $faktura->ukup_suma }} rsd</td>
              <td style="text-align:center; width:225px;">Edit/delete ili šta već
                {{-- <form action="/admin/fakturai/{{$faktura->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('izmenifaktura', ['faktura' => $faktura->id]) }}" class="btn btn-primary"
                    title="Izmeni faktura">Izmeni</a>
                  <button class="btn btn-danger" title="Obriši faktura">Obriši</button>
                </form> --}}
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
{{-- {{ dd($fakture) }} --}}
@endsection
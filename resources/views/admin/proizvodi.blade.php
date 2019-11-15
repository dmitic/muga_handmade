@extends('admin.layout.app')

@section('page-header')
<h2 class="page-header">Proizvodi <small>Lista svih proizvoda</small></h2>
@endsection

@section('content')

<div class="card mb-3">
  <div class="card-header">
    <form action="/admin/pretragaProizvodi" method="get">
      <div class="row">
        <div class="col-md-3 pull-right">
          <div class="input-group">
            <input type="text" name="str" class="form-control" placeholder="Pretraga proizvoda"
              value="{{ $_GET['str'] ?? '' }}">
            <span class="input-group-btn">
              <button class="btn btn-default">Traži!</button>
            </span>
          </div>
          <p class="help-block">Pretraga proizvoda (Naziv, tip, materijali, sezona, pol, napomena).</p>
        </div>
      </div>
    </form>
  </div>
  @error('poruka') 
    <div class="row  text-center">
      <div class="col-md-12">
        <div class="alert alert-success">{{ $message }}</div>
      </div>
    </div>
  @enderror
  <div class="card-body">
    <div class="table-responsive">
      @if (count($proizvodi) > 0)
      <table class="table table-striped tabProizvodi" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Naziv</th>
            <th>Slika</th>
            <th>Tip obuće</th>
            <th>Materijali</th>
            <th>Postava</th>
            <th>Boja</th>
            <th>Sezona</th>
            <th>Muške/Ženske</th>
            <th>Cena</th>
            <th>Napomena</th>
            <th style="text-align:center;">Akcija</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Naziv</th>
            <th>Slika</th>
            <th>Tip obuće</th>
            <th>Materijali</th>
            <th>Postava</th>
            <th>Boja</th>
            <th>Sezona</th>
            <th>Muške/Ženske</th>
            <th>Cena</th>
            <th>Napomena</th>
            <th style="text-align:center;">Akcija</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach ($proizvodi as $proizvod)
          <tr>
            <td><a href="{{ route('proizvodDetaljnije', ['proizvod' => $proizvod->id]) }}" style="text-decoration:none;" title="Detaljnije....">{{ $proizvod->naziv }}</a></td>
            <td style="width:250px;">
              <a href="{{ route('proizvodDetaljnije', ['proizvod' => $proizvod->id]) }}" style="text-decoration:none;" title="Detaljnije....">
                @foreach ($proizvod->slike as $slika)
                <img src="/images/{{$slika->slika }}" alt="{{ $proizvod->naziv }}" class="mala_slika">
                @endforeach
              </a>
            </td>
            <td>{{ $proizvod->tip_obuce }}</td>
            <td>{{ $proizvod->materijali }}</td>
            <td>{{ $proizvod->postava }}</td>
            <td>{{ $proizvod->boja }}</td>
            <td>{{ $proizvod->sezona }}</td>
            <td>{{ $proizvod->pol }}</td>
            <td>{{ $proizvod->cena }} din</td>
            <td>{{ $proizvod->napomena }}</td>
            <td style="text-align:center; width:180px;">
              <form action="{{ route('brisiProizvod', ['proizvod' => $proizvod->id]) }}" method="post">
              {{-- <form action="/admin/proizvodi/{{$proizvod->id}}" method="post"> --}}
                @csrf
                @method('DELETE')
                <a href="{{ route('izmeniProizvod', ['proizvod' => $proizvod->id]) }}" class="btn btn-primary"
                  title="Izmeni proizvod">Izmeni</a>
                <button class="btn btn-danger" onclick="return confirm('Da li si siguran da želiš da obišeš?')"
                  title="Obriši proizvod">Obriši</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <p>Traženi proizvod <strong>
          @if(isset($_GET['str']))
          {{ $_GET['str'] }}
          @endif
        </strong> ne postoji u bazi!</p>
      @endif
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        {{ isset($_GET['str']) ? $proizvodi->appends(request()->input())->links() : $proizvodi->links() }}
      </div>
    </div>
  </div>
  <div class="card-footer"><a href="{{ route('noviProizvod') }}" class=" btn btn-primary"
      title="Dodaj novi proizvod">Dodaj novi proizvod</a href=""></div>
</div>
@endsection
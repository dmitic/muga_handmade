@extends('layouts.app')

@section('pagesCss')
<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}">
<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@endsection

@section('main-js')
<script src="{{ asset('js/main.js') }}" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        axios.get('http://127.0.0.1:8000/json')
            .then(res => proizvodi.prikaziSve(res.data))
            .catch(err => console.error(err));
    });
</script>
@endsection

 {{-- @section('pocetna-link')
  <li class="nav-item nav-cell ">
    <a class="nav-link font-color" href="{{ url('/') }}#start-section">Početna&nbspstrana</a>
  </li>
@endsection --}}

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-10 filters ">  {{-- dodati style="height: 3000px" da bi scroll radio --}}
 
            <div id="filter">
                <input type="text" id="inp" placeholder="Pretraga po imenu">
                <button id="btnIme">Pronađi</button>
                <hr>
                <select name="pol" id="pol">
                    <option value="">Muške/Ženske</option>
                    <option value="Muške">Muške</option>
                    <option value="Ženske">Ženske</option>
                </select>
                <select name="sezona" id="sezona">
                    <option value="">Sve sezone</option>
                    <option value="Proleće">Proleće</option>
                    <option value="Leto">Leto</option>
                    <option value="Jesen">Jesen</option>
                    <option value="Zima">Zima</option>
                </select>
                <select name="boja" id="boja">
                    <option value="">Sve Boje</option>
                    <option value="Crna">Crna</option>
                    <option value="Crvena">Crvena</option>
                    <option value="Plava">Plava</option>
                    <option value="Roze">Roze</option>
                    <option value="Orange">Orange</option>
                </select>
                <hr>
                <input type="number" id="maxCena" placeholder="Maksimalna cena">
                <button id="btnMaxCena">Pronađi</button>
                <input type="number" id="minCena" placeholder="Minimalna cena">
                <button id="btnMinCena">Pronađi</button>
                <hr>
                <select id="polje">
                    <option value="naziv">Naziv</option>
                    <option value="cena">Cena</option>
                </select>
                <select id="sort">
                    <option value="-1">Opadajuće</option>
                    <option value="1">Rastuće</option>
                </select>
            </div>
        </div>

        <div id="shoes-collection" class="row col-xl-10 col-lg-9 col-md-8 col-sm-8 col-xs-10 products justify-content-center "></div>
    </div>
</div>
@endsection
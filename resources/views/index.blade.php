@extends('layouts.app')

@section('main-js')
<script src="{{ asset('js/main.js') }}" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
            axios.get('http://127.0.0.1:8000/json')
                .then(res => proizvodi.prikaziSve(res.data))
                .catch(err => console.error(err));
            document.querySelector('#korpa').innerHTML = `Korpa`;                //: ${formatiranje.format(korpa.ukupanIznos())} din
        });
</script>
@endsection

@section('indeksLogo')
    <link href="{{ asset('/css/velikiLogo.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-2 filters ">

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

        <div id="shoes-collection" class="row col-md-10 products justify-content-center "></div>
    </div>
</div>
@endsection

@section('prikazi-about')
    @include('includes.about')
@endsection
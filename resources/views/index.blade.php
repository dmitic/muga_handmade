@extends('layouts.app')

@section('main-js')
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <script>
            document.addEventListener('DOMContentLoaded', ()=>{
                axios.get('http://127.0.0.1:8000/json')
                    .then(res => proizvodi.prikaziSve(res.data))
                    .catch(err => console.error(err));
                document.querySelector('#korpa').innerHTML = `Korpa: ${formatiranje.format(korpa.ukupanIznos())} din`;                
            });
        </script>
      
    </div>
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div id="filter">
                        <input type="text" id="inp" placeholder="Pretraga po imenu" >
                        <button id="btnIme">Pronađi</button>
                        <hr>
                        <select name="pol" id="pol" >
                            <option value="">Muške/Ženske</option>
                            <option value="Muške">Muške</option>
                            <option value="Ženske">Ženske</option>
                        </select>
                        <hr>
                        <hr>
                        <select name="sezona" id="sezona" >
                            <option value="">Sve sezone</option>
                            <option value="Proleće">Proleće</option>
                            <option value="Leto">Leto</option>
                            <option value="Jesen">Jesen</option>
                            <option value="Zima">Zima</option>
                        </select>
                        <hr>
                        <select name="boja" id="boja" >
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
                        <hr>
                        <input type="number" id="minCena" placeholder="Minimalna cena">
                        <button id="btnMinCena">Pronađi</button>
                        <select id="polje">
                            <option value="naziv">Naziv</option>
                            <option value="cena" >Cena</option>
                        </select>
                        <select id="sort">
                            <option value="-1">Opadajuće</option>
                            <option value="1">Rastuće</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-9" >
                    <div id="proizvodi"></div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
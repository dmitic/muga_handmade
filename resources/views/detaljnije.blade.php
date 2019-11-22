@extends('layouts.app')

@section('detaljnije')
  <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@endsection

<!-- @section('pocetna-link')
  <li class="nav-item nav-cell ">
    <a class="nav-link font-color" href="{{ url('/') }}#start-section">Početna&nbspstrana</a>
  </li>
@endsection -->

@section('content')
<script>
    const podaci = <?= json_encode($proizvodi, JSON_UNESCAPED_UNICODE); ?>;
    document.addEventListener('DOMContentLoaded', ()=>{
      proizvod.prikazi(proizvod.nadji_ID());
      document.querySelector('#korpa').innerHTML = `Korpa: ${formatiranje.format(korpa.ukupanIznos())} din`; 
    });
</script>  
    </header>
        <div id="proizvodi" class="proizvodi-margins"></div>
@endsection
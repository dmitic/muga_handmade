@extends('layouts.app')

@section('header-footer')
  <link href="{{ asset('/css/header-footer.css') }}" rel="stylesheet">
@endsection

@section('pocetna-link')
  <li class="nav-item nav-cell ">
    <a class="nav-link font-color" href="{{ url('/') }}#start-section">Početna&nbspstrana</a>
  </li>
@endsection

@section('content')
<script>
    const podaci = <?php echo json_encode($proizvodi, JSON_UNESCAPED_UNICODE); ?>;
    document.addEventListener('DOMContentLoaded', ()=>{
      proizvod.prikazi(proizvod.nadji_ID());
      document.querySelector('#korpa').innerHTML = `Korpa: ${formatiranje.format(korpa.ukupanIznos())} din`;
    });
</script>  
    </header>
        <div id="proizvodi" class="proizvodi-margins"></div>
@endsection
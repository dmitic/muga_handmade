{{-- @extends('layouts.app') --}}

{{-- @section('header-footer')
  <link href="{{ asset('/css/header-footer.css') }}" rel="stylesheet">
@endsection --}}

{{-- @section('about') --}}
  <!-- fourth section start--> 
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div id="text-about">
          <div class="section-heading">
              <a href="{{ url('/') }}#start-section"><img src="/photos/logo2.jpg" id='logo3' alt="logo"></a>
              <h4>O nama</h4>
          </div>
          <p>
            MUGA Handmade Shoes je srpski brend osnovan 1990. godine kao porodična manufaktura, a lansiran na tržište 2018. godine.
          </p>
          <p>
            Sam brend se fokusira na proizvodnju i prodaju muških i ženskih cipela koje karakteriše sportsko - elegantni stil, koji je pogodan kako za svakodnevne odevne kombinacije, tako i za elegantnije prilike.
          </p>
        </div> 
        <div class="carousel-item active">
          <img class="d-block w-100" src="/photos/jesen.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/photos/leto.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/photos/prolece.jpg" alt="Third slide">
        </div>
      </div>
    </div>
<!-- fourth section end--> 
{{-- @endsection --}}
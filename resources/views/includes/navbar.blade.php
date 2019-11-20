<!-- first section start-->
<div id="start-section">
        <div id="start-nav" class="row container-fluid text-uppercase font-weight-bolder">
          <div class="col-4 d-flex justify-content-start ">
            <nav class="navbar navbar-expand-lg navbar-light ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse navbar-light " id="navbarNavDropdown">
                <ul class="navbar-nav  ">
                  @yield('pocetna-link')
                  <li class="nav-item nav-cell ">
                    <a class="nav-link font-color" href="{{ url('/') }}#text-about">O&nbspnama</a>
                  </li>
                  <li class="nav-item nav-cell">
                    <a class="nav-link font-color" href="{{ url('/') }}#contact">Kontakt</a>
                  </li>
                  <li class="nav-item nav-cell">
                    <a class="nav-link font-color" href="{{ url('/') }}#shoes-collection">Kolekcija</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
              
          <div class="col-4 d-flex justify-content-center">
              <a href="{{ url('/') }}#start-section"><img src="/photos/logo2.jpg" class='logo2' alt="Responsive image"></a>
          </div>

          <div class="col-4 d-flex justify-content-end">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                  <ul class="navbar-nav">
                        <li class="nav-item nav-cell">
                                <a href="/korpa" class="nav-link font-color" id="korpa">Korpa</a>
                            </li>
                            @guest
                            <!-- Authentication Links -->
                            <li class="nav-item nav-cell">
                                <a class="nav-link font-color" href="{{ route('login') }}">{{ __('Uloguj se') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item nav-cell">
                                <a class="nav-link font-color" href="{{ route('register') }}">{{ __('Registruj se') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item nav-cell">
                                <a class="nav-link font-color" href="/cp">Kontrolni panel</a>
                            </li>
                            <li class="nav-item nav-cell">
                                <a class="nav-link font-color" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Izloguj se') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endguest
                  </ul>
                </div>
              </nav>
          </div>
        </div>
        @yield('animacija')  
      </div>
      
  <!-- first section end-->    
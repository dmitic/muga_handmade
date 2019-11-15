<div class="header">
        <div class="header-cell alignment">
            <ul>
                <li><a class="nav-link font-color" href="#">O nama</a></li>
                <li><a class="nav-link font-color" href="#">Kontakt</a></li>
                <li><a class="nav-link font-color" href="#">Kolekcija</a></li>
            </ul>

        </div>
        <div class="logo header-cell">
            <a href="{{ url('/') }}"><img src="/photos/logo2.jpg" id='logo2' alt="Responsive image"></a>
        </div>
        <div class="header-cell">
            <ul>
                <li class="nav-item">
                        <a href="/korpa" class="nav-link" id="korpa">Korpa</a>
                    </li>
                @guest
                    <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Uloguj se') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registruj se') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown" style="line-height:1.2em">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="$" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" style="line-height:1.2em" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->is_admin)
                        <a class="dropdown-item" href="admin/detalji/{{ Auth::user()->id}}"><i
                                class="fa fa-fw fa-user"></i> Profile</a>
                        @else
                        <a class="dropdown-item" href="user/detaljnije"><i class="fa fa-fw fa-user"></i>
                            Profile</a>
                        @endif

                        <a class="dropdown-item" href="/cp">Kontrolni panel</a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
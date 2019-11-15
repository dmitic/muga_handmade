
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                {{-- <li><a href="index.html" class="nav-link">LaptopShop</a></li> --}}
                {{-- <li><a href="korpa.html" class="nav-link" id="korpa">Korpa</a></li> --}}

            </ul>

            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
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
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="$" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</nav>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">Homepage</a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
				{{ Auth::user()->name }} <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="{{ route('detaljiUsers')}}"><i class="fa fa-fw fa-user"></i> Profile</a>
				</li>
				<li class="divider"></li>
				<li>
					{{-- LOGOUT ruta --}}
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
						<i class="fa fa-fw fa-power-off"></i></a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>
			</ul>
		</li>
	</ul>

	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			{{-- <li class="{{ Request::path() === 'admin/home' ? 'active' : ''}}">
				<a href="/admin/home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li> --}}
			<li class="{{ Request::path() === 'user/detaljnije' || Request::path() === 'user/edit' ? 'active' : ''}}">
			{{-- <li class="{{ Request::path() === 'user/proizvodi' || Request::path() === 'user' || Request::path() === 'user/home' ? 'active' : ''}}"> --}}
				<a href="/user/detaljnije"><i class="fa fa-fw fa-table"></i> Moji podaci</a>
			</li>
			<li class="{{ Request::path() === 'user/sifra' ? 'active' : ''}}">
				<a href="/user/sifra"><i class="fa fa-fw fa-user"></i> Promena šifre</a>
			</li>
			<li class="{{ Request::path() === 'user/fakture' ? 'active' : ''}}">
				<a href="/user/fakture"><i class="fa fa-fw fa-desktop"></i> Moje narudžbenice</a>
			</li>
			{{-- <li class="{{ Request::path() === 'user/narudzbeniceRealizovane' ? 'active' : ''}}">
				<a href="#"><i class="fa fa-fw fa-desktop"></i> Realizovane narudzbenice</a>
			</li> --}}
			{{-- <li class="{{ Request::path() === 'user/narudzbenice' ? 'active' : ''}}">
				<a href="/user/narudzbenice"><i class="fa fa-fw fa-desktop"></i> Ne realizovane narudzbenice</a>
			</li> --}}
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>
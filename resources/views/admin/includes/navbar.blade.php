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
					<a href="{{ route('detalji', ['user' => Auth::user()->id]) }}"><i class="fa fa-fw fa-user"></i> Profil</a>
				</li>
				<li class="divider"></li>
				<li>
					{{-- LOGOUT ruta --}}
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
						{{ __('Izloguj se') }}
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
			<li
				class="{{ Request::path() === 'admin/proizvodi' || Request::path() === 'admin' || Request::path() === 'admin/home' ? 'active' : ''}}">
				<a href="/admin/proizvodi"><i class="fa fa-fw fa-table"></i> Proizvodi</a>
			</li>
			<li class="{{ Request::path() === 'admin/proizvodi/noviProizvod' ? 'active' : ''}}">
				<a href="/admin/proizvodi/noviProizvod"><i class="fa fa-fw fa-plus"></i> Novi proizvod</a>
			</li>
			<li class="{{ Request::path() === 'admin/korisnici' ? 'active' : ''}}">
				<a href="/admin/korisnici"><i class="fa fa-fw fa-user"></i> Korisnici</a>
			</li>

			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>
					Narudžbenice <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="demo" class="collapse">
					<li class="{{ Request::path() === 'admin/narudzbeniceRealizovane' ? 'active' : ''}}">
						<a href="{{ route('admin.fakture') }}"><i class="fa fa-fw fa-desktop"></i> Realizovane</a>
					</li>
					<li class="{{ Request::path() === 'admin/narudzbenice' ? 'active' : ''}}">
						<a href="{{ route('admin.neFakture') }}"><i class="fa fa-fw fa-desktop"></i> Nerealizovane</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>
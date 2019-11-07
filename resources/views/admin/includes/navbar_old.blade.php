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
		{{-- <a class="navbar-brand" href="/home">Admin Panel Home</a> --}}
		<a class="navbar-brand" href="/">Homepage</a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
				{{ Auth::user()->name }} <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
				</li>
				{{-- <li>
                  <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
              </li> --}}
				{{-- <li>
                  <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
              </li> --}}
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
			<li class="{{ Request::path() === 'admin/home' ? 'active' : ''}}">
				<a href="home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li>
			<li class="{{ Request::path() === 'admin/proizvodi' ? 'active' : ''}}">
				<a href="proizvodi"><i class="fa fa-fw fa-table"></i> Proizvodi</a>
			</li>
			<li class="{{ Request::path() === 'admin/korisnici' ? 'active' : ''}}">
				{{-- <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a> --}}
				<a href="korisnici"><i class="fa fa-fw fa-user"></i> Korisnici</a>
			</li>
			{{-- <li>
              <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
          </li> --}}
			<li class="{{ Request::path() === 'admin/narudzbenice' ? 'active' : ''}}">
				<a href="narudzbenice"><i class="fa fa-fw fa-desktop"></i> Narudzbenice</a>
			</li>
			{{-- <li>
              <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
          </li> --}}
			{{-- <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
              <ul id="demo" class="collapse">
                  <li>
                      <a href="#">Dropdown Item</a>
                  </li>
                  <li>
                      <a href="#">Dropdown Item</a>
                  </li>
              </ul>
          </li> --}}
			{{-- <li>
              <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
          </li> --}}
			{{-- <li>
              <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
          </li> --}}
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<html lang="en">
<head>
	<title>We Lib</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/matrix-style.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/matrix-media.css') }}" />
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
	<body>
		<!--Header-part-->
		<div id="header">
			<h1><a href="dashboard.html">We Lib</a></h1>
		</div>
		<!--close-Header-part--> 

		<!--top-Header-menu-->
		<div id="user-nav" class="navbar navbar-inverse">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					@guest
					<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
						@if (Route::has('register'))
					<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
						@endif
						@else
					<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
						</div>
					</li>
					@endguest
				</ul>
			</div>
		</div>
		<!--close-top-Header-menu-->

		<!--sidebar-menu-->
		<div id="sidebar"><a href="{{ url('home') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul>
				<li><a href="{{ url('home') }}"><i class="icon icon-home"></i> <span>Home</span></a> </li>
				<li><a href="{{ url('Pengembalian') }}"><i class="icon icon-th"></i> <span>Data Pengembalian</span></a> </li>
				<li><a href="{{ url('Peminjaman') }}"><i class="icon icon-th"></i> <span>Data Peminjaman</span></a> </li>
				<li><a href="{{ url('Buku') }}"><i class="icon icon-th"></i> <span>Data Buku</span></a></li>
				<li>
					<a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
				</li>
			</ul>
		</div>
		<!--sidebar-menu-->

		<!--main-container-part-->
		<main class="py-4">
			@yield('content')
		</main>
	</body>
</html>
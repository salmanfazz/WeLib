<link rel="stylesheet" href="{{ asset('/css/app.css') }}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="{{ url('home') }}">We-Lib</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="{{ url('Peminjaman') }}">Data Peminjaman</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('Pengembalian') }}">Data Pengembalian</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ url('Buku') }}">Data Buku</a></li>
			<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		</ul>	
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
</nav>
        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>

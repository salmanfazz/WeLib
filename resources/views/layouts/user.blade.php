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

		<!--sidebar-menu-->
		<div id="sidebar"><a href="{{ url('home-u') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul>
				<li class="active"><a href="{{ url('home-u') }}"><i class="icon icon-home"></i> <span>Home</span></a> </li>
				<li><a href=""><i class="icon icon-signal"></i> <span>Data Peminjaman</span></a> </li>
				<li><a href="{{ url('Buku-u') }}"><i class="icon icon-th"></i> <span>Data Buku</span></a></li>
			</ul>
		</div>
		<!--sidebar-menu-->

		<!--main-container-part-->
		<main class="py-4">
			@yield('content')
		</main>
	</body>
</html>
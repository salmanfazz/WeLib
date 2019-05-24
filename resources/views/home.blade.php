@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>Home</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
			<link rel="stylesheet" href="css/matrix-style.css" />
			<link rel="stylesheet" href="css/matrix-media.css" />
	</head>
	<body>
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
							<div class="card card-statistics">
								<center>
									<div class="card-body">
										<div class="clearfix">
											<div class="float-center">
												<i class="mdi mdi-poll-box text-danger icon-lg"></i>
											</div>
											<div class="float-center">
													<p class="mb-0">Peminjaman</p>
												<div class="fluid-container">
													<h3 class="font-weight-medium">{{ $peminjaman->count() }}</h3>
												</div>
											</div>
										</div>
											<p class="text-muted mt-3 mb-0">
												<i class="mdi mdi-alert-octagon mr-1 icon-book" aria-hidden="true"></i> Buku yang Dipinjam
											</p>
									</div>
								</center>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
							<div class="card card-statistics">
								<center>
									<div class="card-body">
										<div class="clearfix">
											<div class="float-center">
												<i class="mdi mdi-poll-box text-danger icon-lg"></i>
											</div>
											<div class="float-center">
													<p class="mb-0">Pengembalian</p>
												<div class="fluid-container">
													<h3 class="font-weight-medium">{{ $pengembalian->count() }}</h3>
												</div>
											</div>
										</div>
											<p class="text-muted mt-3 mb-0">
												<i class="mdi mdi-alert-octagon mr-1 icon-book" aria-hidden="true"></i> Buku yang Dikembalikan
											</p>
									</div>
								</center>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
							<div class="card card-statistics">
								<center>
									<div class="card-body">
										<div class="clearfix">
											<div class="float-center">
												<i class="mdi mdi-poll-box text-danger icon-lg"></i>
											</div>
											<div class="float-center">
													<p class="mb-0">Buku</p>
												<div class="fluid-container">
													<h3 class="font-weight-medium">{{ $buku->count() }}</h3>
												</div>
											</div>
										</div>
											<p class="text-muted mt-3 mb-0">
												<i class="mdi mdi-alert-octagon mr-1 icon-book" aria-hidden="true"></i> Buku yang Tersedia
											</p>
									</div>
								</center>
							</div>
						</div>
					</div>
			</div>
		</div>
	</body>
@endsection
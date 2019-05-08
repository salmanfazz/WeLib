@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>Home</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
							<div class="card card-statistics">
								<center>
									<div class="card-body">
										<div class="clearfix">
											<div class="float-left">
												<i class="mdi mdi-poll-box text-danger icon-lg"></i>
											</div>
											<div class="float-right">
													<p class="mb-0">Peminjaman</p>
												<div class="fluid-container">
													<h3 class="font-weight-medium">{{ $peminjaman->count() }}</h3>
												</div>
											</div>
										</div>
											<p class="text-muted mt-3 mb-0">
												<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Buku yang Dipinjam
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
											<div class="float-left">
												<i class="mdi mdi-poll-box text-danger icon-lg"></i>
											</div>
											<div class="float-right">
													<p class="mb-0">Pengembalian</p>
												<div class="fluid-container">
													<h3 class="font-weight-medium">{{ $pengembalian->count() }}</h3>
												</div>
											</div>
										</div>
											<p class="text-muted mt-3 mb-0">
												<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Buku yang Dikembalikan
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
											<div class="float-left">
												<i class="mdi mdi-poll-box text-danger icon-lg"></i>
											</div>
											<div class="float-right">
													<p class="mb-0">Buku</p>
												<div class="fluid-container">
													<h3 class="font-weight-medium">{{ $buku->count() }}</h3>
												</div>
											</div>
										</div>
											<p class="text-muted mt-3 mb-0">
												<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Buku yang Ada
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
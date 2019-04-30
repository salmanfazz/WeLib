@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>Data Peminjaman Buku</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div class = "container">
			@if(session('success'))
			<div class = "alert alert-success">
				{{ session('success') }}
			</div>
			@endif

			@if(session('error'))
				<div class = "alert alert-error">
					{{ session('error') }}
				</div>
			@endif
				<h1>Data Peminjaman Buku</h1>
	<table class = "table table-hover">
		<tr>
			<th> No </th>
			<th> Kode Buku </th>
			<th> Nama Buku</th>
			<th> Jenis Buku</th>
			<th> Kelas </th>
			<th> Kurikulum </th>
			<th> Penerbit </th>
			<th> Tanggal Peminjaman </th>
			<th colspan = "2" width = "auto"><center>Aksi</center><th>
		</tr>
	</table>
		</div>
	</body>
@endsection
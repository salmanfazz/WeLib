@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>Data Pengembalian Buku</title>
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
				<h1>Data Pengembalian Buku</h1>
	<table class = "table table-hover">
		<tr>
			<th> No </th>
			<th> ID Pengembalian </th>
			<th> Kode Buku </th>
			<th> Nama Buku</th>
			<th> Jenis Buku</th>
			<th> Kelas </th>
			<th> Penerbit </th>
			<th> Tanggal Pengembalian </th>
			<th colspan = "2" width = "auto"><center>Aksi</center><th>
		</tr>
			@foreach ($pengembalian as $row)
		<tr>
			<td> {{ isset($i) ? ++$i : $i = 1 }} </td>
			<td> {{ $row->id_peminjaman}} </td>
			<td> {{ $row->kd_buku}} </td>
			<td> {{ $row->nama_buku}} </td>
			<td> {{ $row->jenis_buku}} </td>
			<td> {{ $row->kelas}} </td>
			<td> {{ $row->penerbit}} </td>
			<td> {{ $row->tanggal_pengembalian}} </td>
			<td>
				<a class = "btn btn-success" href = "#">Edit</a>
			</td>
			<td>
				<form action = "{{ url('/guru', $row->id) }}" method = "POST">
				@method('DELETE')
				@csrf
				<button class = "btn btn-danger" type = "submit">Delete</button>
			</td>
		</tr>
		@endforeach
	</table>
		</div>
	</body>
@endsection
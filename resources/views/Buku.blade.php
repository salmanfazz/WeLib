@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>Data Buku</title>
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
				<h1>Data Buku</h1>
	<table class = "table table-hover">
		<tr>
			<th> No </th>
			<th> Kode Buku </th>
			<th> Judul Buku </th>
			<th> Kurikulum </th>
			<th> Kelas </th>
			<th> Penerbit </th>
			<th colspan = "2" width = "auto"><center>Aksi</center><th>
		</tr>
		@foreach ($buku as $row)
		<tr>
			<td> {{ isset($i) ? ++$i : $i = 1 }} </td>
			<td> {{ $row->kd_buku}} </td>
			<td> {{ $row->nama_buku}} </td>
			<td> {{ $row->kurikulum}} </td>
			<td> {{ $row->kelas}} </td>
			<td> {{ $row->penerbit}} </td>
			<td>
				<a class = "btn btn-success" href = "#">Edit</a>
			</td>
			<td>
				<form action = "{{ url('/penyimpanan', $row->id) }}" method = "POST">
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
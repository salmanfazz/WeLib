@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>Data Peminjaman Buku</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
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
							<br>
							<a class = "btn btn-primary" type = "submit" href = "{{ url('/Buku/create') }}"> Tambah Data </a>
								<h1>Data Buku</h1>
						<table class = "table table-hover">
							<tr>
								<th> No </th>
								<th> Kode Buku </th>
								<th> Judul Buku </th>
								<th> Kurikulum </th>
								<th> Kelas </th>
								<th> Penerbit </th>
								<th> Tempat Penyimpanan </th>
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
								<td> {{ $row->penyimpanan}} </td>
								<td>
									<a class = "btn btn-success" href = "{{ url('/Buku/' . $row->id . '/edit') }}">Edit</a>
								</td>
								<td>
									<form action = "{{ url('/Buku', $row->id) }}" method = "POST">
									@method('DELETE')
									@csrf
									<button class = "btn btn-danger" type = "submit">Delete</button>
								</td>
							</tr>
								@endforeach
						</table>
					</div>
			</div>
	</body>
@endsection
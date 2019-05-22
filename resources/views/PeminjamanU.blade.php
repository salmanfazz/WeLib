@extends('layouts.user')

@section('content')
<html>
	<head>
		<title>Data Peminjaman Buku</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
			<link rel="stylesheet" href="css/matrix-style.css" />
			<link rel="stylesheet" href="css/matrix-media.css" />
	</head>
	<body>
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb"> <a href="{{ url('') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
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
								<a class = "btn btn-primary" type = "submit" href = "{{ url('/Peminjaman/create') }}"> Tambah Data </a>
						<table class = "table table-hover">
							<tr>
								<th> No </th>
								<th> NIS </th>
								<th> Kode Buku </th>
								<th> Judul Buku </th>
								<th> Kelas </th>
								<th> Penerbit </th>
								<th> Tanggal Peminjaman </th>
								<th> Status </th>
							</tr>
								@foreach ($peminjaman as $row)
							<tr>
								<td> {{ isset($i) ? ++$i : $i = 1 }} </td>
								<td> {{ $row->nis}} </td>
								<td> {{ $row->kd_buku}} </td>
								<td> {{ $row->nama_buku}} </td>
								<td> {{ $row->kelas}} </td>
								<td> {{ $row->penerbit}} </td>
								<td> {{ $row->tanggal_peminjaman}} </td>
								<td> {{ $row->status}} </td>
							</tr>
								@endforeach
						</table>
					</div>
			</div>
	</body>
@endsection
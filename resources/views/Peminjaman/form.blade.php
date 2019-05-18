<html>
	<head>
		<title>Form Input Data Buku</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div class = "container">
			@if(session('error'))
					<div class = "alert alert-error">
						{{ session('error') }}
					</div>
				@endif
				@if (count($errors) > 0)
					<div class = "alert alert-danger">
						<strong> Perhatian </strong><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			<h1>Formulir Input Data Buku</h1>
		<form action = "{{ url('PeminjamanU') }}" method = "POST">
			@csrf
			@if(!empty($peminjaman))
				@method('PATCH')
			@endif
			<div class = "form-group">
				<label for = "nis">NIS</label>
					<input type = "text" class = "form-control" name = "nis" value = "{{ old('nis', @$peminjaman->nis) }}" placeholder="Masukkan NIS" />
				<label for = "kd_buku">Kode Buku</label>
					<input type = "text" class = "form-control" name = "kd_buku" value = "{{ old('kd_buku', @$peminjaman->kd_buku) }}" placeholder = "Masukkan Kode Buku" />
				<label for = "nama_buku">Nama Buku</label>
					<input type = "text" class = "form-control" name = "nama_buku" value = "{{ old('nama_buku', @$peminjaman->nama_buku) }}" placeholder = "Masukkan Nama Buku" />
				<label for = "kelas">Kelas</label>
					<input type = "text" class = "form-control" name = "kelas" value = "{{ old('kelas', @$peminjaman->kelas) }}" placeholder="Masukkan Kelas"/>
				<label for = "penerbit">Penerbit</label>
					<input type = "text" class = "form-control" name = "penerbit" value = "{{ old('penerbit', @$peminjaman->penerbit) }}" placeholder="Masukkan Nama Penerbit"/>
				<label for = "tanggal_peminjaman">Tanggal Peminjaman</label>
					<input type = "text" class = "form-control" name = "tanggal_peminjaman" value = "{{ old('tanggal_peminjaman', @$peminjaman->tanggal_peminjaman) }}" placeholder="yyyy/mm/dd"/>
				<label for = "status">Status</label>
					<input type = "text" class = "form-control" name = "status" value = "{{ old('status', @$peminjaman->status) }}" placeholder="Masukkan Status"/>
			</div>
				<input type = "submit" class = "btn btn-primary" value = "Simpan">
		</form>
	</body>
</html>
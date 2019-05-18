<html>
	<head>
		<title>Form Pengembalian Data Buku</title>
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
		<form action = "{{ url('PengembalianU') }}" method = "POST">
			@csrf
			@if(!empty($pengembalian))
				@method('PATCH')
			@endif
			<div class = "form-group">
				<label for = "nis">NIS</label>
					<input type = "text" class = "form-control" name = "nis" value = "{{ old('nis', @$pengembalian->nis) }}" placeholder="Masukkan NIS" />
				<label for = "kd_buku">Kode Buku</label>
					<input type = "text" class = "form-control" name = "kd_buku" value = "{{ old('kd_buku', @$pengembalian->kd_buku) }}" placeholder = "Masukkan Kode Buku" />
				<label for = "nama_buku">Nama Buku</label>
					<input type = "text" class = "form-control" name = "nama_buku" value = "{{ old('nama_buku', @$pengembalian->nama_buku) }}" placeholder = "Masukkan Nama Buku" />
				<label for = "kelas">Kelas</label>
					<input type = "text" class = "form-control" name = "kelas" value = "{{ old('kelas', @$pengembalian->kelas) }}" placeholder="Masukkan Kelas"/>
				<label for = "penerbit">Penerbit</label>
					<input type = "text" class = "form-control" name = "penerbit" value = "{{ old('penerbit', @$pengembalian->penerbit) }}" placeholder="Masukkan Nama Penerbit"/>
				<label for = "tanggal_kembali">Tanggal Pengembalian</label>
					<input type = "text" class = "form-control" name = "tanggal_kembali" value = "{{ old('tanggal_kembali', @$pengembalian->tanggal_kembali) }}" placeholder="yyyy/mm/dd"/>
				<label for = "status">Status</label>
					<input type = "text" class = "form-control" name = "status" value = "{{ old('status', @$pengembalian->status) }}" placeholder="Masukkan Status"/>
			</div>
				<input type = "submit" class = "btn btn-primary" value = "Simpan">
		</form>
	</body>
</html>
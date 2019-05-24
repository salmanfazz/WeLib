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
					<input type = "text" class = "form-control" name = "nis" value = "{{ old('nis', @$peminjaman->nis) }}" placeholder="Masukkan NIS" required pattern ="\d{10}" title ="Enter NIS Format 10 Digit Number Required"/>
				<label for = "kd_buku">Kode Buku</label>
					<input type = "text" class = "form-control" name = "kd_buku" value = "{{ old('kd_buku', @$peminjaman->kd_buku) }}" placeholder = "Masukkan Kode Buku" required pattern ="[KD]+([0-9]{3})" title ="Enter Kode Buku Format Example KD000"/>
				<label for = "nama_buku">Nama Buku</label>
					<input type = "text" class = "form-control" name = "nama_buku" value = "{{ old('nama_buku', @$peminjaman->nama_buku) }}" placeholder = "Masukkan Nama Buku" />
				<label for = "kelas">Kelas</label>
					<input type = "text" class = "form-control" name = "kelas" value = "{{ old('kelas', @$peminjaman->kelas) }}" placeholder="Masukkan Kelas"/>
				<label for = "penerbit">Penerbit</label>
					<input type = "text" class = "form-control" name = "penerbit" value = "{{ old('penerbit', @$peminjaman->penerbit) }}" placeholder="Masukkan Nama Penerbit"/>
				<label for = "tanggal_peminjaman">Tanggal Peminjaman</label>
					<input type="text" class = "form-control" name="tanggal_peminjaman" placeholder="YYYY/MM/DD" value = "{{ old('tanggal_peminjaman', @$peminjaman->tanggal_peminjaman) }}" required pattern="(?:19|20)[0-9]{2}/(?:(?:0[1-9]|1[0-2])/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter Date Format YYYY/MM/DD"/>
				<label for = "status">Status</label>
					<input type = "text" class = "form-control" name = "status" value = "Dipinjam" readonly/>
			</div>
				<input type = "submit" class = "btn btn-primary" value = "Simpan">
		</form>
	</body>
</html>
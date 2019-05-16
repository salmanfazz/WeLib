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
		<form action = "{{ url('Buku', @$buku->id) }}" method = "POST">
			@csrf
			@if(!empty($buku))
				@method('PATCH')
			@endif
			<div class = "form-group">
				<label for = "kd_buku">Kode Buku</label>
					<input type = "text" class = "form-control" name = "kd_buku" value = "{{ old('kd_buku', @$buku->kd_buku) }}" placeholder="Masukkan Kode Buku" />
				<label for = "name">Judul Buku</label>
					<input type = "text" class = "form-control" name = "nama_buku" value = "{{ old('nama_buku', @$buku->nama_buku) }}" placeholder = "Masukkan Judul Buku" />
				<label for = "kurikulum">Kurikulum</label><br>
			<div class = "form-check">
					<input type = "radio" class = "form-check-input" name = "kurikulum" value = "KTSP" {{ old('kurikulum', @$buku->kurikulum) == "KTSP" ? 'checked' : '' }}> 
				<label class = "form-check-label"> KTSP </label><br>
					<input type = "radio" class = "form-check-input" name = "kurikulum" value = "2013" {{ old('kurikulum', @$buku->kurikulum) == "2013" ? 'checked' : '' }}> 
				<label class = "form-check-label"> 2013 </label><br>
			</div>
				<label for = "kelas">Kelas</label>
					<input type = "text" class = "form-control" name = "kelas" value = "{{ old('kelas', @$buku->kelas) }}" placeholder="Masukkan Kelas"/>
				<label for = "penerbit">Penerbit</label>
					<input type = "text" class = "form-control" name = "penerbit" value = "{{ old('penerbit', @$buku->penerbit) }}" placeholder="Masukkan Nama Penerbit"/>
			</div>
				<input type = "submit" class = "btn btn-primary" value = "Simpan">
		</form>
	</body>
</html>
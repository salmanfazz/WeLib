<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanUController extends Controller
{
    public function index() 
	{
		// $data['Peminjaman'] = \DB::table('t_Peminjaman')
		// ->orderBy('nama_Peminjaman')
		// ->get();
		
		$data['peminjaman'] = \App\PeminjamanU::where('status', 'like', 'Dipinjam')->get();
		return view('PeminjamanU', $data);
	}

	public function create()
	{
		return view('Peminjaman.form');
	}

	public function store(Request $request)
	{
		$rule = [
			'nis'=>'required|string',
			'kd_buku'=>'required|string',
			'nama_buku'=>'required|string',
			'kelas'=>'required|string',
			'penerbit'=>'required|string',
			'tanggal_peminjaman'=>'required',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		
		$peminjaman = new \App\PeminjamanU;
		$peminjaman->nis					= $input['nis'];
		$peminjaman->kd_buku 				= $input['kd_buku'];
		$peminjaman->nama_buku 				= $input['nama_buku'];
		$peminjaman->kelas 					= $input['kelas'];
		$peminjaman->penerbit				= $input['penerbit'];
		$peminjaman->tanggal_peminjaman		= $input['tanggal_peminjaman'];
		$peminjaman->status					= $input['status'];
		$status = $peminjaman->save();
		
		if ($status) {
			return redirect('/PeminjamanU')->with('success', 'Data Berhasil Ditambahkan');
		} else {
			return redirect('/Peminjaman/create')->with('error', 'Data Gagal Ditambahkan');
		}
	}
	
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table peminjaman sesuai pencarian data
		$data['peminjaman'] = \App\PeminjamanU::where('nis','like',"%".$cari."%")->get();

			// mengirim data buku ke view index
		return view('PeminjamanU', $data);
	}
}
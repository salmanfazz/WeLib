<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianUController extends Controller
{
    public function index() 
	{
		// $data['Peminjaman'] = \DB::table('t_Peminjaman')
		// ->orderBy('nama_Peminjaman')
		// ->get();
		
		$data['pengembalian'] = \App\PengembalianU::where('status', 'like', 'Kembali')->get();
		return view('PengembalianU', $data);
	}

	public function create()
	{
		return view('Pengembalian.form');
	}

	public function store(Request $request)
	{
		$rule = [
			'nis'=>'required|string',
			'kd_buku'=>'required|string',
			'nama_buku'=>'required|string',
			'kelas'=>'required|string',
			'penerbit'=>'required|string',
			'tanggal_kembali'=>'required',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		
		$pengembalian = new \App\PengembalianU;
		$pengembalian->nis						= $input['nis'];
		$pengembalian->kd_buku 					= $input['kd_buku'];
		$pengembalian->nama_buku 				= $input['nama_buku'];
		$pengembalian->kelas 					= $input['kelas'];
		$pengembalian->penerbit					= $input['penerbit'];
		$pengembalian->tanggal_kembali			= $input['tanggal_kembali'];
		$pengembalian->status					= $input['status'];
		$status = $pengembalian->save();
		
		if ($status) {
			return redirect('/PengembalianU')->with('success', 'Data Berhasil Ditambahkan');
		} else {
			return redirect('/Pengembalian/create')->with('error', 'Data Gagal Ditambahkan');
		}
	}
	
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table pengembalian sesuai pencarian data
		$data['pengembalian'] = \App\PengembalianU::where('nis','like',"%".$cari."%")->get();

			// mengirim data buku ke view index
		return view('PengembalianU', $data);
	}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuUController extends Controller
{
    public function index() 
	{
		$data['buku'] = \App\Buku::orderBy('kd_buku')->get();
		return view('Buku-u', $data);
	}
	
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table buku sesuai pencarian data
		$data['buku'] = \App\Buku::where('nama_buku','like',"%".$cari."%")->get();

			// mengirim data buku ke view index
		return view('Buku-u', $data);
	}
}
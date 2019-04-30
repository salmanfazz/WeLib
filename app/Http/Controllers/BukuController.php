<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() 
	{
		// $data['Peminjaman'] = \DB::table('t_Peminjaman')
		// ->orderBy('nama_Peminjaman')
		// ->get();
		
		$data['buku'] = \App\Peminjaman::orderBy('kd_buku')->get();
		return view('Buku', $data);
	}
}

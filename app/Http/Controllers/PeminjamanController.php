<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index() 
	{
		// $data['Peminjaman'] = \DB::table('t_Peminjaman')
		// ->orderBy('nama_Peminjaman')
		// ->get();
		
		$data['peminjaman'] = \App\Peminjaman::orderBy('id_peminjaman')->get();
		return view('Peminjaman', $data);
	}
}

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
		
		$data['pengembalian'] = \App\Peminjaman::orderBy('id_Peminjaman')->get();
		return view('Peminjaman', $data);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index() 
	{
		// $data['Pengembalian'] = \DB::table('t_Pengembalian')
		// ->orderBy('nama_Pengembalian')
		// ->get();
		
		$data['pengembalian'] = \App\Pengembalian::orderBy('id_peminjaman')->get();
		return view('Pengembalian', $data);
	}
}

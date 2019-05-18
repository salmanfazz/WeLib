<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUController extends Controller
{
    public function index()
    {
    	$data['peminjaman'] = \App\PeminjamanU::orderBy('nis')->get();
        $data['buku'] = \App\Buku::orderBy('kd_buku')->get();
		return view('home-u',$data);
    }
}

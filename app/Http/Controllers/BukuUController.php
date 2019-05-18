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
}

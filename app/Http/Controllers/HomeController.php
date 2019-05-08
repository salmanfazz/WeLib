<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$peminjaman 	= \App\Peminjaman::get();
        $pengembalian   = \App\Pengembalian::get();
        $buku      		= \App\Buku::get();
		
        return view('home', compact('pengembalian', 'peminjaman', 'buku'));
    }
}

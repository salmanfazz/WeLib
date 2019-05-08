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
		
		$data['buku'] = \App\Buku::orderBy('kd_buku')->get();
		return view('Buku', $data);
	}
	
	public function destroy(Request $request, $id)
	{
		$buku = \App\Buku::find($id);
		$status = $buku->delete();
		
		// $status = \DB::table('t_buku')->where('id', $id)->delete();
		
		if ($status) {
			return redirect('/Buku')->with('success', 'Data berhasil dihapus');
		} else {
			return redirect('/Buku')->with('error', 'Data gagal dihapus');
		}
	}
}

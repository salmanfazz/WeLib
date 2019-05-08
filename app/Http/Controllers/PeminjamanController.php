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
		
		$data['peminjaman'] = \App\Peminjaman::where('status', 'like', 'Dipinjam')->get();
		return view('Peminjaman', $data);
	}
	
	public function destroy(Request $request, $id)
	{
		$peminjaman = \App\Peminjaman::find($id);
		$status = $peminjaman->delete();
		
		// $status = \DB::table('t_peminjaman')->where('id', $id)->delete();
		
		if ($status) {
			return redirect('/Peminjaman')->with('success', 'Data berhasil dihapus');
		} else {
			return redirect('/Peminjaman')->with('error', 'Data gagal dihapus');
		}
	}
}

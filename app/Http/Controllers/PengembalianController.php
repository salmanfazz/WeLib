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
		
		$data['pengembalian'] = \App\Pengembalian::where('status', 'like', 'Kembali')->get();
		return view('Pengembalian', $data);
	}
	
	public function destroy(Request $request, $id)
	{
		$pengembalian = \App\Pengembalian::find($id);
		$status = $pengembalian->delete();
		
		// $status = \DB::table('t_pengembalian')->where('id', $id)->delete();
		
		if ($status) {
			return redirect('/Pengembalian')->with('success', 'Data berhasil dihapus');
		} else {
			return redirect('/Pengembalian')->with('error', 'Data gagal dihapus');
		}
	}
	
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table pengembalian sesuai pencarian data
		$data['pengembalian'] = \App\Pengembalian::where('nis','like',"%".$cari."%")->get();

			// mengirim data buku ke view index
		return view('Pengembalian', $data);

	}
}

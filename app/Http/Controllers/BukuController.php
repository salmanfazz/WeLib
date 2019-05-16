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
	
	public function create()
	{
		return view('Buku.form');
	}
	
	public function store(Request $request)
	{
		$rule = [
			'kd_buku'=>'required|string',
			'nama_buku'=>'required|string',
			'kurikulum'=>'required|string',
			'kelas'=>'required|string',
			'penerbit'=>'required|string',
			'penyimpanan'=>'required|string',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		
		$buku = new \App\Buku;
		$buku->kd_buku		= $input['kd_buku'];
		$buku->nama_buku 	= $input['nama_buku'];
		$buku->kurikulum 	= $input['kurikulum'];
		$buku->kelas 		= $input['kelas'];
		$buku->penerbit		= $input['penerbit'];
		$buku->penyimpanan		= $input['penyimpanan'];
		$status = $buku->save();
		
		if ($status) {
			return redirect('/Buku')->with('success', 'Data Berhasil Ditambahkan');
		} else {
			return redirect('/Buku/create')->with('error', 'Data Gagal Ditambahkan');
		}
	}
	
	public function edit(Request $request, $id)
	{
		$data['buku'] = \DB::table('buku')->find($id);
		return view('Buku.form', $data);
	}
	
	public function update(Request $request, $id)
	{
		$rule = [
			'kd_buku'=>'required|string',
			'nama_buku'=>'required|string',
			'kurikulum'=>'required|string',
			'kelas'=>'required|string',
			'penerbit'=>'required|string',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		
		$buku = \App\Buku::find($id);
		// $status = $buku->update($input);
		$buku->kd_buku		= $input['kd_buku'];
		$buku->nama_buku 	= $input['nama_buku'];
		$buku->kurikulum 	= $input['kurikulum'];
		$buku->kelas 		= $input['kelas'];
		$buku->penerbit 	= $input['penerbit'];
		$status = $buku->update();
		
		if ($status) {
			return redirect('/Buku')->with('success', 'Data Berhasil Diubah');
		} else {
			return redirect('/Buku/create')->with('error', 'Data Berhasil Diubah');
		}
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

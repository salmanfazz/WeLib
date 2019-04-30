<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
	public $table = 'peminjaman';
	
	protected $fillable = [
		'id_peminjaman','kd_buku','nama_buku','kelas','penerbit','penyimpanan','tanggal_peminjaman'
	];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
	public $table = 'peminjaman';
	
	protected $fillable = [
		'nis','kd_buku','nama_buku','kelas','penerbit','tanggal_peminjaman','status'
	];
}
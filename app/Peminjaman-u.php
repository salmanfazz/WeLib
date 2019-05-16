<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman-u extends Model
{
	public $table = 'peminjaman';
	
	protected $fillable = [
		'id_peminjaman','kd_buku','nama_buku','kelas','penerbit','tanggal_peminjaman','status'
	];
}
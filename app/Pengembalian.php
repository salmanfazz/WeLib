<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
	public $table = 'pengembalian';
	
	protected $fillable = [
		'id_pengembalian','kd_buku','nama_buku','jenis_buku','kelas','penerbit','tanggal_pengembalian'
	];
}
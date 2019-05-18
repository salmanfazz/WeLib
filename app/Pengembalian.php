<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
	public $table = 'pengembalian';
	
	protected $fillable = [
		'nis','kd_buku','nama_buku','kelas','penerbit', 'tanggal_kembali', 'status'
	];
}
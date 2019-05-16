<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
	public $table = 'buku';
	
	protected $fillable = [
		'kd_buku','nama_buku','kurikulum','kelas','penerbit', 'penyimpanan'
	];
}
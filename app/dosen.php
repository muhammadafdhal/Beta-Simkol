<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dosen extends Model{

	use SoftDeletes;

	protected $file = ['nama','nip','sex','alamat'];
	protected $data = ['delete_at'];
}

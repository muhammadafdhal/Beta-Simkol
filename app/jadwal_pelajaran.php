<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_pelajaran extends Model
{
    //
    protected $primaryKey = 'jad_id';
    protected $fillable = ['jad_kls_id', 'jad_gr_id','jad_hari','jad_jam_pelajaran'];
}

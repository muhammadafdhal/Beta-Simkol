<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensiswa extends Model
{
    //
    protected $primaryKey = 'abs_id';
    protected $fillable = ['abs_sw_id','abs_izin','abs_sakit','abs_alpha','abs_ket'];
}

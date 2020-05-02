<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    //
    protected $primaryKey = 'mp_id';

    protected $fillable = ['mp_nama','mp_ket'];
}

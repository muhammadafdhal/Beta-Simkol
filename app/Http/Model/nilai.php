<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    //
    protected $primaryKey = 'nl_id';
    protected $fillable = ['nl_sw_id','nl_gr_id','nl_kls_id','nl_smst','nl_nilai'];
}

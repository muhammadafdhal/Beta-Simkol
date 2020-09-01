<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class infosekolah extends Model
{
    //
    protected $primaryKey = 'is_id';
    protected $fillable = ['is_judul','is_isi'];
}

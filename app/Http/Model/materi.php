<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    //
    protected $primaryKey = 'mt_id';
    protected $fillable = ['mt_gr_id','mt_judul','mt_materi'];
}

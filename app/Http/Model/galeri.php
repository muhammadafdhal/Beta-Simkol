<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    //
    protected $primaryKey = 'gl_id';
    protected $fillable = ['gl_judul','gl_gambar'];
}

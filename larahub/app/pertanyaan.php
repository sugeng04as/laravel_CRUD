<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    //

    protected $table = 'pertanyaan';
    protected $fillable = ['userid','judul', 'isi'];
    public $timestamps = false;
}

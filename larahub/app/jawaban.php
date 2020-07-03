<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    //
    protected $table = 'jawaban';
    protected $fillable = ['pertanyaan_id','userid','isi', 'tgl_in'];
    public $timestamps = false;
}

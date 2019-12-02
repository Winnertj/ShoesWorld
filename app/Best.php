<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Best extends Model
{
    protected $table = 'bests';
    protected $fillable = ['merek', 'harga'];
    //
    public $primaryKey = 'id';
    public $timestamps = true;
}

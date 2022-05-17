<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alloggi extends Model
{
    protected $table = 'alloggis';
    protected $guarded = ['id'];
    public $timestamps = false;

    
}

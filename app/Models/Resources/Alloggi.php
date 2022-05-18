<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alloggi extends Model
{
    protected $table = 'alloggi';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    
}

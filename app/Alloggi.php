<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alloggi extends Model
{
    protected $table = 'alloggis';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function getCitta(){
        return $this->citta;
    }
}

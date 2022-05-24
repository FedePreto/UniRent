<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Alloggi extends Model
{
    protected $table = 'alloggi';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function getFoto(){
        return $this->hasOne(Foto::class,'foto','id');
    }

    public function servizi(){
        return $this->belongsToMany(Incluso::class,'id','alloggi');
    }
}

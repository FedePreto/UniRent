<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Alloggi;


class Foto extends Model{
    protected $table = 'foto';
    protected $primaryKey = 'id';

    public function getAlloggio(){
        $this->belongsTo(Alloggi::class,'id','foto');
    }
}
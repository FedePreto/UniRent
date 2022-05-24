<?php

namespace App\Models;
 use App\Models\Resources\Servizi;

class Locatore{

    public function getAlloggiServizi(){
        return Servizi::all();
    }
    
}
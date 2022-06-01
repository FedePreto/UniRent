<?php

namespace App\Models;

use App\User;

class Annuncio {

    public function getLocatore($id){
        $locatore= User::find($id);
        return $locatore;
    }
}
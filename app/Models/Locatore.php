<?php

namespace App\Models;
 use App\Models\Resources\Alloggi;
 use Illuminate\Support\Facades\Auth;

class Locatore{

    public function getCatalogo(){
        $alloggi_user = Alloggi::where('locatore','=', Auth::id()); 
        return $alloggi_user->paginate(6);       
    }
}
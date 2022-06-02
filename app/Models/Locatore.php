<?php

namespace App\Models;
 use App\Models\Resources\ServiziVincoli;
 use App\Models\Resources\Alloggi;
 use Illuminate\Support\Facades\Auth;

class Locatore{

    public function getServiziVincoli(){
        $servizi =  ServiziVincoli::where('tipologia', '=' ,0)->get();
        $vincoli = ServiziVincoli::where('tipologia', '=' ,1)->get();
        return [$servizi, $vincoli];
    }

    public function getCatalogo(){
        $alloggi_user = Alloggi::where('locatore','=', Auth::id()); 
        return $alloggi_user->paginate(6);       
    }
}
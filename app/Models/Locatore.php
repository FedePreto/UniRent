<?php

namespace App\Models;
use App\Models\Resources\Alloggi;
use Illuminate\Support\Facades\Auth;
use App\Models\Resources\Users;
use App\Models\Resources\Richieste;

class Locatore{

    public function getCatalogo(){
        $alloggi_user = Alloggi::where('locatore','=', Auth::id()); 
        return $alloggi_user->paginate(6);       
    }
    public function getContratto($id_richiesta){
        $richiesta = Richieste::where('id',$id_richiesta);
        $alloggio = $richiesta->leftJoin('alloggi','alloggi.id','richieste.id')->select('alloggi.*');
        $locatore = $richiesta->leftJoin('users','users.id','richiesta.locatore')->select('users.*')->get();
        $locatario = $alloggio->leftJoin('users','users.id','alloggio.locatario')->select('users.*')->get();
        $alloggio = $alloggio->get();
        $result=[
            'alloggio'=>$alloggio,
            'locatore'=>$locatore,
            'locatario'=>$locatario,
        ];
        return $result;
    }
}
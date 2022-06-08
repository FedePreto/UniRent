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
        $alloggio = Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')->where('richieste.id','=',$id_richiesta)->select('alloggi.id','alloggi.indirizzo','alloggi.periodo_locazione','alloggi.prezzo',)->get();
        $locatore = Alloggi::join('users','alloggi.locatore','=','users.id',)->join('richieste','richieste.id_alloggio','=','alloggi.id')->where('richieste.id','=',$id_richiesta)->select('users.name','users.cognome')->get();
        $locatario = Richieste::join('users','richieste.locatario','=','users.id',)->where('richieste.id','=',$id_richiesta)->select('users.name','users.cognome')->get();
        $result=[
            'alloggio'=>$alloggio,
            'locatore'=>$locatore,
            'locatario'=>$locatario
        ];
        return $result;
    }
}
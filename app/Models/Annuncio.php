<?php

namespace App\Models;

use App\Models\Resources\Alloggi;
use App\User;
use App\Models\Resources\Incluso;
use App\Models\Resources\Messaggi;

class Annuncio {

    public function getLocatore($id){
        $locatore= User::find($id);
        return $locatore;
    }

    public function deleteServiziVincoli($id_alloggio){
        Incluso::where('alloggio',$id_alloggio)->delete();
    }

    public function getAlloggioServiziVincoli($id_alloggio){
        
        $alloggio_servizi = Incluso::join('servizi_vincoli','incluso.servizio_vincolo','=', 'servizi_vincoli.id')
                                   ->where('incluso.alloggio', $id_alloggio)
                                   ->where('servizi_vincoli.tipologia', 0)
                                   ->get(['servizi_vincoli.*']);
        
        $alloggio_vincoli = Incluso::join('servizi_vincoli','incluso.servizio_vincolo','=', 'servizi_vincoli.id')
                                   ->where('incluso.alloggio', $id_alloggio)
                                   ->where('servizi_vincoli.tipologia', 1)
                                   ->get(['servizi_vincoli.*']);
                                   
        return [$alloggio_servizi, $alloggio_vincoli];
    }

    public function deleteAnnuncio($id){
        $alloggio = Alloggi::where('id',$id);
        $incluso = Incluso::where('alloggio', $id);
        $messaggi = Messaggi::where('id_alloggio', $id);
        $alloggio->delete();
        $incluso->delete();
        $messaggi->delete();
    }
}
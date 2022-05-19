<?php

namespace App\Models;

use App\Models\Resources\Alloggi;
use App\Models\Resources\Foto;

class Catalogo {

    public function getCatalog(){
        
        $alloggi = Alloggi::leftjoin('foto','foto.id','=','alloggi.foto')
                    ->select('alloggi.*','foto.*');
        
        return $alloggi->paginate(6);
    }

    public function getCatalogSearch($citta=''){
        $alloggi = Alloggi::where('citta','LIKE',"%{{$citta}}%")->get();
        return $alloggi->paginate(6);
    }

}

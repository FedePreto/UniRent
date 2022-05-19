<?php

namespace App\Models;

use App\Models\Resources\Alloggi;


class Catalogo {

    public function getCatalog(){
        $alloggi = Alloggi::where('id','>',0);
        return $alloggi->paginate(6);
    }

    public function getCatalogSearch($citta=''){
        $alloggi = Alloggi::where('citta','LIKE',"%{{$citta}}%")->get();
        return $alloggi->paginate(6);
    }

}

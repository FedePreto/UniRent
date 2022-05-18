<?php

namespace App\Models;

use App\Models\Resources\Alloggi;


class Catalogo {

    public function getCatalog($citta,$paged=1,$tipologia=NULL){
        $alloggi = Alloggi::all();
        return $alloggi;/*->paginate($paged);*/
    }



}

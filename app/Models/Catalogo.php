<?php

namespace App\Models\Resources;

use App\Models\Alloggi;


class Catalogo {

    public function getCatalog($citta,$paged=1,$tipologia=NULL){
        $alloggi = Alloggi::where('citta',$citta);
        return $alloggi->paginate($paged);
    }


}

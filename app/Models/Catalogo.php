<?php

namespace app\Models\Resources;

use App\Models\Resources\Alloggi;
use App\Models\Resources\Incluso;

class Catalogo {

    public function getCatalog($citta,$paged=1,$tipologia=NULL){
        $alloggi = Alloggi::where('citta',$citta);
        return $alloggi->paginate($paged);
    }


}

<?php

namespace App\Models;

use App\Models\Resources\Alloggi;
use App\Models\Resources\Foto;
use PhpParser\Node\Stmt\ElseIf_;

class Catalogo {

    public function getCatalog(){
        $alloggi = Alloggi::leftjoin('foto','foto.id','=','alloggi.foto');      
        return $alloggi->paginate(6);
    }

    public function getCatalogSearch($citta,$tipo='tutte'){
        $alloggi = Alloggi::leftjoin('foto','foto.id','=','alloggi.foto')->where('citta','LIKE','%'.$citta.'%');
        if($tipo=='appartamento'){
            $alloggi = $alloggi->where('tipologia',0);
        }elseif($tipo=='posto_letto'){
            $alloggi = $alloggi->where('tipologia',1);
        }
        return $alloggi->paginate(6);
    }

}

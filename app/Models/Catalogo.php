<?php

namespace App\Models;

use App\Models\Resources\Alloggi;
use App\Models\Resources\Faq;
use App\Models\Resources\ServiziVincoli;
use App\Models\Resources\Incluso;

use Illuminate\Support\Facades\Log;

class Catalogo {

    public function getCatalog(){
        $alloggi = Alloggi::select('*');      
        return $alloggi->paginate(6);
    }

    public function getCatalogSearch($citta,$tipo='tutte',$filtri=null,$prezzo){
        
        //creo la tabella alloggi
        $alloggi = Alloggi::select('*')->where('citta','LIKE','%'.$citta.'%');

        if($filtri != null){
            //creao la tabella join tra alloggi e incluso
            $alloggi_filtri = Alloggi::leftJoin('incluso','incluso.alloggio','=','alloggi.id');
            if(count($filtri)>1){
                foreach(array_keys($filtri) as $key){
                    
                    $alloggi_filtri = $alloggi_filtri->orWhere('servizio_vincolo',$filtri[$key]);
                }
            }else{
                $alloggi_filtri = $alloggi_filtri->where('servizio_vincolo',$filtri[array_key_first($filtri)]);
            }
            //distinguo gli id degli alloggi in modo da poter confrontare questa tabella con quella degli alloggi
            $alloggi_filtri = $alloggi_filtri->select('alloggio')->distinct('alloggio')->get();
            $alloggi = $alloggi->whereIn('alloggi.id',$alloggi_filtri->toArray());

        }        
        //se gli alloggi si trovano nell'array $alloggi_filtri
        if($tipo=='appartamento'){
            $alloggi = $alloggi->where('tipologia',0);
        }elseif($tipo=='posto_letto'){
            $alloggi = $alloggi->where('tipologia',1);
        }
        
        //filtro per prezzo

            if(isset($prezzo->min)){
                $alloggi = $alloggi->orWhere('alloggi.prezzo','>=',$prezzo->min.'00');
            }
            if(isset($prezzo->max ) and  $prezzo->max =! 1){
                $alloggi = $alloggi->orWhere('prezzo','<=',$prezzo->max);
            }
       Log::info($alloggi->toSql());
        return $alloggi->paginate(6);
    }
    
    #Prende tutte le città con un appartamento registrato
    public function getCities(){
        $cities = Alloggi::all();
        return $cities;               
    }
    
    public function getFaq(){
        $faqs = Faq::all();
        return $faqs;
    }
    
    public function getCatalogoRegionale($regione){
        $alloggi = Alloggi::where('regione',$regione);
        return $alloggi->paginate(6);
    }

    public function getAlloggio($id){
        $alloggio =  Alloggi::find($id);
        return $alloggio;
    }
    public function getAlloggioServizi($id){
        $servizi =  Incluso::where('alloggio',$id)->get();
        Log::info($servizi);
        return $servizi;
    }
    public function getServizi(){
        return ServiziVincoli::all()->where('tipologia','0');
    }
}

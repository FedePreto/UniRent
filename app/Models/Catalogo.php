<?php

namespace App\Models;

use App\Models\Resources\Alloggi;
use App\Models\Resources\Faq;
use App\Models\Resources\Incluso;
use App\Models\Resources\Richieste;
use App\Models\Resources\ServiziVincoli;

use Illuminate\Support\Facades\Log;

class Catalogo {

    public function getCatalog(){
        $alloggi = Alloggi::select('*');      
        return $alloggi->paginate(6);
    }

    public function getCatalogSearch($citta,$tipo='tutte',$filtri=null,$prezzo){
        
        //creo la tabella alloggi
        $alloggi = Alloggi::where('citta','LIKE','%'.$citta.'%');
        
        //filtri
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
        //Log::info($prezzo['max']);
        if($prezzo != null){
            if(isset($prezzo['min'])){
                $alloggi = $alloggi->where('alloggi.prezzo','>=',$prezzo['min']);
            }
            if(isset($prezzo['max'])){
                $alloggi = $alloggi->where('alloggi.prezzo','<=',$prezzo['max']);
            }
        }
        //return$alloggi;

        //fare join con incluso e poi count(alloggi) group by alloggi
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

    public function getThisFaq($id){
        $faq = Faq::find($id);
        return $faq;
    }
    
    public function getCatalogoRegionale($regione){
        $alloggi = Alloggi::where('regione',$regione);
        return $alloggi->paginate(6);
    }

    public function getAlloggio($id){
        $alloggio =  Alloggi::find($id);
        return $alloggio;
    }
    public function getAlloggioIncluso($id){
        $servizi =  Incluso::where('alloggio',$id);
        return $servizi;
    }
    public function getServiziVincoli(){
        $servizi =  ServiziVincoli::where('tipologia', 0)->get();
        $vincoli = ServiziVincoli::where('tipologia',1)->get();
        return [$servizi, $vincoli];
    }

    public function getStatistiche($inizio_intervallo,$fine_intervallo,$tipo_camera){


        if((is_null($inizio_intervallo))and(is_null($fine_intervallo))and($tipo_camera==2)){
            $richieste= Richieste::all()->count();
            $rifiuti= Richieste::where('stato', 0)->count();
            $attese= Richieste::where('stato', 1)->count();
            $locazioni= Richieste::where('stato', 2)->count();
            $alloggi= Alloggi::all()->count();
        }elseif((is_null($inizio_intervallo))and(is_null($fine_intervallo))and($tipo_camera!=2)){
            $richieste= Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)->count();
            $rifiuti= Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)
                ->where('stato', 0)->count();
            $attese=Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)
                ->where('stato', 1)->count();
            $locazioni=Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)
                ->where('stato', 2)->count();
            $alloggi= Alloggi::where('tipologia', $tipo_camera)->count();
        }elseif((isset($inizio_intervallo))and(isset($fine_intervallo))and($tipo_camera==2)){
            $richieste= Richieste::where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)->count();
            $rifiuti= Richieste::where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)
                ->where('stato', 0)->count();
            $attese= Richieste::where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)
                ->where('stato', 1)->count();
            $locazioni= Richieste::where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)
                ->where('stato', 2)->count();
            $alloggi= Alloggi::where('created_at','>=',$inizio_intervallo)
                ->where('created_at','<=',$fine_intervallo)->count();
        }elseif((isset($inizio_intervallo))and(isset($fine_intervallo))and($tipo_camera!=2)){
            $richieste= Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)
                ->where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)->count();
            $rifiuti= Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)
                ->where('stato', 0)
                ->where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)->count();
            $attese=Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)
                ->where('stato', 1)
                ->where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)->count();
            $locazioni=Richieste::join('alloggi','richieste.id_alloggio','=','alloggi.id')
                ->where('alloggi.tipologia',$tipo_camera)
                ->where('stato', 2)
                ->where('data_richiesta','>=',$inizio_intervallo)
                ->where('data_richiesta','<=',$fine_intervallo)->count();
            $alloggi= Alloggi::where('tipologia', $tipo_camera)
                ->where('created_at','>=',$inizio_intervallo)
                ->where('created_at','<=',$fine_intervallo)->count();
        

        }
        return [$richieste,$rifiuti,$attese,$locazioni,$alloggi];
    }
}
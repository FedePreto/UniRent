<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Annuncio;
use App\Models\Locatore;
use Illuminate\Support\Facades\Log;
use App\Rules\GreaterThan;
class UserController extends Controller
{
    protected $_catalogModel ;
    protected $_annuncioModel;
    protected $_locatoreModel;


    public function __construct(){
        $this->_catalogModel = new Catalogo;
        $this->_annuncioModel = new Annuncio;
        $this->_locatoreModel = new Locatore;
        
    }
    //
    public function searchCatalogo(Request $ricerca ){
        //Log::info($ricerca);
        
        
        
        if($this->checkRequest($ricerca)){
            $prezzo = [];
            if(isset($ricerca->prezzo_min)){
                $prezzo['min'] = $ricerca->prezzo_min;
                
            }
            if(isset($ricerca->prezzo_max)){
                $prezzo['max'] = $ricerca->prezzo_max;
            }
            request()->validate([
               'prezzo_min'=>'min:0',
               'prezzo_max' =>['min:0',new GreaterThan($ricerca->prezzo_min)]
            ]);
            //Log::info($ricerca->except(['citta','tipo_camera','data_inizio','data_fine','prezzo_min','prezzo_max']));
            $alloggi = $this->_catalogModel->getCatalogSearch($ricerca->citta,$ricerca->tipo_camera,$ricerca->except(['citta','tipo_camera','data_inizio','data_fine','prezzo_min','prezzo_max']),$prezzo);
            //return $alloggi ;
        }else{
            $alloggi = $this->_catalogModel->getCatalog();
        }
        $servizi_vincoli = $this->_catalogModel->getServiziVincoli();
        return view('dashboard')
                    ->with('alloggi',$alloggi)
                    ->with('servizi',$servizi_vincoli[0])
                    ->with('request',$ricerca);          
    }

    public function getAnnuncio(int $id){
        $alloggio = $this->_catalogModel->getAlloggio($id);
        $servizi_vincoli = $this->_catalogModel->getServiziVincoli();
        $locatore = $this->_annuncioModel->getLocatore($alloggio->locatore);
        $sv_alloggio = $this->_annuncioModel->getAlloggioServiziVincoli($id); //Questo array è più comodo degli altri due passa
                                                                              //in due array separati vincoli [1] e servizi [0] dell'alloggio in questione
                                                                              //inoltre sia vincoli che servizi sono associati al rispettivo nome 
        Log::info($sv_alloggio[0]);
        Log::info($sv_alloggio[1]);
        Log::info($servizi_vincoli);  
        return view('annuncio')
                ->with('alloggio',$alloggio)
                ->with('servizi', $servizi_vincoli[0])
                ->with('vincoli', $servizi_vincoli[1])
                ->with('servizi_alloggio', $sv_alloggio[0])
                ->with('vincoli_alloggio', $sv_alloggio[1])
                ->with('locatore',$locatore);                
    }

    public function showMessaggi(){
        return view('message');
    }

    private function checkRequest(Request $request){
        if(count($request->all())<=2){
            if($request->citta == '' and $request->tipo_camera == 'tutte'){
                return false;
            }
        }
        return true;
    }
   
}

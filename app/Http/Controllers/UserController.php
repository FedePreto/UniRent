<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Annuncio;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    protected $_catalogModel ;
    protected $_annuncioModel;

    public function __construct(){
        $this->_catalogModel = new Catalogo;
        $this->_annuncioModel = new Annuncio;
    }
    //
    public function searchCatalogo(Request $ricerca ){
        Log::info($ricerca);
        if($ricerca!=null){
            $alloggi = $this->_catalogModel->getCatalogSearch($ricerca->citta,$ricerca->tipo_camera,$ricerca->except(['citta','tipo_camera','data_inizio','data_fine']));
        }else{
            $alloggi = $this->_catalogModel->getCatalog();
        }
        $servizi = $this->_catalogModel->getServiziVincoli();
        return view('dashboard')
                    ->with('alloggi',$alloggi)
                    ->with('servizi',$servizi)
                    ->with('request',$ricerca);          
    }

    public function getAnnuncio(int $id){
        $alloggio = $this->_catalogModel->getAlloggio($id);
        $servizi_inclusi = $this->_catalogModel->getAlloggioServizi($id);
        $servizivincoli = $this->_catalogModel->getServiziVincoli();
        $locatore= $this->_annuncioModel->getLocatore($alloggio->locatore);
        Log::info($servizivincoli);
        return view('annuncio')
                ->with('alloggio',$alloggio)
                ->with('servizivincoli',$servizivincoli)
                ->with('servizi_inclusi',$servizi_inclusi)
                ->with('locatore',$locatore);
                
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    protected $_catalogModel ;
    
    public function __construct(){
        $this->_catalogModel = new Catalogo;
    }
    //
    public function searchCatalogo(Request $ricerca ){
        Log::info($ricerca);
        if($ricerca!=null){
            $alloggi = $this->_catalogModel->getCatalogSearch($ricerca->citta,$ricerca->tipo_camera,$ricerca->except(['citta','tipo_camera','data_inizio','data_fine']));
        }else{
            $alloggi = $this->_catalogModel->getCatalog();
        }
        $servizi = $this->_catalogModel->getServizi();
        return view('dashboard')
                    ->with('alloggi',$alloggi)
                    ->with('servizi',$servizi)
                    ->with('request',$ricerca);          
    }

    public function getAnnuncio(Request $request,int $id){
        $alloggio = $this->_catalogModel->getAlloggio($id);
        $servizi_inclusi = $this->_catalogModel->getAlloggioServizi($id);
        $servizi = $this->_catalogModel->getServizi();
        Log::info($servizi);
        return view('annuncio')
                ->with('alloggio',$alloggio[0])
                ->with('servizi',$servizi)
                ->with('servizi_inclusi',$servizi_inclusi)
                ->with('request',$request);
    }
}

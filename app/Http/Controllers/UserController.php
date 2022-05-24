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
    public function searchCatalogo(Request $ricerca){
        Log::info($ricerca);
        $alloggi = $this->_catalogModel->getCatalogSearch($ricerca->citta,$ricerca->tipo_camera,$ricerca->except(['citta','tipo_camera','data_inizio','data_fine']));
        $servizi = $this->_catalogModel->getServizi();
        return view('dashboard')
                    ->with('alloggi',$alloggi)
                    ->with('servizi',$servizi);          
    }
}

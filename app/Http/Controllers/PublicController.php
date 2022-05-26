<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;
class PublicController extends Controller{
    protected $_catalogModel;

    public function __construct(){
        $this->_catalogModel = new Catalogo;
    }

    public function showCatalogo(){
        $alloggi = $this->_catalogModel->getCatalog();
        $servizi = $this->_catalogModel->getServizi();
        $request = new  Request;
        $request['citta'] = '';
        $request['tipo_camera'] = 'tutte';
        return view('dashboard')
                            ->with('alloggi',$alloggi)
                            ->with('servizi',$servizi)
                            ->with('request',$request);
                         
    }
    
    public function showCatalogoRegionale($regione){
        $alloggi = $this->_catalogModel->getCatalogoRegionale($regione);
        $request = new Request;
        $request['citta'] = '';
        $request['tipo_camere'] = 'tutte';
        return view('dashboard')
                ->with('alloggi',$alloggi)
                ->with('request',$request);       
    }
    
    # Mostra tutte le FAQ
    public function getFaq(){        
        $faqs = $this->_catalogModel->getFaq();
        return view('faq')
                ->with('faqs',$faqs);
    }


    public function showHomepage(){                        
        return view('homepage');                
    }
}
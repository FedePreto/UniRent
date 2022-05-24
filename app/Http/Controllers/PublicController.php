<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;

class PublicController extends Controller{
    protected $_catalogModel;

    public function __construct(){
        $this->_catalogModel = new Catalogo;
    }

    public function showCatalogo(){
        $alloggi = $this->_catalogModel->getCatalog();
        $servizi = $this->_catalogModel->getServizi();
        return view('dashboard')
                            ->with('alloggi',$alloggi)
                            ->with('servizi',$servizi);
                         
    }
    
    public function showCatalogoRegionale($regione){
        $alloggi = $this->_catalogModel->getCatalogoRegionale($regione);
        
        return view('dashboard')
                ->with('alloggi',$alloggi);       
    }
    
    # Mostra tutte le FAQ


    public function showHomepage(){
        $faqs = $this->_catalogModel->getFaq();                
        return view('homepage')
                ->with('faqs',$faqs);
    }
}
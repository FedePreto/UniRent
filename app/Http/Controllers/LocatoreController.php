<?php

namespace App\Http\Controllers;

use App\Models\Locatore;
use App\Models\Resources;
use App\Http\Requests\NewHomeRequest;
use App\Models\Catalogo;

class LocatoreController extends Controller{

    protected $_locatoreModel;
    protected $_catalogModel;

    public function __construct(){
        $this->_locatoreModel = new Locatore;
        $this->_catalogModel = new Catalogo;
    }
    public function index_loca(){
        $alloggi = $this->_locatoreModel->getCatalogo();
        return view('dashboard')
                ->with('alloggi',$alloggi);
    }
    public function index_lario(){
        $alloggi = $this->_catalogModel->getCatalog();
        return view('dashboard')
                ->with('alloggi',$alloggi);
    }
    public function addHome(){  
        return view('inserisci_offerta');   
    }
    public function storeHome(NewHomeRequest $request){     
    }
}
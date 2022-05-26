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
    public function index(){
        $alloggi = $this->_catalogModel->getCatalog();
        return view('dashboard')
                ->with('alloggi',$alloggi);
    }
    public function addHome(){     
    }
    public function storeHome(NewHomeRequest $request){     
    }
}
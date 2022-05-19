<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogo;

class UserController extends Controller
{
    protected $_catalogModel ;
    
    public function __construct(){
        $this->_catalogModel = new Catalogo;
    }
    //
    public function searchCatalogo(Request $ricerca){
        if(strlen($ricerca->citta)!=0){
            $alloggi = $this->_catalogModel->getCatalogSearch($ricerca->citta);
        }else{
            $alloggi = $this->_catalogModel->getCatalog();
            
        }
        return view('dashboard')
                    ->with('alloggi',$alloggi);
    }
}

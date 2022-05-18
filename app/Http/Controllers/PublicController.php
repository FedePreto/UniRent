<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;

class PublicController extends Controller{
    protected $_catalogModel;

    public function __construct(){
        $this->_catalogModel = new Catalogo;
    }

    public function showCatalogo(){
        $alloggi = $this->_catalogModel->getCatalog('Ancona');

        return view('dashboard')
                            ->with('alloggi',$alloggi);
                         
    }
}
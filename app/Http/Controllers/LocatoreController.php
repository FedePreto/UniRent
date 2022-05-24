<?php

namespace App\Http\Controllers;

use App\Models\Locatore;
use App\Models\Resources;
use App\Http\Requests\NewHomeRequest;

class LocatoreController extends Controller{

    protected $_locatoreModel;

    public function __construct(){
        $this->middleware('can:isLocatore');
        $this->_locatoreModel = new Locatore;
    }
    public function index(){
        return view('locatore');
    }
    public function addHome(){     
    }
    public function storeHome(NewHomeRequest $request){     
    }
}
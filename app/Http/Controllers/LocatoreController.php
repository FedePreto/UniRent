<?php

namespace App\Http\Controllers;

use App\Models\Locatore;
use App\Models\Resources\Alloggi;
use App\Http\Requests\NewHomeRequest;
use App\Models\Catalogo;
use Illuminate\Support\Facades\Auth;

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
    public function showProfilo(){
        return view('profilo');
    }
    public function index_lario(){
        $alloggi = $this->_catalogModel->getCatalog();
        $servizi = $this->_catalogModel->getServizi();
        return view('dashboard')
                ->with('alloggi',$alloggi)
                ->with('servizi',$servizi);
    }
    public function addHome(){  
        $servizi = $this->_locatoreModel->getAlloggiServizi();
        return view('inserisci_offerta')
               ->with('servizi',$servizi);   
    }

    //Funzione che viene attivata una volta che i dati sono stati validati
    public function storeHome(NewHomeRequest $request){
        $alloggio = new Alloggi;
        //Associa alle proprietà all'oggetto alloggio i dati validati
        $alloggio->fill($request->validated());
        $alloggio->foto = 1;
        $alloggio->locatore = Auth::id();
        $alloggio->save();
        return redirect()->action('LocatoreController@index_loca');
    }
}
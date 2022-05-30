<?php

namespace App\Http\Controllers;

use App\Models\Locatore;
use App\Models\Resources\Alloggi;
use App\Http\Requests\NewHomeRequest;
use App\Models\Catalogo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
        }
        else {
            $imageName = NULL;
        }

        $alloggio = new Alloggi;
        //Associa alle proprietà all'oggetto alloggio i dati validati
        $alloggio->fill($request->validated());
        $alloggio->locatore = Auth::id();
        $alloggio->foto = $imageName;
        $alloggio->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/img/alloggi';
            $image->move($destinationPath, $imageName);
        };

        return response()->json(['redirect' => route('locatore')]);
    }

    public function updateProfilo(Request $request, $id){

        $request->validate([
            'foto_profilo' => 'file|mimes:jpeg,png|max:5000',
            'name' => 'required',
            'cognome' => 'required',
            'data_nascita' => 'required',
            'email' => 'required',
            'cellulare' => 'required',
        ]);

        if ($request->hasFile('foto_profilo')) {
            $image = $request->file('foto_profilo');
            $imageName = $image->getClientOriginalName();
            $destinationPath = public_path() . '/img/foto_profilo';
            $oldImage = $destinationPath . Auth::foto_profilo();
            if(File::exists($oldImage) && Auth::foto_profilo()!='') {
                File::delete($oldImage);
            }
        }
        else {
            $imageName = NULL;
        }
        $user = User::find($id);
        $user->fill($request->validated());
        $user->foto_profilo = $imageName;
        $user->save();

        if (!is_null($imageName)) {
            
            $image->move($destinationPath, $imageName);
        }

        return response()->json(['redirect' => route('profilo')]);
    }
}
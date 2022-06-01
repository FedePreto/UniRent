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
use Carbon\Carbon;

class LocatoreController extends Controller
{

    protected $_locatoreModel;
    protected $_catalogModel;

    public function __construct()
    {
        $this->_locatoreModel = new Locatore;
        $this->_catalogModel = new Catalogo;
    }
    public function index_loca()
    {
        $alloggi = $this->_locatoreModel->getCatalogo();
        return view('dashboard')
            ->with('alloggi', $alloggi);
    }
    public function showProfilo()
    {
        return view('profilo');
    }
    public function index_lario()
    {
        $alloggi = $this->_catalogModel->getCatalog();
        $servizi = $this->_catalogModel->getServiziVincoli();
        return view('dashboard')
            ->with('alloggi', $alloggi)
            ->with('servizi', $servizi);
    }
    public function addHome()
    {
        $servizi_vincoli = $this->_locatoreModel->getAlloggiSV();
        return view('inserisci_offerta')
            ->with('servizi', $servizi_vincoli[0])
            ->with('vincoli', $servizi_vincoli[1]);
    }

    //Funzione che viene attivata una volta che i dati sono stati validati
    public function storeHome(NewHomeRequest $request)
    {
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $alloggio = new Alloggi;
        //Associa alle proprietà all'oggetto alloggio i dati validati
        $alloggio->fill($request->validated());
        $alloggio->locatore = Auth::id();
        $alloggio->foto = $imageName;
        $alloggio->created_at = Carbon::now()->format('Y-m-d');
        $alloggio->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/img/alloggi';
            $image->move($destinationPath, $imageName);
        };

        return response()->json(['redirect' => route('locatore')]);
    }

    public function updateProfilo(Request $request)
    {
        $data = $request->validate([
            'foto_profilo' => 'file|mimes:jpeg,png|max:5000',
            'name' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'sesso' => 'required|string',
            'data_nascita' => 'required|date',
            'email' => 'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
            'cellulare' => 'required|min:10|max:10',
            'descrizione' => 'string|max:2500'
        ]);


        if ($request->hasFile('foto_profilo')) {
            $image = $request->file('foto_profilo');
            $imageName = $image->getClientOriginalName();
            $destinationPath = public_path() . '/img/foto_profilo';
            $oldImage = $destinationPath . '/' . auth()->user()->foto_profilo;
            File::delete($oldImage);
            $image->move($destinationPath, $imageName);
        } else {
            $imageName = auth()->user()->foto_profilo;
        }

        $data['foto_profilo'] = $imageName;
        User::find(auth()->user()->id)->update($data);

        return redirect()->route('profilo')
               ->with('status', 'Profilo aggiornato correttamente!');
    }
}

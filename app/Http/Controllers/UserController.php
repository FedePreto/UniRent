<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Annuncio;
use App\Models\Locatore;
use Illuminate\Support\Facades\Log;
use App\Rules\GreaterThan;
use App\Models\Resources\Messaggi;
use Carbon\Carbon;
use App\Models\Messaggistica;

class UserController extends Controller
{
    protected $_catalogModel;
    protected $_annuncioModel;
    protected $_locatoreModel;
    protected $_messaggisticaModel;


    public function __construct()
    {
        $this->_catalogModel = new Catalogo;
        $this->_annuncioModel = new Annuncio;
        $this->_locatoreModel = new Locatore;
        $this->_messaggisticaModel = new Messaggistica;
        
    }
    //
    public function searchCatalogo(Request $ricerca ){
        //Log::info($ricerca);
        
        
        
        if($this->checkRequest($ricerca)){
            $prezzo = [];
            if (isset($ricerca->prezzo_min)) {
                $prezzo['min'] = $ricerca->prezzo_min;
                
            }
            if (isset($ricerca->prezzo_max)) {
                $prezzo['max'] = $ricerca->prezzo_max;
            }
            
            request()->validate([
                'prezzo_min'=>'min:0',
                'prezzo_max' =>['min:0',new GreaterThan($ricerca->prezzo_min)]
            ]);
            $filtri_particolari = [];
            if($ricerca->tipo_camera == 'appartamento'){
                if(isset($ricerca->superficie)){
                    $filtri_particolari['superficie'] = $ricerca->superficie;
                }
                if(isset($ricerca->n_camere)){
                    $filtri_particolari['n_camere'] = $ricerca->n_camere;
                }
                if(isset($ricerca->letti_ap)){
                    $filtri_particolari['letti_ap'] = $ricerca->letti_ap;
                }
            }
            if($ricerca->tipo_camera == 'posto_letto'){
                if(isset($ricerca->superficie)){
                    $filtri_particolari['superficie'] = $ricerca->superficie;
                }
                if(isset($ricerca->letti_pl)){
                    $filtri_particolari['letti_pl'] = $ricerca->letti_pl;
                }
            }

            $servizi_vincoli = $this->_catalogModel->getServiziVincoli();
            //Log::info($ricerca->except(['citta','tipo_camera','data_inizio','data_fine','prezzo_min','prezzo_max']));
            $alloggi = $this->_catalogModel->getCatalogSearch($ricerca->citta,$ricerca->tipo_camera,$ricerca->only($servizi_vincoli[0]),$prezzo,$filtri_particolari);
            //return $alloggi ;
        }else{
            $alloggi = $this->_catalogModel->getCatalog();
        }
        return view('dashboard')
            ->with('alloggi', $alloggi)
            ->with('servizi', $servizi_vincoli[0])
            ->with('request', $ricerca);
    }

    public function getAnnuncio(int $id)
    {
        $alloggio = $this->_catalogModel->getAlloggio($id);
        $servizi_vincoli = $this->_catalogModel->getServiziVincoli();
        $locatore = $this->_annuncioModel->getLocatore($alloggio->locatore);
        $sv_alloggio = $this->_annuncioModel->getAlloggioServiziVincoli($id); //Questo array è più comodo degli altri due passa
        //in due array separati vincoli [1] e servizi [0] dell'alloggio in questione
        //inoltre sia vincoli che servizi sono associati al rispettivo nome 
        Log::info($sv_alloggio[0]);
        Log::info($sv_alloggio[1]);
        Log::info($servizi_vincoli);
        return view('annuncio')
            ->with('alloggio', $alloggio)
            ->with('servizi', $servizi_vincoli[0])
            ->with('vincoli', $servizi_vincoli[1])
            ->with('servizi_alloggio', $sv_alloggio[0])
            ->with('vincoli_alloggio', $sv_alloggio[1])
            ->with('locatore', $locatore);
    }

    public function showMessaggi()
    {
        $chat=$this->_messaggisticaModel->getChat(auth()->user()->id);

        return view("message")
                ->with('chat',$chat);

    }

    public function showChat($alloggio,$destinatario)
    {
        $chat=$this->_messaggisticaModel->getChat(auth()->user()->id);
        $messaggi=$this->_messaggisticaModel->getConversazione(auth()->user()->id, $destinatario,$alloggio);

        return view("message")
                ->with('chat',$chat)
                ->with('messaggi',$messaggi)
                ->with('id', auth()->user()->id);

    }

    private function checkRequest(Request $request)
    {
        if (count($request->all()) <= 2) {
            if ($request->citta == '' and $request->tipo_camera == 'tutte') {
                return false;
            }
        }
        return true;
    }



    public function sendMessaggio(Request $request, $id_alloggio, $id_destinatario)
    {
        $request->validate([
            'contenuto' => 'required|string|max:2500'
        ]);

        $messaggio = new Messaggi([
            'contenuto' => $request->get('contenuto'),
            'data' => Carbon::now()->addHours(2),
            'mittente' => auth()->user()->id,
            'destinatario' => $id_destinatario,
            'id_alloggio' => $id_alloggio
        ]);
        $messaggio->save();
        return redirect()->route('annuncio', $id_alloggio)
            ->with('status', 'Messaggio inviato correttamente!');
    }
}

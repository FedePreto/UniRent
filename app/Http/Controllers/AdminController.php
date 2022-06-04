<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Catalogo;
use Illuminate\Http\Request;
use App\Models\Resources\Faq;
use App\Http\Requests\NewFaqRequest;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller{

    protected $_catalogModel;

    public function __construct(){
        $this->middleware('can:isAdmin'); 
        $this->_catalogModel = new Catalogo;
    }
    public function index(){
        $faqs = $this->_catalogModel->getFaq();
        return view('admin')
                ->with('faqs',$faqs);
    }

    public function updateFaq(Request $request,$id)
    {
        $data = $request->validate([
            'domanda' => 'required|string|max:190',
            'risposta' => 'required|string|max:190',
        ]);

        return redirect()->route('admin')
            ->with('status', 'Faq aggiornata correttamente!');
    }

    public function storeFaq(NewFaqRequest $request){
        $faq= new Faq;
        $faq->fill($request->validated());
        $faq->save();

        return redirect()->route('admin')
            ->with('status', 'Faq inserita correttamente!');
    }

    public function deleteFaq($id)
    {
        $faq = $this->_catalogModel->getThisFaq($id);
        $faq->delete();

        return  redirect()->route('admin')
            ->with('status', 'FAQ eliminata correttamente!');
    }
}
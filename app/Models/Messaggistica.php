<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Messaggi;
use App\User;
use App\Models\Resources\Alloggi;

class Messaggistica extends Model
{
    public function getChat($id){
        $chatMittente = Messaggi::where("mittente",$id)->distinct("destinatario","id_alloggio")->select("destinatario","id_alloggio")->get();
        $chatDestinatario = Messaggi::where("destinatario",$id)->distinct("mittente", "id_alloggio")->select("mittente","id_alloggio")->get();
        $contatti = [];
        foreach([$chatMittente,$chatDestinatario] as $chat){
            foreach ($chat as $message){
                if(isset($message->destinatario)){
                    $contatti[$message->destinatario]=$message->id_alloggio;
                } else {
                    $contatti[$message->mittente]=$message->id_alloggio;
                }
            }
        }
        $result = [];
        $i = 1;
        foreach(array_keys($contatti) as $key){
            $result[$i]=[
                "alloggio"=>Alloggi::where("id",$contatti[$key])->get(),
                "utente"=>User::where("id",$key)->get()
            ];
            $i++;
        }
        
        return $result;
    }

    /*Destinatario in questo caso è quello che è loggato nel sito, mentre il mittente è colui del quale ci interessa
    vedere la conversazione, questo metodo ritorna i messaggi/conversazioni salvati dell'utente loggato */
    public function getConversazione($destinatario, $mittente, $alloggio){

        $messaggi = Messaggi::select("contenuto","data","mittente","destinatario")->where("id_alloggio", $alloggio)
        ->whereIn("destinatario",[$destinatario,$mittente])->whereIn("mittente",[$destinatario,$mittente])
        ->orderBy("data","desc")->get();
        $mittente = User::where("id", $mittente)->get();
        $alloggio = Alloggi::where("id",$alloggio)->get();
        return ["messaggi"=>$messaggi,"mittente"=>$mittente,"alloggio"=>$alloggio];

    }
}

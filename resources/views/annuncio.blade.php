@extends('layouts.private')

@section('title', $alloggio->titolo)

@section('content')

<a href='{{url()->previous()}}'><- Torna indietro</a>

<div class="w3-content w3-padding" style="max-width:1654px">
    <div class="w3-row-padding">      
        <div style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding-right: 20px; padding-top: 0px ;padding-left: 0px;padding-bottom: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:258px;">
            <div class=" w3-container w3-margin-bottom " style=" width: 400px; max-height:300px; float:left; padding-left: 0px;">
                @include('helpers/alloggioImage',['attrs'=>"",'imgFile'=>$alloggio->foto])    
            </div > 
            <div>
                <div style="padding-top:10px;">
                    <span style="font-size:32px; color:black;">{{$alloggio->titolo}}</span>
                    <div style="float:right; padding-right: 10px; padding-top:12px;">
                        @if(($alloggio->tipologia)===1)
                            <span id="categoria" style="font-size: 12px; background: lightgray; border-radius: 4px; padding-left: 4px; padding-right: 4px; ">POSTI LETTO</span>
                        @else
                            <span id="categoria" style="font-size: 12px; background: lightgray; border-radius: 4px; padding-left: 4px; padding-right: 4px; ">APPARTAMENTI</span>
                        @endif           
                    </div>
                </div>
                <hr style="margin:5px; margin-bottom:10px;"> 
                <div>               
                    <i class="fa fa-map-o" style="color:black;"></i> {{$alloggio->regione}}, {{$alloggio->citta}}, {{$alloggio->cap}}, {{$alloggio->indirizzo}}, {{$alloggio->numero}} 
                    <div style="float:right;">
                        <span style="font-size:10px;"><i class="fa fa-upload" style="color:black;"></i> Aggiunto il: {{$alloggio->created_at}}12/02/2022   </span>
                        <span style="font-size:10px; padding-left:16px;"><i class="fa fa-refresh" style="color:black;"></i> Ultima modifica il: {{$alloggio->updated_at}}12/02/2022   </span>                                  
                    </div>                         
                </div>   
                <div style="padding-top:10px;">
                    <div style="width:100%">
                        <div style="padding-top:10px;"> 
                            <div style="float:left; width:230px;">
                                <span><i class="fa fa-calendar" style="color:black;"></i> Periodo Locazione: {{$alloggio->periodo_locazione}} Mesi</span>
                            </div>
                            <div style="float:right; ">
                                <span><i class="fa fa-odnoklassniki " style="color:black;"></i> Locatore: {{$locatore->name}} {{$locatore->cognome}}</span>
                            </div>
                            <div style="text-align:center;">
                                @if(($alloggio->tipologia)===0)
                                    <span><i class="fa fa-crop" style="color:black;"></i> Superficie Camera: {{$alloggio->superficie}} mq </span>
                                @else
                                    <span><i class="fa fa-crop" style="color:black;"></i> Superficie: {{$alloggio->superficie}} mq </span>
                                @endif
                            </div>
                        </div>
                    </div> 
                    <div style="width:100%">
                        <div style="padding-top:20px;"> 
                            <div style="float:right; ">
                                @if(($alloggio->opzionato)===1)
                                    <span style="color:red;">● Non Disponibile</span>
                                @else
                                    <span style="color:lightgreen;">● Disponibile</span>
                                @endif
                            </div>
                            @if(($alloggio->tipologia)===0)
                                <div style="float:left; ">                   
                                    @if(($alloggio->letti_pl)===1)
                                        <span ><i class="fa fa-bed" style="color:black;"></i> Camera Singola </span>
                                    @else
                                        <span ><i class="fa fa-bed" style="color:black;"></i> Camera Doppia </span>
                                    @endif
                                </div>
                                <div style="text-align:center;">
                                    <span ><i class="fa fa-bed" style="color:black;"></i> Camere Appartamento: {{$alloggio->n_camere}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-bed" style="color:black;"></i> Posti Letto Appartamento: {{$alloggio->letti_ap}}</span>                        
                                </div>   
                            @else
                                <div style="float:left; width:120px;"> 
                                    <span ><i class="fa fa-bed" style="color:black;"></i> Camere: {{$alloggio->n_camere}}</span>
                                </div>
                                <div style="text-align:center;">
                                    <span ><i class="fa fa-bed" style="color:black;"></i> Posti Letto: {{$alloggio->letti_ap}}</span> 
                                </div>  
                            @endif
                        </div>
                    </div> 
                    <div style="width:100%">
                        <div style="padding-top:15px;"> 
                            <div style="float:left; width:230px; padding-top:5px;">
                                <span style="font-size: 24px; color:black;">{{$alloggio->prezzo}}€ </span>/mese  
                            </div>
                            @can('isLocatore')
                                <div style="float:right; ">
                                    <button class="buttonAlloggio buttonAlloggio1 roundedcorners" >Visualizza Richieste</button>
                                    <button class="buttonAlloggio buttonAlloggio1 roundedcorners" >Modifica Annuncio</button>
                                    <button class="buttonAlloggio buttonAlloggio1 roundedcorners">Rimuovi Annuncio</button>
                                </div>
                            @endcan
                            @can('isLocatario')
                                <div style="float:right; ">
                                    @if(($alloggio->opzionato)===0)
                                        <button class="buttonAlloggio buttonAlloggio1 roundedcorners" >Richiedi </button>
                                    @endif
                                    <button class="buttonAlloggio buttonAlloggio1 roundedcorners" >Contatta Locatore</button>
                                    <button class="buttonAlloggio buttonAlloggio1 roundedcorners"></button>
                                </div>
                            @endcan           
                            <div style="text-align:center;">               
                            </div>
                        </div>
                    </div>                   
                </div>       
            </div>    
        </div>
    </div>
    <hr style="margin:0px; margin-bottom:16px;"> 
    <div class="w3-row-padding">
        <div style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding-right: 20px; padding-top: 0px ;padding-left: 20px;padding-bottom: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:320px; float:left; width:33%;">
            <div style="padding-top:10px;">
                <span style="font-size:26px; color:black;">Descrizione</span>
            </div>
            <hr style="margin:5px; margin-bottom:10px;"> >
            {{$alloggio->descrizione}}
        </div>
        <div style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding-right: 20px; padding-top: 0px ;padding-left: 20px;padding-bottom: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:320px; float:right; width:66%;">
            <div style="padding-top:10px;">
                <span style="font-size:26px; color:black;">Servizi Offerti e Vincoli di Affitto</span>
            </div>
            <hr style="margin:5px; margin-bottom:10px;"> 
            {{$alloggio->descrizione}}
        </div>
        <div style="text-align:center; width:1%;">          
        </div>
    </div>
    
        

    @isset($servizi)
    <hr>
    <p>Servizi offerti :</p>
    <ul class='my-filter'>
        @foreach($servizi as $servizio)
            <li>{{$servizio->nome}}</li>
        @endforeach
    </ul>
    @endisset

    Sesso: solo ragazzi/solo ragazze/nessun vincolo
                Tipo Studente: solo matricole/no matricole/nessun servizio_vincolo
</div>
@endsection
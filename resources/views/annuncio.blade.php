@extends('layouts.private')

@section('title', $alloggio->titolo)

@section('content')

<a href='{{url()->previous()}}'><- Torna indietro</a>

<div class="w3-content w3-padding" style="max-width:1654px">
    <div class="w3-row-padding">   
        
        <div style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding: 24px; padding-top: 3px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px;">
        <div class=" w3-container w3-margin-bottom " style=" width: 400px; height:300px; float:left;">
            @include('helpers/alloggioImage',['attrs'=>"",'imgFile'=>$alloggio->foto])    
        </div > 
        <div>
        <span style="font-size:32px;">{{$alloggio->titolo}}</span>
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
            
            <i class="fa fa-map-o"></i> {{$alloggio->regione}}, {{$alloggio->citta}}, {{$alloggio->cap}}, {{$alloggio->indirizzo}}, {{$alloggio->numero}} 
            <div style="float:right;">
            <span style="font-size:10px;"><i class="fa fa-upload"></i> Aggiunto il: {{$alloggio->created_at}}12/02/2022   </span>
            <span style="font-size:10px; padding-left:16px;"><i class="fa fa-refresh"></i> Ultima modifica il: {{$alloggio->updated_at}}12/02/2022   </span>
            
            </div>
              
            
        </div>
    
        <div style="padding-top:10px;">
        <div style="width:100%">
            <div style="padding-top:10px;"> 

                <div style="float:left; ">
                    <span><i class="fa fa-calendar"></i> Periodo Locazione: {{$alloggio->periodo_locazione}}</span>
                </div>

                <div style="float:right; ">
                    <span><i class="fa fa-crop"></i> Superficie: {{$alloggio->superficie}} mq </span>

                </div>

                <div style="text-align:center;">
                    @if(($alloggio->tipologia)===1)
                    <span ><i class="fa fa-bed"></i> Numero postiletto: {{$alloggio->letti}}</span>
                    @else
                    <span ><i class="fa fa-bed"></i> Numero appartamenti: {{$alloggio->letti}}</span>
                    @endif
                </div>

            </div>
        </div> 
        <div style="width:100%">
            <div style="padding-top:10px;"> 

                <div style="float:left; ">
                    <span>Locatore: {{$locatore->name}} {{$locatore->cognome}}</span>
                </div>

                <div style="float:right; ">
                @if(($alloggio->opzionato)===0)
                    <span style="color:red;">● Non Disponibile</span>
                    @else
                    <span style="color:lightgreen;">● Disponibile</span>
                    @endif
                </div>

                <div style="text-align:center;">
               
                </div>

            </div>
        </div> 
        
                    


            <div style="padding-top:10px;"> 
                <div style="float:left;">
                    
                </div>
                <div style="float:right;">
                    
                Sesso: solo ragazzi/solo ragazze/nessun vincolo
                Tipo Studente: solo matricole/no matricole/nessun vincolo
                Animali: Ammessi/Non ammesis
                Fumatori: Ammessi/non ammessi
                </div>
            </div>
            
            
            
           
            <div style="padding-top:10px;">
            <div style="float:left;">
                <span style="font-size: 24px;">{{$alloggio->prezzo}}€ </span>/mese  
            </div>
            <div style="float:right;">
                <button class="my-button">Modifica Annuncio</button>
                <button class="my-button">Rimuovi Annuncio</button>
            </div>
            </div>
        </div>    
    </div>
    </div>

    <div style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding: 24px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px;">
    <h2>Descrizione</h2>
    {{$alloggio->descrizione}}
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

    
</div>
@endsection
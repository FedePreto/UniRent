@extends('layouts.private')

@section('title', $alloggio->titolo)

@section('scripts')

@parent
<script>
    var modal = document.getElementById('modifica');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $(function() {
        $('#letti_posto_letto').hide();
        $('#Angolo_studio').hide();
        $('input[name = "tipologia"]').click(function() {
            var tipo = $('input[name = "tipologia"]:checked').val();
            if (tipo == 1) {
                $('#letti_posto_letto').show();
                $('#Angolo_studio').show();
                $('#Locale_Ricreativo').hide();
            } else {
                $('#letti_posto_letto').hide();
                $('#Angolo_studio').hide();
                $('#Locale_Ricreativo').show();
                $('#letti_pl').prop('selectedIndex', 0);
            }

        });
    });
</script>
@endsection

@section('content')

<a href='{{url()->previous()}}'><i class="fa fa-arrow-left"></i><b> Torna indietro</b></a>

<div class="w3-content w3-padding" style="max-width:1654px">
    <div class="w3-row-padding">
        <div style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding-right: 20px; padding-top: 0px ;padding-left: 0px;padding-bottom: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:258px;">
            <div class=" w3-container w3-margin-bottom " style=" width: 400px; max-height:300px; float:left; padding-left: 0px;">
                @include('helpers/alloggioImage',['attrs'=>"",'imgFile'=>$alloggio->foto])
            </div>
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
                        <span style="font-size:10px;"><i class="fa fa-upload" style="color:black;"></i> Aggiunto il: {{$alloggio->created_at}} </span>
                        <span style="font-size:10px; padding-left:16px;"><i class="fa fa-refresh" style="color:black;"></i> Ultima modifica il: {{$alloggio->updated_at}} </span>
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
                                <span><i class="fa fa-bed" style="color:black;"></i> Camera Singola </span>
                                @else
                                <span><i class="fa fa-bed" style="color:black;"></i> Camera Doppia </span>
                                @endif
                            </div>
                            <div style="text-align:center;">
                                <span><i class="fa fa-bed" style="color:black;"></i> Camere Appartamento: {{$alloggio->n_camere}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-bed" style="color:black;"></i> Posti Letto Appartamento: {{$alloggio->letti_ap}}</span>
                            </div>
                            @else
                            <div style="float:left; width:120px;">
                                <span><i class="fa fa-bed" style="color:black;"></i> Camere: {{$alloggio->n_camere}}</span>
                            </div>
                            <div style="text-align:center;">
                                <span><i class="fa fa-bed" style="color:black;"></i> Posti Letto: {{$alloggio->letti_ap}}</span>
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
                            <form style="float:right;">
                                <button class="buttonAlloggio buttonAlloggio1 roundedcorners">Visualizza Richieste</button>
                            </form>
                            <button style="float:right;" class="buttonAlloggio buttonAlloggio1 roundedcorners" onclick="document.getElementById('modifica').style.display='block'">Modifica Annuncio</button>
                            <form action="{{ route('annuncio.delete', $alloggio->id)}}" method="post" style="float:right;">
                                @csrf
                                @method('DELETE')
                                <!--Le form HTML non supportano il metodo delete o put so, when defining PUT, PATCH, or DELETE routes that are called from an HTML 
                                                              form, you will need to add a hidden _method field to the form. The value sent with the _method field will be used as the HTTP request method:-->
                                <button class="buttonAlloggio buttonAlloggio1 roundedcorners" type="submit">Rimuovi Annuncio</button>
                            </form>
                            @endcan
                            @can('isLocatario')
                            <div style="float:right; ">
                                @if(($alloggio->opzionato)===0)
                                <button class="buttonAlloggio buttonAlloggio1 roundedcorners">Richiedi </button>
                                @endif
                                <button class="buttonAlloggio buttonAlloggio1 roundedcorners">Contatta Locatore</button>
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
            <hr style="margin:5px; margin-bottom:10px;">
            {{$alloggio->descrizione}}
        </div>
        <div style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding-right: 20px; padding-top: 0px ;padding-left: 20px;padding-bottom: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:320px; float:right; width:66%;">
            <div style="padding-top:10px;">
                <span style="font-size:26px; color:black;">Servizi Offerti</span>
            </div>
            <hr style="margin:5px; margin-bottom:5px;">
            <div style="width:100%">
                <table style="width:100%">
                    @isset($servizivincoli)
                    @php
                    $i = 0;
                    $flag=0;
                    @endphp
                    @foreach($servizivincoli as $servizio)
                    @foreach($servizi_inclusi as $incluso)
                    @if(($servizio->id)===($incluso->servizio_vincolo))
                    @if(($servizio->tipologia)===0)
                    @switch($i)
                    @case(0)
                    <tr>
                        @php
                        $nomi= explode("_", $servizio->nome);
                        $i = 1;
                        $flag=1;
                        @endphp
                        <td style="width:33.3333%;  padding-top:5px;  padding-left:20px;"><span>
                                @foreach($nomi as $nome)
                                {{$nome}}
                                @endforeach
                            </span></td>
                        @break
                        @case(1)
                        @php
                        $nomi= explode("_", $servizio->nome);
                        $i = 2;
                        @endphp
                        <td style="width:33.3333%;  padding-top:5px;  padding-left:20px;"><span>
                                @foreach($nomi as $nome)
                                {{$nome}}
                                @endforeach
                            </span></td>
                        @break
                        @case(2)
                        @php
                        $nomi= explode("_", $servizio->nome);
                        $i = 0;
                        @endphp
                        <td style="width:33.3333%;  padding-top:5px;  padding-left:20px;"><span>
                                @foreach($nomi as $nome)
                                {{$nome}}
                                @endforeach
                            </span></td>
                    </tr>
                    @break
                    @endswitch
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                    @if($flag==0)
                    <tr>
                        <td style="width:33.3333%; font-size:18px; padding-top:5px;  padding-left:20px;"> <span>Nessun Servizio Offerto</span></td>
                    </tr>
                    @endif
                    @endisset
                </table>
            </div>
            <div style="padding-top:10px;">
                <span style="font-size:26px; color:black;">Vincoli Affitto</span>
            </div>
            <hr style="margin:5px; margin-bottom:5px;">
            <div style="width:100%">
                <table style="width:100%">
                    @isset($servizivincoli)
                    @php
                    $i = 0;
                    $flag=0;
                    @endphp
                    @foreach($servizivincoli as $servizio)
                    @foreach($servizi_inclusi as $incluso)
                    @if(($servizio->id)===($incluso->servizio_vincolo))
                    @if(($servizio->tipologia)===1)
                    @switch($i)
                    @case(0)
                    <tr>
                        @php
                        $nomi= explode("_", $servizio->nome);
                        $i = 1;
                        $flag=1;
                        @endphp
                        <td style="width:33.3333%;  padding-top:5px;  padding-left:20px;"><span>
                                @foreach($nomi as $nome)
                                {{$nome}}
                                @endforeach
                            </span></td>
                        @break
                        @case(1)
                        @php
                        $nomi= explode("_", $servizio->nome);
                        $i = 2;
                        @endphp
                        <td style="width:33.3333%;  padding-top:5px;  padding-left:20px;"><span>
                                @foreach($nomi as $nome)
                                {{$nome}}
                                @endforeach
                            </span></td>
                        @break
                        @case(2)
                        @php
                        $nomi= explode("_", $servizio->nome);
                        $i = 0;
                        @endphp
                        <td style="width:33.3333%;  padding-top:5px;  padding-left:20px;"><span>
                                @foreach($nomi as $nome)
                                {{$nome}}
                                @endforeach
                            </span></td>
                    </tr>
                    @break
                    @endswitch
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                    @if($alloggio->eta_max < 90) @if(!(is_null($alloggio->eta_max)))
                        <tr>
                            <td style="width:33.3333%; padding-top:5px;  padding-left:20px;"> <span>Range Età: 18 - {{$alloggio->eta_max}}</span></td>
                        </tr>
                        @php
                        $flag=1;
                        @endphp
                        @endif
                        @endif
                        @if($flag==0)
                        <tr>
                            <td style="width:33.3333%; font-size:18px; padding-top:5px;  padding-left:20px;"> <span>Nessun Vincolo di Affitto</span></td>
                        </tr>
                        @endif
                        @endisset
                </table>
            </div>
        </div>
    </div>
    <div style="text-align:center; width:1%;">
    </div>
</div>


<div id='modifica' class="row modal">
    <div class="col-75">
        <div class="container">
            {{ Form::open(array('route' => ['annuncio.update', $alloggio->id], 'method' => 'PUT', 'files' => true, 'class' => 'animate')) }}
            <div class="row">
                <span onclick="document.getElementById('modifica').style.display='none'" class="close" title="Chiudi Form Modifica">&times;</span>
                <div class="col-50">
                    <h3 style='text-align:center;'>Form di modifica annuncio</h3>
                    {{ Form::label('titolo', 'Titolo annuncio', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('titolo', $alloggio->titolo, ['class' => 'text-input-alloggio', 'id' => 'titolo']) }}
                    {{ Form::label('foto', 'Foto annuncio', ['class' => 'label-input-alloggio']) }}
                    {{ Form::file('foto', ['class' => 'text-input-alloggio', 'id' => 'foto']) }}
                    {{ Form::label('regione', 'Regione', ['class' => 'label-input-alloggio']) }}
                    {{ Form::select('regione',['Abruzzo'=>'Abruzzo',
                                           'Basilicata'=>'Basilicata',
                                           'Calabria'=>'Calabria',
                                           'Campania'=>'Campania', 
                                           'Emilia Romagna'=>'Emilia Romagna',
                                           'Friuli-Venezia Giulia'=>'Friuli-Venezia Giulia',
                                           'Lazio'=>'Lazio', 
                                           'Liguria'=>'Liguria',
                                           'Lombardia'=>'Lombardia',
                                           'Marche'=>'Marche',
                                           'Molise'=>'Molise',
                                           'Piemonte'=>'Piemonte',
                                           'Puglia'=>'Puglia',
                                           'Sardegna'=>'Sardegna',
                                           'Sicilia'=>'Sicilia',
                                           'Toscana'=>'Toscana',
                                           'Trentino-Alto Adige'=>'Trentino-Alto Adige',
                                           'Umbria'=>'Umbria',
                                           'Valle d\'Aosta'=>'Valle d\'Aosta',
                                           'Veneto'=>'Veneto'], $alloggio->regione, ['class' => 'text-input-alloggio','id' => 'regione', 'placeholder' => 'Seleziona una regione']) }}
                    {{ Form::label('citta', 'Città', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('citta', $alloggio->citta, ['class' => 'text-input-alloggio', 'id' => 'citta']) }}
                    {{ Form::label('cap', 'CAP', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('cap', $alloggio->cap, ['class' => 'text-input-alloggio', 'id' => 'cap']) }}
                    {{ Form::label('indirizzo', 'Indirizzo', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('indirizzo', $alloggio->indirizzo, ['class' => 'text-input-alloggio', 'id' => 'indirizzo']) }}
                    {{ Form::label('numero', 'N° civico', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('numero',$alloggio->numero, ['class' => 'text-input-alloggio','id' => 'numero']) }}
                    {{ Form::label('prezzo', 'Canone mensile', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('prezzo', $alloggio->prezzo, ['class' => 'text-input-alloggio', 'id' => 'prezzo']) }}


                    <div class="row">
                        <div class="col-50">
                            <label for="state">State</label>
                            <input class='text-input-alloggio' type="text" id="state" name="state" placeholder="NY">
                        </div>
                        <div class="col-50">
                            <label for="zip">Zip</label>
                            <input class='text-input-alloggio' type="text" id="zip" name="zip" placeholder="10001">
                        </div>
                    </div>
                </div>

                <div class="col-50">
                    {{ Form::label('tipologia', 'Tipologia Offerta', ['class' => 'label-input-alloggio']) }}

                    @if($alloggio->tipologia === 0)
                    <ul class="my-filter">
                        <li>{{ Form::radio('tipologia',0,true, ['id' => 'appartamento','class' => 'radio-input-alloggio']) }} {{ Form::label('appartamento','Appartamento', ['class' => 'label-input-alloggio']) }}</li>
                        <li>{{ Form::radio('tipologia',1,false, ['id' => 'posto_letto','class' => 'radio-input-alloggio']) }} {{ Form::label('posto_letto', 'Posto letto', ['class' => 'label-input-alloggio']) }}</li>
                    </ul>
                    @else
                    <ul class="my-filter">
                        <li>{{ Form::radio('tipologia',0,false, ['id' => 'appartamento','class' => 'radio-input-alloggio']) }} {{ Form::label('appartamento','Appartamento', ['class' => 'label-input-alloggio']) }}</li>
                        <li>{{ Form::radio('tipologia',1,true, ['id' => 'posto_letto','class' => 'radio-input-alloggio']) }} {{ Form::label('posto_letto', 'Posto letto', ['class' => 'label-input-alloggio']) }}</li>
                        @endif
                    </ul>
                    <div id=letti_posto_letto>
                        {{ Form::label('letti_pl', 'Posto letto in camera', ['class' => 'label-input-alloggio']) }}
                        {{ Form::select('letti_pl', [0 =>'Seleziona la tipologia',1 => 'Singola',2 => 'Doppia'], $alloggio->letti_pl, ['class' => 'text-input-alloggio','id' => 'letti_pl']) }}
                    </div>

                    {{ Form::label('superficie', 'Superficie in metri quadri:', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('superficie', $alloggio->superficie, ['class' => 'text-input-alloggio', 'id' => 'superficie']) }}
                    {{ Form::label('letti_ap', 'N° letti nell\'appartamento:', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('letti_ap', $alloggio->letti_ap, ['class' => 'text-input-alloggio', 'id' => 'letti_ap']) }}
                    {{ Form::label('n_camere', 'N° Camere:', ['class' => 'label-input-alloggio']) }}
                    {{ Form::text('n_camere', $alloggio->n_camere, ['class' => 'text-input-alloggio', 'id' => 'n_camere']) }}
                    {{ Form::label('periodo_locazione', 'Periodo di locazione:', ['class' => 'label-input-alloggio']) }}
                    {{ Form::select('periodo_locazione',[3 => '3 Mesi',6 => '6 Mesi', 12 => '1 Anno'], $alloggio->periodo_locazione, ['class' => 'text-input-alloggio','id' => 'periodo_locazione', 'placeholder' => 'Seleziona un periodo']) }}

                    @isset($servizi)

                        {{ Form::label('servizio', 'Servizi inlcusi', ['class' => 'label-input-alloggio']) }}
                            <table class='table-input-alloggio'>
                                <tr>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach( $servizi as $servizio)
                                    <td id={{$servizio->nome}}> {{Form::checkBox('servizi[]',$servizio->id,true)}}
                                        {{Form::label($servizio->nome)}}
                                    </td>
                                    @if($i%4 == 0)
                                </tr><tr>
                                    @endif
                                    @php
                                    $i++;
                                    @endphp
                                    @endforeach
                                    </tr>
                            </table>
                        </ul>
                    </div>
                    @endisset

                    @isset($vincoli)
                    <div class="wrap-input  rs1-wrap-input">
                        {{ Form::label('vuoiVincoli', 'Vuoi applicare dei vincoli?', ['class' => 'label-input-alloggio']) }}
                        <ul class="my-filter">
                            <li>{{ Form::radio('vuoiVincoli','No',true, ['id' => 'negativo']) }} {{ Form::label('negativo', 'No') }}</li>
                            <li>{{ Form::radio('vuoiVincoli','Si',false, ['id' => 'affermativo']) }} {{ Form::label('affermativo','Sì') }}</li>

                        </ul>
                    </div>
                    <div id="vincoli" class="w3-row-padding">
                        {{ Form::label('vincolo', 'Vincoli:', ['class' => 'label-input-alloggio']) }}
                        <ul class="w3-bar-block w3-text">

                            @foreach ($vincoli as $vincolo)

                            @php

                            if($vincolo->id === 17 || $vincolo->id === 18)
                            $name = 'sesso';

                            elseif($vincolo->id === 19 || $vincolo->id === 20)
                            $name = 'matricola';
                            @endphp

                            <li>{{Form::radio($name, $vincolo->id, false)}} {{Form::Label($vincolo->nome)}}</li>

                            @endforeach
                            <li>{{ Form::label('eta_max', 'Età massima: ') }}{{ Form::number('eta_max', 90, ['id' => 'eta_max']) }} </li>
                        </ul>
                    </div>
                    @endisset

                    <div class="wrap-input  rs1-wrap-input">
                        {{ Form::label('descrizione', 'Descrizione Appartamento:', ['class' => 'label-input-alloggio']) }}
                        {{ Form::textarea('descrizione', '', ['class' => 'text-input-alloggio', 'id' => 'descrizione']) }}
                    </div>
                    <h3>Payment</h3>
                    <label for="fname">Accepted Cards</label>
                    <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
                    <label for="cname">Name on Card</label>
                    <input class='text-input-alloggio' type="text" id="cname" name="cardname" placeholder="John More Doe">
                    <label for="ccnum">Credit card number</label>
                    <input class='text-input-alloggio' type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                    <label for="expmonth">Exp Month</label>
                    <input class='text-input-alloggio' type="text" id="expmonth" name="expmonth" placeholder="September">
                    <div class="row">
                        <div class="col-50">
                            <label for="expyear">Exp Year</label>
                            <input class='text-input-alloggio' type="text" id="expyear" name="expyear" placeholder="2018">
                        </div>
                        <div class="col-50">
                            <label for="cvv">CVV</label>
                            <input class='text-input-alloggio' type="text" id="cvv" name="cvv" placeholder="352">
                        </div>
                    </div>
                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <div style="width:100%; text-align: center;">
                    <div style="display: inline-block"><input type="submit" value="Conferma Modifica" class="btn green"></div>
                    <div style="display: inline-block"><input type="submit" value="Annulla Modifica" style="display: inline-block" class="btn red"></div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
        @endsection
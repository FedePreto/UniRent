@extends('layouts.private')

@section('title', 'Inserisci alloggio')

@section('scripts')

@parent
<script src="{{ asset('js/form_validation.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(function() {
        var actionUrl = "{{ route('addHome.store') }}";
        var formId = 'addHome';
        $(":input").on('blur', function(event) {
            var formElementId = $(this).attr('id'); //recupera l'id dell'oggetto che ha perso il focus 
            doElemValidation(formElementId, actionUrl, formId); //funzione js che prende il valore dell'elemento lo invia
            // al server usando ajax e processerà la ripsota proveniente dal server
        });
        $("#addHome").on('submit', function(event) {
            event.preventDefault(); //funzione che attiva il metodo associato all'evento di click sul bottone che blocca il meccanismo standard
            // di gestione dell'evento da parte del browser
            doFormValidation(actionUrl, formId); //attiva una funzione js definita da noi che invece implementa la submit
        });
    });
</script>
@endsection

@section('content')
<div class="static">
    <h2>Aggiungi Offerte</h2>
    <p>Utilizza questa form per inserire un nuovo alloggio nel Catalogo.</p>

    <div class="container-contact">
        <div class="wrap-contact">
            {{ Form::open(array('route' => 'addHome.store', 'id' => 'addHome', 'files' => true, 'class' => 'contact-form')) }}
            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('titolo', 'Titolo Appartamento:', ['class' => 'label-input-app']) }}
                {{ Form::text('titolo', '', ['class' => 'input-app', 'id' => 'titolo']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('regione', 'Regione:', ['class' => 'label-input-app']) }}
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
                                           'Veneto'=>'Veneto'], null, ['class' => 'input','id' => 'regione', 'placeholder' => 'Seleziona una regione']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('citta', 'Città:', ['class' => 'label-input-app']) }}
                {{ Form::text('citta', '', ['class' => 'input-app', 'id' => 'citta']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('cap', 'CAP:', ['class' => 'label-input-app']) }}
                {{ Form::text('cap', '', ['class' => 'input-app', 'id' => 'cap']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('indirizzo', 'Indirizzo:', ['class' => 'label-input-app']) }}
                {{ Form::text('indirizzo', '', ['class' => 'input-app', 'id' => 'indirizzo']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('numero', 'N°:', ['class' => 'label-input-app']) }}
                {{ Form::text('numero','', ['class' => 'input-app','id' => 'numero']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('prezzo', 'Prezzo:', ['class' => 'label-input-app']) }}
                {{ Form::text('prezzo', '', ['class' => 'input-app', 'id' => 'prezzo']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('descrizione', 'Descrizione Appartamento:', ['class' => 'label-input-app']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input-app', 'id' => 'descrizione']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('superficie', 'Superficie in metri quadri:', ['class' => 'label-input-app']) }}
                {{ Form::text('superficie', '', ['class' => 'input-app', 'id' => 'superficie']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('letti', 'N° Letti:', ['class' => 'label-input-app']) }}
                {{ Form::text('letti', '', ['class' => 'input-app', 'id' => 'letti']) }}
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('tipologia', 'Tipologia Offerta:', ['class' => 'label-input-app']) }}
                <ul class="my-filter">
                    <li>{{ Form::radio('tipologia',0,true, ['class' => 'input-app', 'id' => 'prezzo']) }} {{ Form::label('tipologia', 'Appartamento', ['class' => 'label-input']) }} </li>
                    <li>{{ Form::radio('tipologia',1,false, ['class' => 'input-app', 'id' => 'prezzo']) }} {{ Form::label('tipologia', 'Posto letto', ['class' => 'label-input']) }} </li>
                </ul>
            </div>


            <div class="w3-row-padding">
                {{ Form::label('servizio', 'Servizi inlcusi:', ['class' => 'label-input-app']) }}
                <ul class="w3-bar-block w3-text">
                    @foreach ( $servizi as $servizio)
                    <li>{{Form::checkBox($servizio->nome,$servizio->id)}} {{Form::Label($servizio->nome)}}</li>
                </ul>
            </div>

            <div class="wrap-input  rs1-wrap-input">
                {{ Form::label('foto', 'Immagine:', ['class' => 'label-input-app']) }}
                {{ Form::file('foto', ['class' => 'input-app', 'id' => 'foto']) }}
            </div>


            <div class="container-form-btn">
                {{ Form::submit('Aggiungi Alloggio', ['class' => 'form-btn1']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection

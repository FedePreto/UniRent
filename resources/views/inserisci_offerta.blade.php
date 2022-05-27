@extends('layouts.private')

@section('title', 'Inserisci alloggio')

@section('content')
<div class="static">
    <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo alloggio nel Catalogo</p>

    <div class="container-contact">
        <div class="wrap-contact">
            {{ Form::open(array('route' => 'addHome.store', 'id' => 'addproduct', 'files' => true, 'class' => 'contact-form')) }}
            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('titolo', 'Titolo Appartamento', ['class' => 'label-input-app']) }}
                {{ Form::text('titolo', '', ['class' => 'input-app', 'id' => 'titolo']) }}
                @if ($errors->first('titolo'))
                <ul class="errors">
                    @foreach ($errors->get('titolo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('regione', 'Regione', ['class' => 'label-input-app']) }}
                {{ Form::select('regione',['Abruzzo', 'Basilicata', 'Calabria', 'Campania', 'Emilia Romagna', 'Friuli-Venezia Giulia', 'Lazio', 'Liguria', 'Lombardia', 'Marche', 'Molise', 'Piemonte', 'Puglia'=>'Puglia', 'Sardegna', 'Sicilia', 'Toscana', 'Trentino-Alto Adige', 'Umbria', 'Valle d\'Aosta', 'Veneto'], null, ['class' => 'input','id' => 'regione', 'placeholder' => 'Seleziona una regione']) }}
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('citta', 'Città', ['class' => 'label-input-app']) }}
                {{ Form::text('citta', '', ['class' => 'input-app', 'id' => 'citta']) }}
                @if ($errors->first('citta'))
                <ul class="errors">
                    @foreach ($errors->get('citta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('cap', 'CAP', ['class' => 'label-input-app']) }}
                {{ Form::text('cap', '', ['class' => 'input-app', 'id' => 'cap']) }}
                @if ($errors->first('cap'))
                <ul class="errors">
                    @foreach ($errors->get('cap') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('indirizzo', 'Indirizzo', ['class' => 'label-input-app']) }}
                {{ Form::text('indirizzo', '', ['class' => 'input-app', 'id' => 'indirizzo']) }}
                @if ($errors->first('indirizzo'))
                <ul class="errors">
                    @foreach ($errors->get('indirizzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('numero', 'N°', ['class' => 'label-input-app']) }}
                {{ Form::text('numero','', ['class' => 'input-app','id' => 'numero']) }}
                @if ($errors->first('numero'))
                <ul class="errors">
                    @foreach ($errors->get('numero') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input-app']) }}
                {{ Form::text('prezzo', '', ['class' => 'input-app', 'id' => 'prezzo']) }}
                @if ($errors->first('prezzo'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('descrizione', 'Descrizione Appartamento', ['class' => 'label-input-app']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input-app', 'id' => 'descrizione']) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('superficie', 'Superficie in metri quadri', ['class' => 'label-input-app']) }}
                {{ Form::text('superficie', '', ['class' => 'input-app', 'id' => 'superficie']) }}
                @if ($errors->first('superficie'))
                <ul class="errors">
                    @foreach ($errors->get('superficie') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('letti', 'N° Letti', ['class' => 'label-input-app']) }}
                {{ Form::text('letti', '', ['class' => 'input-app', 'id' => 'letti']) }}
                @if ($errors->first('letti'))
                <ul class="errors">
                    @foreach ($errors->get('letti') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('tipologia', 'Tipologia Offerta', ['class' => 'label-input-app']) }}
                <ul class="my-filter">
                <li>{{ Form::radio('tipologia',0,false, ['class' => 'input-app', 'id' => 'prezzo']) }} {{ Form::label('tipologia', 'Appartamento', ['class' => 'label-input']) }} </li>
                <li>{{ Form::radio('tipologia',1,false, ['class' => 'input-app', 'id' => 'prezzo']) }} {{ Form::label('tipologia', 'Posto letto', ['class' => 'label-input']) }} </li></li>
                </ul>
            </div>

            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('foto', 'Immagine', ['class' => 'label-input-app']) }}
                {{ Form::file('foto', ['class' => 'input-app', 'id' => 'foto']) }}
                @if ($errors->first('foto'))
                <ul class="errors">
                    @foreach ($errors->get('foto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            
            <div class="container-form-btn">                
                {{ Form::submit('Aggiungi Alloggio', ['class' => 'form-btn1']) }}
            </div>            
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection






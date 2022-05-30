@extends('layouts.private')

@section('title', 'Profilo')

@section('scripts')

@parent
<script language="JavaScript" type="text/javascript" src="{{ asset('js/form_validation.js') }}"></script>
<script language="JavaScript" type="text/javascript">
  $(function() {
    $("#card-modifica").hide();
    $("#annulla_modifica").hide();
    $(".btn").click(function() {
      $("#card-modifica").toggle();
      $("#modifica").toggle();
      $("#annulla_modifica").toggle();
    });
  });

  $(function() {
    var actionUrl = "{{ route('updateProfilo.update') }}";
    var formId = 'updateProfile';
    $(":input").on('blur', function(event) {
      var formElementId = $(this).attr('id'); //recupera l'id dell'oggetto che ha perso il focus 
      doElemValidation(formElementId, actionUrl, formId); //funzione js che prende il valore dell'elemento lo invia
      // al server usando ajax e processerà la ripsota proveniente dal server
    });
    $("#updateProfile").on('submit', function(event) {
      event.preventDefault(); //funzione che attiva il metodo associato all'evento di click sul bottone che blocca il meccanismo standard
      // di gestione dell'evento da parte del browser
      doFormValidation(actionUrl, formId); //attiva una funzione js definita da noi che invece implementa la submit
    });
  });
</script>
@endsection

@section('content')

<div class="row-card">
  <div class="column-card">
    <h3 style="text-align:center">Il tuo profilo</h3>
    <div style="font-size: 20px" class="card">
      @include('helpers/profileImage', ['imgFile'=>auth()->user()->foto_profilo])
      <p><b>Nome: </b>{{auth()->user()->name}}</p>
      <p><b>Cognome: </b>{{auth()->user()->cognome}}</p>

      @switch(auth()->user()->livello)
      @case(0)
      <p>Ruolo: Admin</p>
      @break

      @case(1)
      <p>Ruolo: Locatore</p>
      @break

      @case(2)
      <p>Ruolo: Locatario</p>
      @break
      @endswitch

      <p><b>Data di nascita: </b>{{auth()->user()->data_nascita}}</p>
      <p><b>Email: </b>{{auth()->user()->email}}</p>
      <p><b>Cellulare: </b>{{auth()->user()->cellulare}}</p>
      <p><button id="modifica" class="btn btn-green">Modifica</button></p>
      <p><button id="annulla_modifica" class="btn btn-red">Annulla Modifica</button></p>
    </div>
  </div>
  <div class="column-card">
    <h3 style="text-align:center">Ciao <b>{{auth()->user()->name}}</b></h3>

    <div id="card-modifica" class="card">
      <h5>ricompila i campi dei dati che desideri modificare</h5>
      {{ Form::open(array('route' => 'updateProfilo.update', 'id' => 'updateProfile', 'files' => true)) }}
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-id-card']) }}
        {{ Form::label('name', ' Nome', ['class' => 'label-input-card']) }}
        {{ Form::text('name',auth()->user()->name, ['class' => 'input-card', 'id' => 'name']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-id-card']) }}
        {{ Form::label('cognome', ' Cognome', ['class' => 'label-input-card']) }}
        {{ Form::text('cognome',auth()->user()->cognome, ['class' => 'input-card', 'id' => 'cognome']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-birthday-cake']) }}
        {{ Form::label('data_nascita', ' Data di Nascita', ['class' => 'label-input-card']) }}
        {{ Form::date('data_nascita', auth()->user()->data_nascita, ['class' => 'input-card', 'id' => 'data_nascita']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-envelope ']) }}
        {{ Form::label('email', ' Email', ['class' => 'label-input-card']) }}
        {{ Form::text('email', auth()->user()->email, ['class' => 'input-card', 'id' => 'email']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-phone']) }}
        {{ Form::label('cellulare', ' Cellulare', ['class' => 'label-input-card']) }}
        {{ Form::text('cellulare', auth()->user()->cellulare, ['class' => 'input-card', 'id' => 'cellulare']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-user-circle ']) }}
        {{ Form::label('foto', 'Immagine profilo', ['class' => 'label-input-card']) }}
        {{ Form::file('foto', ['class' => 'input-card', 'id' => 'foto']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::submit('Salva', ['class' => 'btn-green']) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@endsection
@extends('layouts.private')
@section('title', 'Profilo')
@section('scripts')

@parent
<script language="JavaScript" type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script language="JavaScript" type="text/javascript">
  $(function() {
    $("#card-modifica").hide();
    $("#annulla_modifica").hide();
    $("button").click(function() {
      $("#card-modifica").animate({
        left: '250px'
      });
      $("#card-modifica").toggle();
      $("#modifica").toggle();
      $("#annulla_modifica").toggle();
    });
  });
</script>
@endsection

@section('content')

<div class="row-card">
  <div class="column-card">
    <h3 style="text-align:center">Il tuo profilo</h3>
    <div class="card label-input-app">
      <img src="{{asset('img/') auth()->user()->foto_profilo}}" alt="Immagine Profilo" style="width:100%">
      <p><b>Nome: </b>{{auth()->user()->name}}</p>
      <p><b>Cognome: </b>{{auth()->user()->cognome}}</p>
      <p class="title profile">{{auth()->user()->name}} {{auth()->user()->cognome}}</p>

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
      <p><button id="modifica" class="btn-green">Modifica</button></p>
      <p><button id="annulla_modifica" class="btn-red">Annulla Modifica</button></p>
    </div>
  </div>
  <div class="column-card">
  <h3 style="text-align:center">Ciao <b>{{auth()->user()->name}}</b></h3>
    <div id="card-modifica" class="card">
    <h5>ricompila i campi dei dati che desideri modificare</h5>
      {{ Form::open(array('route' => 'addHome.store', 'id' => 'addHome', 'files' => true)) }}
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-id-card']) }}
        {{ Form::label('name', ' Nome', ['class' => 'label-input-app']) }}
        {{ Form::text('name',auth()->user()->name, ['class' => 'input-app', 'id' => 'name']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-id-card']) }}
        {{ Form::label('cognome', ' Cognome', ['class' => 'label-input-app']) }}
        {{ Form::text('cognome',auth()->user()->cognome, ['class' => 'input-app', 'id' => 'cognome']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-birthday-cake']) }}
        {{ Form::label('data_nascita', ' Data di Nascita', ['class' => 'label-input-app']) }}
        {{ Form::date('data_nascita', auth()->user()->data_nascita, ['class' => 'input-app', 'id' => 'data_nascita']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-envelope ']) }}
        {{ Form::label('email', ' Email', ['class' => 'label-input-app']) }}
        {{ Form::text('email', auth()->user()->email, ['class' => 'input-app', 'id' => 'email']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-phone']) }}
        {{ Form::label('cellulare', ' Cellulare', ['class' => 'label-input-app']) }}
        {{ Form::text('cellulare', auth()->user()->cellulare, ['class' => 'input-app', 'id' => 'cellulare']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::label('','', ['class' => 'fa fa-user-circle ']) }}
        {{ Form::label('foto', 'Immagine profilo', ['class' => 'label-input-app']) }}
        {{ Form::file('foto', auth()->user()->foto, ['class' => 'input-app', 'id' => 'foto']) }}
      </div>
      <div class="wrap-input  rs1-wrap-input">
        {{ Form::submit('Salva', ['class' => 'btn-green']) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
<!--
<div class="column-card" id = "card-modifica">
<h2 style="text-align:center">Modifica Profilo {{auth()->user()->username}}</h2>
<div class="card">
  <img src="{{asset('img/evil_abed.jpg')}}" alt="Immagine Profilo" style="width:100%">
  <h1>{{auth()->user()->name}} {{auth()->user()->cognome}}</h1>
 
  @switch(auth()->user()->livello)
    @case(0)
        <p class="title-profile"> Admin </p>
        @break

    @case(1)
        <p class="title-profile"> Locatore </p>
        @break

    @case(2)
        <p class="title-profile"> Locatario </p>
        @break
   @endswitch

  <p>{{auth()->user()->data_nascita}}</p>
  <p>{{auth()->user()->email}}</p>
  <p>{{auth()->user()->cellulare}}</p>
  <p><button class="my-button" style="width:100%">Conferma Modifica</button></p>
</div>
</div> -->

@endsection
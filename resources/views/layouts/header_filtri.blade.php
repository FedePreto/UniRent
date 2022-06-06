<!-- Header -->
<header id="portfolio">

<link rel="stylesheet" href="jqueryui/style.css">
<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
<script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

  <!-- Searchbar -->
  <!--<span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>-->
  <div class="w3-container" style="padding-top:50px">
    <h1>Cerca la tua città:</h1>
    {!! Form::open(array('route'=>'search','method'=>'GET','id'=>'ricerca')) !!}
    {{ Form::text('citta',isset($request) ? $request->citta : false,array('id'=>'my-searchbar','placeholder'=>'Milano, Torino, Ancona...')) }}
    {{ Form::submit('Invia',array('class'=>'w3-button'))}}
    {!! Form::close() !!}
    <hr>

    <button type="button" id="btn-reveal" class="my-button w3-center">
      <img src="{{asset('img/right-arrow.png')}}" width="20px" class="profile-name arrow " id="profile-arrow"> Mostra filtri</button>
    <div class="w3-container wrapper" id="filtri">
      <div id="reveal-content" class='hide'>


        <div class="my-align">
          {{Form::label("Tipo di camera:")}}<br>
          <ul class="w3-bar-block w3-text my-filter ">
            <li>{{ Form::radio('tipo_camera','tutte',isset($request) ? $request->tipo_camera == 'tutte' : true,array('form'=>'ricerca'))}}Tutte</li>
            <li>{{ Form::radio('tipo_camera','appartamento',isset($request) ? $request->tipo_camera == 'appartamento': false,array('form'=>'ricerca','onclick'=>'mostraFiltriParticolari("appartamento")'))}}Appartamento</li>
            <li>{{ Form::radio('tipo_camera','posto_letto', isset($request) ? $request->tipo_camera == 'post_letto' : false,array('form'=>'ricerca'))}}Posto Letto</li>
          </ul>
        </div>

        <div class="my-align ">
          {{Form::label('Prezzo: ')}}
          {{Form::number('prezzo_min',isset($request)? $request->prezzo_min : false,array('min'=>'0','max'=>'9999','form'=>'ricerca','placeholder'=>'min'))}}
          {{Form::number('prezzo_max',isset($request)? $request->prezzo_max : false,array('min'=>'0','max'=>'9999','form'=>'ricerca','placeholder'=>'max'))}}
          @if ($errors->first('prezzo_max'))
          
          <ul class='errors'>
            @foreach($errors->get('prezzo_max') as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
          @endif
        </div>


        @isset($servizi)
        <div class="my-align">
          {{Form::label('Servizi opzionali: ')}}
          <ul class="w3-bar-block w3-text my-filter">
            @php
            $i = 1;
            @endphp
            @foreach($servizi as $servizio)
              @if($servizio->tipologia != 1)
                  <li>{{Form::checkbox($servizio->nome,$servizio->id,isset($request) ? $request->only($servizio->nome)!=null : false,array('form'=>'ricerca'))}} {{Form::label($servizio->nome)}}</li>
                @if($i%4==0)
                    </ul>
                  </div>
                  <div class="my-align">
                    <ul class="w3-bar-block w3-text my-filter">
                @endif
                @php
                  $i++;
                @endphp
              @endif
            @endforeach
          </ul>
        </div>
        <br>
        @endisset

        <!-- Filtri alloggio -->
        <div id="alloggio">
          <hr>
          <h3>Filtri alloggio: </h3><br>
          <div class="my-align">
            {{Form::label('Dimensioni: ')}}
            {{Form::number("superficie",isset($request->superficie) ? $request->superficie : false,array('form'=>'ricerca','min'=>0,'max'=>9999))}}<p style="display:inline"> m<sup>2</sup></p><br>
          </div>
          <div class="my-align">
            {{Form::label("Camere: ")}}
            {{Form::number('n_camere',isset($request->n_camere) ? $request->n_camere : false,array('form'=>'ricerca','min'=>0,'max'=>99))}}<br>
          </div>
          <div class="my-align">
            {{Form::label('Posti letto: ')}}
            {{Form::number("letti_ap",isset($request->letti_ap) ? $request->letti_ap : false,array('form'=>'ricerca','min'=>0,'max'=>99))}}<br>
          </div>
        </div>
        <!-- Filtri posto letto-->
        <div id="posto_letto">
          <hr>
          <h3>Filtri posto letto:</h3><br>
          <div class="my-align">
            {{Form::label('Dimensione camera: ')}}
            {{Form::number('superficie',isset($request->superficie) ? $request->superficie : false,array('form'=>'ricerca','min'=>0,'max'=>9999))}}<br>
          </div>
          <div class="my-align">
            {{Form::label("Posti letto totali: ")}}
            {{Form::number("letti_pl",isset($request->letti_ap) ? $request->letti_ap : false,array('form'=>'ricerca','min'=>0,'max'=>99))}}<br>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <hr>
</header>
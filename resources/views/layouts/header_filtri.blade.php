<!-- Header -->
<header id="portfolio">
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
            <li>{{ Form::radio('tipo_camera','appartamento',isset($request) ? $request->tipo_camera == 'appartamento': false,array('form'=>'ricerca'))}}Appartamento</li>
            <li>{{ Form::radio('tipo_camera','posto_letto', isset($request) ? $request->tipo_camera == 'post_letto' : false,array('form'=>'ricerca'))}}Posto Letto</li>
          </ul>
        </div>


        <div class="my-align">

        <!--
          <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
          <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
          <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
          <link rel="stylesheet" href="jqueryui/style.css">
        -->
          <p>
            <label for="amount">Costo：</label>
            <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
          </p>

          <div id="slider-range"></div>
        </div>

        @isset($servizi)
        <div class="my-align">
          {{Form::label('Servizi opzionali: ')}}
          <ul class="w3-bar-block w3-text my-filter">
            @php
            $i = 1;
            @endphp
            @foreach($servizi as $servizio)

            <li>{{Form::checkbox($servizio->nome,$servizio->id,isset($request) ? $request->only($servizio->nome)!=null : false,array('form'=>'ricerca'))}} {{Form::label($servizio->nome)}}</li>
            @if($i%4==0 )
          </ul>
        </div>
        <div class="my-align">
          <ul class="w3-bar-block w3-text my-filter">
            @endif
            @php
            $i++;
            @endphp
            @endforeach
          </ul>
        </div>

        @endisset
      </div>
    </div>
  </div>
  <hr>
</header>
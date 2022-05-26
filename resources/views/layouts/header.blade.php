<script>
  
document.getElementById("btn-reveal").addEventListener('click', function() {
  let el = document.getElementById('reveal-content');
  if (el.classList.contains('hide')) {
    el.classList.remove('hide');
  } else {
    el.classList.add('hide');
  }
});

</script>

<!-- Header -->
<header id="portfolio">
        <!-- Profilo-->
        <!-- <div class="dropdown" onclick="dropdown()">
            <button  class="dropbtn">
                <img src="{{asset('img/right-arrow.png')}}" width="20px" class="profile-name arrow " id="profile-arrow" onclick="dropdown()" >
                <p class="profile-name" >{{Auth::user()->name}} {{Auth::user()->cognome}}</p> 
                <img src="{{ asset('img/profile_pic.jpg') }}" style="width:65px;" class="w3-circle w3-right my-margin">
            </button>
            <div id="myDropdown" class="dropdown-content animate">
              @include('layouts/_navlocatore')
            </div>
          </div>-->
        <!-- Searchbar -->
        <!--<span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>-->
        <div class="w3-container" style="padding-top:50px" >
          <h1>Cerca la tua città:</h1>
          {!! Form::open(array('route'=>'search','method'=>'GET','id'=>'ricerca')) !!}
            {{ Form::text('citta',$request->citta,array('id'=>'my-searchbar','placeholder'=>'Milano, Torino, Ancona...')) }}
            {{ Form::submit('Invia',array('class'=>'w3-button'))}}
          {!! Form::close() !!}
          <hr>
          
          <button type="button" id="btn-reveal" class="my-button w3-center">
            <img src="{{asset('img/right-arrow.png')}}" width="20px" class="profile-name arrow " id="profile-arrow" > Mostra filtri</button>
          <div class="w3-container wrapper" id="filtri">
              <div id="reveal-content" class='hide'>


                <div class="my-align">
                  {{Form::label("Tipo di camera:")}}<br>
                  <ul class="w3-bar-block w3-text my-filter ">
                    <li>{{ Form::radio('tipo_camera','tutte',$request->tipo_camera == 'tutte',array('form'=>'ricerca'))}}Tutte</li>
                    <li>{{ Form::radio('tipo_camera','appartamento',$request->tipo_camera == 'appartamento',array('form'=>'ricerca'))}}Appartamento</li>
                    <li>{{ Form::radio('tipo_camera','posto_letto',$request->tipo_camera == 'post_letto',array('form'=>'ricerca'))}}Posto Letto</li>
                  </ul>   
    
                </div>
                <div class="my-align">
                  {{Form::label('Data inizio contratto:')}}<br>
                  {{Form::date('data_inizio',false,array('form'=>'ricerca'))}}<br><br>
                  {{Form::label('Data fine contratto:')}}<br>
                  {{Form::date('data_fine',false,array('form'=>'ricerca'))}}<br>
                </div>
                
                @isset($servizi)
                <div class="my-align">
                  {{Form::label('Servizi opzionali: ')}}
                  <ul class="w3-bar-block w3-text my-filter">
                    @php
                     $i = 1;   
                    @endphp
                  @foreach($servizi as $servizio)
                  
                  <li>{{Form::checkbox($servizio->nome,$servizio->id,$request->only($servizio->nome)!=null,array('form'=>'ricerca'))}} {{Form::label($servizio->nome)}}</li>
                    @if($i%4==0 )
                      </ul></div><div class="my-align"><ul class="w3-bar-block w3-text my-filter">
                    @endif
                    @php
                    $i++;
                    @endphp
                  @endforeach
                </ul>
              </div>
            </div>
            @endisset
          </div>
        </div>

      
      <hr>
      </header>

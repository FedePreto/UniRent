<!-- Header -->
<header id="portfolio">
        <!-- Profilo-->
        <div class="dropdown" >
            <button  class="dropbtn" onclick="dropdown()">
                <img src="{{asset('img/right-arrow.png')}}" width="20px" class="profile-name arrow " id="profile-arrow" onclick="dropdown()" >
                <p class="profile-name" >Nicolò Raccichini</p> 
                <img src="{{ asset('img/profile_pic.jpg') }}" style="width:65px;" class="w3-circle w3-right my-margin">
            </button>
            <div id="myDropdown" class="dropdown-content animate">
              <a href="#home">Profilo</a>
              <a href="#about">Messaggi</a>
              <a href="#contact">Logout</a>
            </div>
          </div>
        <!-- Searchbar -->
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-container">
          <h1>Cerca la tua città:</h1>
          {!! Form::open(array('route'=>'search','method'=>'GET')) !!}
            {{ Form::text('citta',false,array('id'=>'my-searchbar','placeholder'=>'Milano, Torino, Ancona...')) }}
            {{ Form::submit('Invia',array('class'=>'w3-button'))}}
          {!! Form::close() !!}
        <!--  <form action="search" method="GET" id="ricerca">
            <input type="text" name="citta" id="my-searchabar" placeholder="Milano, Torino, Ancona...">
            <input type="submit" class="w3-button">
          </form>-->
          <hr>
        </div>
      </header>

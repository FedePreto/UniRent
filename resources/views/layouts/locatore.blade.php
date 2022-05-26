<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href= "{{ asset('css/w3-style.css') }}">
        <title>Unirent | @yield('title', 'Locatore')</title>
    </head>
    <body>
        <!-- Header -->
        <header id="portfolio">
            <!-- Profilo-->
        <div class="dropdown" onclick="dropdown()">
            <button  class="dropbtn" >
                <img src="{{asset('img/right-arrow.png')}}" width="20px" class="profile-name arrow " id="profile-arrow" onclick="dropdown()" >
                <p class="profile-name" >Nicolò Raccichini</p> 
                <img src="{{ asset('img/profile_pic.jpg') }}" style="width:65px;" class="w3-circle w3-right my-margin">
            </button>
            <div id="myDropdown" class="dropdown-content animate">
              @include('layouts._navlocatore')
            </div>
          </div>

        
        <!-- Searchbar -->
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-container" style="'margin-top:100px">
          <h1>Cerca la tua città:</h1>
          {!! Form::open(array('route'=>'search','method'=>'GET')) !!}
            {{ Form::text('citta',false,array('id'=>'my-searchbar','placeholder'=>'Milano, Torino, Ancona...')) }}
            {{ Form::submit('Invia',array('class'=>'w3-button'))}}
          {!! Form::close() !!}
          <hr>
        </div>
      </header>
      
      <!--Fine Header -->
        <!--#content-->
        <div class="w3-content w3-padding" style="max-width:1564px">
            @yield('content')
        </div>
        
        <footer class="w3-center w3-black w3-padding-16">
            UniRent | Via Brecce Bianche, 12 - 60131 Ancona (AN) ITALIA<br>
            <a  href="mailto:info@unirent.it">info@unirent.it</a> | <span itemprop="telephone">+39 347 58 30 387</span>
            <br><a target="_blank" href="#"> privacy</a> | <a target="_blank" href="#"> cookie policy</a>
            <ul class="social-media-list">
                    <li><a target="_blank" href="https://www.facebook.com/"><img src="{{asset('img/social/facebook.png')}}"  title="Facebook" alt="Facebook icon"></a></li>
                    <li><a target="_blank" href="https://twitter.com/i/flow/login/"><img src="{{asset('img/social/twitter.png')}}" title="Twitter" alt="Twitter icon"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/accounts/login/"><img src="{{asset('img/social/instagram.png')}}" title="Instagram" alt="Instagram icon"></a></li>
            </ul>
            
            Designed by<br>
            <div class="credits">
                <a target="_blank" href="#"><img width="100" src="img/logo.png" title="#" alt="#"></a>
            </div>
        </footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>Unirent | @yield('title', 'HomePage')</title>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href= "{{ asset('css/w3-style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Da qui prendiamo le icone-->
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
  

        
    </head>

    <body>
        <!-- Header -->
        <!-- Navbar (sit on top) -->
        @include('layouts/_navpublic')


        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle" style="white-space:nowrap;">
              <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">UniRent</span>
            </div>
            <div class="w3-display-middle" style="white-space:nowrap;">
              <span class="logo w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Cerca l'appartamento su misura per i tuoi studi</span>
            </div>
        </div>


        <div class="w3-content w3-padding" style="max-width:1654px">
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
        <script>
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
                var navbar = document.getElementById("myNavbar");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
                } else {
                    navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
                }
            }
        </script>
    </body>
</html>
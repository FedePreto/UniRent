<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href= "{{ asset('css/w3-style.css') }}">
        <script type="text/javascript" src="/js/home_page.js"></script>
        <title>Unirent | @yield('title', 'HomePage')</title>
    </head>

    <body>
        <!-- Header -->
        <!-- Navbar (sit on top) -->
        <div class="w3-top"></div>
            @include('layouts/_navpublic')
        </div>
        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home"></div>
            <div class="w3-display-middle" style="white-space:nowrap;">
              <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">UniRent</span><br>
              <span class="w3-hide-small">Cerca l'alloggio su misura per i tuoi studi</span>
            </div>
        </div>


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
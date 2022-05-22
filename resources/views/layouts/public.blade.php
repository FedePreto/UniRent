<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href= "{{ asset('css/w3-style.css') }}">
        <title>Unirent | @yield('title', 'HomePage')</title>
    </head>
    <body>
        <!-- Header -->
        
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                <a href="#home" class="w3-bar-item w3-button"><img src='img/logo.png' width="80"></a>                
                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right w3-hide-small">
                    @include('layouts/_navpublic')
                </div>
            </div>
        </div>
        <div class = "parallax"></div>
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
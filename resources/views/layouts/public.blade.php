<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Unirent | @yield('title', 'Catalogo')</title>
    </head>
    <body>
        <!-- Header -->
        <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
            <img class="w3-image" src="img/studenti.jpg" alt="Immagine di studenti" width="1500" height="800">
            <div class="w3-display-middle w3-margin-top w3-center">
                <h1 class="w3-xxlarge w3-text-white">
                    <span class="w3-padding w3-black w3-opacity-min">
                        <b>UniRent</b><br>
                    </span>
                    <span class='w3-padding w3-black w3-opacity-min w3-large'>
                        Trova l'alloggio su misura per i tuoi studi
                    </span>
                </h1>
            </div>
        </header>

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
        
        <!--#content-->
        <div class="w3-content w3-padding" style="max-width:1564px">
            @yield('content')
        </div>
        
        <footer class="w3-center w3-black w3-padding-16">
            UniRent | Via Brecce Bianche, 12 - 60131 Ancona (AN) ITALIA<br>
            <a  href="#">info@unirent.it</a> | <span itemprop="telephone"><a href="#">+39 347 58 30 387</a></span>
            <br><a target="_blank" href="#"> privacy</a> | <a target="_blank" href="#"> cookie policy</a>
            <ul class="">
                    <li><a target="_blank" href="https://www.facebook.com/"><img src="img/social/facebook.png"  title="facebook" alt="Facebook icon"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/accounts/login/"><img src="img/social/instagram.png" title="Instagram" alt="Instagram icon"></a></li>
                    <li><a target="_blank" href="https://www.pinterest.it/login/"><img src="img/social/pinterest.png" title="Pinterest" alt="Pinterest icon"></a></li>
            </ul>
            
            Designed by<br>
            <div class="credits">
                <a target="_blank" href="#"><img width="100" src="img/logo.png" title="#" alt="#"></a>
            </div>
        </footer>
    </body>
</html>
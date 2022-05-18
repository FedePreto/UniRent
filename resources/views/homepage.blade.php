<html>
    <head>
        <meta charset="UTF-8" />
        <title>UniRent</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style_prova.css">
        <script src="/public/js/script.js"></script>
    </head>
    <body>
        
        <ul id="navbar">
            <li style="float:left"><a href="home_page.html">UniRent</a></li>
            <li><a href="{{route('catalogo')}}">Login</a></li>
            <li><a href="/singup.html">Sing Up</a></li>
        </ul>
        <div id="main">
            <p class="title-big" id="masked">UniRent</p>
            <!--<div id="searchbar">
                <input type="text" placeholder="Città" class="searchbar-item">
                <input type="date" class="searchbar-item">
                <input type="date" class="searchbar-item">
                <input type="submit" value="Cerca" class="searchbar-item" style="cursor:pointer">
            </div>-->
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#94C6E9" fill-opacity="1" d="M0,32L80,69.3C160,107,320,181,480,181.3C640,181,800,107,960,85.3C1120,64,1280,96,1360,112L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        <div class="main-content">
            <div class="content-box">
                <div class="img">
                    <img src="img/casa.png" width="80%">
                </div>
                <div class="content right" style="margin-top:100px;">
                    <h1>Titolo 2</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec enim sem, fermentum at velit nec, luctus tempor justo. Maecenas lacinia nisi eu dapibus mollis. Duis consequat ullamcorper augue. Maecenas congue, ipsum gravida ullamcorper volutpat, lectus eros dapibus nibh, eget aliquam urna est sit amet sapien. Nam quam enim, rhoncus nec dolor id, facilisis lacinia ipsum. Pellentesque vel urna vehicula, maximus odio in, aliquam augue. Vivamus eget nisl molestie, euismod enim sit amet, cursus nisl.</p>
                </div>
            </div>
            <!--<div class="content-box">
                <div class="content left">
                    <h1>Titolo 2</h1>
                    <p>Sed nec mauris mauris. Ut luctus, lacus sed luctus semper, justo urna malesuada velit, et varius risus tortor ac nibh. Cras rhoncus gravida justo, at semper neque blandit quis. Proin rutrum feugiat ex, eget euismod nulla interdum in. Praesent id nisi cursus, aliquet risus nec, laoreet massa. Integer dignissim consequat dolor sit amet maximus. Duis aliquet nisi nisl, a blandit elit luctus vel. Maecenas justo orci, tristique sed eros eu, volutpat placerat leo. Sed id sodales tellus. Donec tincidunt finibus neque in mattis. Sed interdum commodo ligula ac ullamcorper. In in aliquet nulla. Vestibulum eleifend sodales orci tincidunt ullamcorper. Cras erat nulla, sodales eu est et, tincidunt volutpat augue.</p>
                </div>
                <div class="img right">
                    <img src="/public/img/casa.png" width="80%">
                </div>
            </div>-->
        </div>
        <div class="fac" >
            <div class="domanda" onclick="show_answer(this)">
                <p id="dom1" >A cosa serve questo sito?</p>
                <!--<img class="arrow" id="arrow1"src="img/up-svgrepo-com.svg">-->
            </div>
            <p class="risposta" id="ris1">A un cazzo</p>
            <p class="domanda" id="dom2" onclick="show_answer(this)">Perchè dovrei usare questo sito?</p>
            <p class="risposta" id="ris2">Non dovresti infatti</p>
        </div>
        <svg class="invert"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#94C6E9" fill-opacity="1" d="M0,32L80,69.3C160,107,320,181,480,181.3C640,181,800,107,960,85.3C1120,64,1280,96,1360,112L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        
        
        <footer>
            
            </div>
            <div class="side" id="contatti">
                <div >

                    <ul>
                        <li><h2>Contatti</h2></li>
                        <li>Tel : 333-3333333</li>
                        <li>e-mail: unirent@info.it</li>
                        <li>via dei falchi 1, 65444 Italia</li>
                    </ul>

                </div>
                
            </div>
        </footer>
        
    </body>
</html>
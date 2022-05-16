<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
          <i class="fa fa-remove"></i>
        </a>
        <img src="{{ asset('img/logo_senza_sfondo.png') }}" style="width:80%;" class="w3-round" href="/"><br><br>
        <h4><b>Filtri ricerca:</b></h4>
      </div>  
      
      <div class="w3-container">
        <label>Tipo di camera:</label>
        <ul class="w3-bar-block w3-text my-filter ">
            <li ><input type="radio" name="tipo_camera"><label>Tutte</label></li>
            <li ><input type="radio" name="tipo_camera"><label>Stanza singola</label></li>
            <li ><input type="radio" name="tipo_camera"><label>Doppia</label></li>
        </ul>   
        <hr>

        <label>Data inizio contratto:</label><br>
        <input type="date" name="data_inizio"><br><br>
        <label>Data fine contratto:</label><br>
        <input type="date" anme="data_fine">
      </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

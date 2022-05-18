<p class="w3-margin">Annunci trovati: <b>50</b></p>

<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
        @isset($alloggi)
        @foreach ( $alloggi as $alloggio)
        <img src="{{asset('img/20190116172824-8.jpeg')}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
            <p class="price"><b>{{ $alloggio->prezzo }}</b></p>
            <p><b>{{$alloggio->titolo}}</b></p>
            <p>{{ $alloggio->descrizione }}</p>
        </div>
    </div>
    @endforeach
</div>

<!-- 
<div class="w3-center w3-padding-32">
        <div class="w3-bar">
          <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
          <a href="#" class="w3-bar-item w3-black w3-button">1</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
      </div>

-->
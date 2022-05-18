@isset($alloggi)
@php 
$num_pages = count($alloggi)/6;
$pages = array();
$counter = 0;
for($i = 0; $i < count($alloggi); $i++){
    $pages[$counter][$i] = $alloggi[$i];
    
    if($counter%3==0){
        $counter++;
    }
}

@endphp
<p class="w3-margin">Annunci trovati: <b>@php echo count($alloggi) @endphp</b></p>
<div class="w3-row-padding">
    @foreach ( $alloggi as $alloggio)
    <div class="w3-third w3-container w3-margin-bottom">
        
        
        <img src="{{asset('/img/appartamenti/20210505102417-4.jpg')}}" alt="Norway" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
            <p class="price"><b>€{{ $alloggio->prezzo }}</b></p>
            <p><b>{{$alloggio->titolo}}</b></p>
            <p>{{ $alloggio->descrizione }}</p>
        </div>
    </div>
    @endforeach
    
</div>
@endisset

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
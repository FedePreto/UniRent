@isset($alloggi)

<p class="w3-margin">Annunci trovati: <b>@php echo $alloggi->total() @endphp</b></p>
<div class="w3-row-padding">
    @foreach ( $alloggi as $alloggio)
    <div class="w3-third w3-container w3-margin-bottom annuncio">
        @include('helpers/alloggioImage',['attrs'=>"w3-hover-opacity cursor",'imgFile'=>$alloggio->immagine])
        <!--<img src="{{asset('/img/appartamenti/20210505102417-4.jpg')}}"  style="width:100%" class="w3-hover-opacity">-->
       
        <div class="w3-container w3-white">
            <p class="price"><b>€{{ $alloggio->prezzo }}</b></p>
            <p><b>{{$alloggio->titolo}}</b></p>
            <p>{{ $alloggio->descrizione }}</p>
        </div>
    </div>
    @endforeach
    
</div>
   
{{ $alloggi->links('pagination::bootstrap-4') }}
        
@endisset

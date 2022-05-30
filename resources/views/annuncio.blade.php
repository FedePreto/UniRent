@extends('layouts.private')

@section('title', $alloggio->titolo)

@section('content')
<div class="w3-content w3-padding" style="max-width:1654px">
    <div class="w3-row-padding">   
        <div class="w3-third w3-container w3-margin-bottom ">
            @include('helpers/alloggioImage',['attrs'=>"",'imgFile'=>$alloggio->foto])    
        </div> 
        <div class="w3-third w3-container w3-margin-bottom">
            <h1>{{$alloggio->titolo}}</h1>
            <p>€ {{$alloggio->prezzo}}</p>
        </div>
    </div>
    @isset($servizi)
    <ul>
        @foreach($servizi as $servizio)
            <li>{{$servizio->nome}}</li>
        @endforeach
    </ul>
    @endisset
    <p>{{$alloggio->descrizione}}</p>

    
</div>
@endsection
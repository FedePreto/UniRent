@extends('layouts.private')

@section('title', $alloggio->titolo)

@section('content')

<a href='{{url()->previous()}}'><- Torna indietro</a>

<div class="w3-content w3-padding" style="max-width:1654px">
    <div class="w3-row-padding">   
        <div class="w3-third w3-container w3-margin-bottom ">
            @include('helpers/alloggioImage',['attrs'=>"",'imgFile'=>$alloggio->foto])    
        </div> 
        <div class="w3-third w3-container w3-margin-bottom">
            <h1>{{$alloggio->titolo}}</h1>
            <p>€ {{$alloggio->prezzo}}</p>
            <button >Contatta</button>
        </div>
    </div>
    @isset($servizi)
    <hr>
    <p>Servizi offerti :</p>
    <ul class='my-filter'>
        @foreach($servizi as $servizio)
            <li>{{$servizio->nome}}</li>
        @endforeach
    </ul>
    @endisset
    <hr>
    <p>Descrizione:</p>
    <p>{{$alloggio->descrizione}}</p>

    
</div>
@endsection
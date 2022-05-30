@extends('layouts.private')

@section('title', 'HomePage')

@section('content')
@isset($alloggi)

<p class="w3-margin">Annunci trovati: <b>@php echo $alloggi->total() @endphp</b></p>
<div class="w3-row-padding">
    @foreach ( $alloggi as $alloggio)
    <a href={{route('annuncio',[$alloggio->id])}}>
    <div class="w3-third w3-container w3-margin-bottom annuncio">
        @include('helpers/alloggioImage',['attrs'=>"w3-hover-opacity cursor",'imgFile'=>$alloggio->foto])   
        <div class="w3-container w3-white">
            <p class="price"><b>€{{ $alloggio->prezzo }}</b></p>
            <p class="title"><b>{{$alloggio->titolo}}</b></p>
            <p>{{$alloggio->citta}}, {{$alloggio->indirizzo}} {{ $alloggio->numero }}</p>
        </div>
    </div>
    </a>
    @endforeach
    
</div>

@include('pagination.paginator',['paginator'=>$alloggi])


@endisset  
@endsection

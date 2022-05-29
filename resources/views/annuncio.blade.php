@extends('layouts.private')

@section('title', $annuncio->titolo)

@section('content')
<h1>{{$alloggio->titolo}}</h1>
<p>{{$alloggio->descrizione}}</p>
@include('helpers/alloggioImage',['attrs'=>"",'imgFile'=>$alloggio->immagine])
@endsection
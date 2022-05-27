@extends('layouts.private')
@section('title', 'Profilo')
@section('content')
<br>
<br>
<br>
<h2 style="text-align:center">Profilo {{auth()->user()->username}}</h2>

<div class="card">
  <img src="{{asset('img/evil_abed.jpg')}}" alt="Immagine Profilo" style="width:100%">
  <h1>{{auth()->user()->name}} {{auth()->user()->cognome}}</h1>
 
  @switch(auth()->user()->livello)
    @case(0)
        <p class="title-profile"> Admin </p>
        @break

    @case(1)
        <p class="title-profile"> Locatore </p>
        @break

    @case(2)
        <p class="title-profile"> Locatario </p>
        @break
   @endswitch

  <p>{{auth()->user()->data_nascita}}</p>
  <p>{{auth()->user()->email}}</p>
  <p>{{auth()->user()->cellulare}}</p>
  <p><button class="my-button" style="width:100%">Modifica</button></p>
</div>

@endsection
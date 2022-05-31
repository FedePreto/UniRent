@extends('layouts.public')

@section('title', 'Chi Siamo')

@section('content')
<!-- About Section -->
<div class="w3-container w3-padding-32">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>Chi siamo</b></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  <div class="w3-row-padding ">
    <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
      <img src="{{asset('img/foto_profilo/gustavo.png')}}" alt="Rongo" style="width:100%" class='thumb'>
      <h3>Alessandro Rongoni</h3>
      <p class="w3-opacity">CEO</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
      <img src={{asset('img/foto_profilo/howard.png')}} alt="Fede" style="width:100%" class='thumb'>
      <h3>Federico Pretini</h3>
      <p class="w3-opacity">Engineer</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
      <img src={{asset('img/foto_profilo/garrett.png')}} alt="Greg" style="width:100%" class='thumb'>
      <h3>Gregorio Vecchiola</h3>
      <p class="w3-opacity">Developer</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
      <img src={{asset('img/foto_profilo/evil_abed.jpg')}} alt="Raccio" style="width:100%" class='thumb'>
      <h3>Nicolò Raccichini</h3>
      <p class="w3-opacity">Developer</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
</div>
@endsection
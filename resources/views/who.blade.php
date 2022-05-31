@extends('layouts.public')

@section('title', 'Chi Siamo')

@section('content')
<!-- About Section -->
<div class="w3-container w3-padding-32">
  <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16" align="center"><b>Chi siamo</b></h2>
  <p> <b>UniRent è un portale specializzato nell’affitto di alloggi privati a studenti universitari</b>.
    La piattaforma utilizza un’interfaccia efficace che consente ai locatori di godere di un’alta visibilità e agli studenti di prenotare facilmente posti letto o appartamenti.
    <b>Il tutto comodamente da computer, tablet o smartphone</b>.
  </p>
  <p><b>Unirent</b> unisce l’innovazione delle start-up, la professionalità di un'agenzia immobiliare
    e l’esperienza di fuorisede del proprio staff, così da offrire soluzioni concrete al generale disorientamento
    che caratterizza il mondo dell’housing universitario.</p>
  <p>È un servizio progettato non solo per gli affitti online, ma per offrire molto di più.
    <b>Fornisce assistenza amministrativa, contrattuale e di manutenzione</b> per l’intera durata della locazione,
    a tutela dei propri clienti e nel rispetto della normativa e della trasparenza.
  </p>
  <p><b>Semplice e veloce, è il servizio ideale per i giovani fuorisede.</b></p>
</div>

<div class="w3-row-padding ">
  <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
    <img src="{{asset('img/foto_profilo/gustavo.png')}}" alt="Rongo" style="width:100%" class='thumb'>
    <h3>Alessandro Rongoni</h3>
    <p class="w3-opacity">CEO</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p>
    <form method="get"> <button type="submit" class="w3-button w3-light-grey w3-block" formaction="mailto:alessandro.rongoni@unirent.it">Contattami</button></form>
    </p>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
    <img src="{{asset('img/foto_profilo/howard.png')}}" alt="Fede" style="width:100%" class='thumb'>
    <h3>Federico Pretini</h3>
    <p class="w3-opacity">Engineer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p>
    <form method="get"> <button type="submit" class="w3-button w3-light-grey w3-block" formaction="mailto:federico.pretini@unirent.it">Contattami</button></form>
    </p>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
    <img src="{{asset('img/foto_profilo/garrett.png')}}" alt="Greg" style="width:100%" class='thumb'>
    <h3>Gregorio Vecchiola</h3>
    <p class="w3-opacity">Developer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p>
    <form method="get"> <button type="submit" class="w3-button w3-light-grey w3-block" formaction="mailto:gregorio.vecchiola@unirent.it">Contattami</button></form>
    </p>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom w3-grayscale hover-no-filter transition">
    <img src="{{asset('img/foto_profilo/evil_abed.jpg')}}" alt="Raccio" style="width:100%" class='thumb'>
    <h3>Nicolò Raccichini</h3>
    <p class="w3-opacity">Developer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p>
    <form method="get"> <button type="submit" class="w3-button w3-light-grey w3-block" formaction="mailto:nicolo.raccichini@unirent.it">Contattami</button></form>
    </p>
  </div>

</div>
@endsection
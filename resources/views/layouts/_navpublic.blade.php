
 <!-- La sintassi void(0) invece non fa nulla e non produce alcun effetto.
 Spesso è un modo per individuare un link che non punta a una pagina particolare, 
 ma che per qualche motivo dobbiamo utilizzare come <a>.-->
<a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<a href="{{route('home')}}" class="w3-bar-item w3-button w3-hide-small" title="Torna all'inizio"><i class="fa fa-home"></i> HOME</a>
<a href="{{route('what')}}" class="w3-bar-item w3-button w3-hide-small" title="Cosa offriamo"><i class="fa fa-info-circle"></i> Servizio</a>
<a href="{{route('who')}}" class="w3-bar-item w3-button w3-hide-small" title="Il nostro profilo aziendale"><i class="fa fa-users"></i> Chi Siamo</a>
<a href="{{route('where')}}" class="w3-bar-item w3-button w3-hide-small" title="Dove trovarci"><i class="fa fa-map-marker"></i> Dove Trovarci</a>
<a href ="{{route('faq')}}" class="w3-bar-item w3-button w3-hide-small" title="Frequently Asked Question"><i class="fa fa-question-circle"></i> FAQ</a>
<a href="mailto:info@unirent.it" class="w3-bar-item w3-button w3-hide-small" title="Mandaci un messaggio"><i class="fa fa-envelope"></i> Contattaci</a>
<a href="{{route('login')}}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red" title="Effettua l'accesso al sito"><i class="fa fa-user"></i> Accedi</a>



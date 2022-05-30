@extends('layouts.private')

@section('title','Messaggi')

@section('scripts')


@parent
<script src="{{ asset('js/form_validation.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(function() {
        var actionUrl = "{{ route('addHome.store') }}";
        var formId = 'addHome';
        $(":input").on('blur', function(event) {
            var formElementId = $(this).attr('id'); //recupera l'id dell'oggetto che ha perso il focus 
            doElemValidation(formElementId, actionUrl, formId); //funzione js che prende il valore dell'elemento lo invia
            // al server usando ajax e processerà la ripsota proveniente dal server
        });
        $("#addHome").on('submit', function(event) {
            event.preventDefault(); //funzione che attiva il metodo associato all'evento di click sul bottone che blocca il meccanismo standard
            // di gestione dell'evento da parte del browser
            doFormValidation(actionUrl, formId); //attiva una funzione js definita da noi che invece implementa la submit
        });
    });
</script>
@endsection


@section('content')

<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;" id="mySidebar">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="https://www.w3schools.com/images/w3schools.png" style="width:60%;"></a>
    <a href="javascript:void(0)" onclick="w3_close()" title="Chiudi la SideMenu" class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">Nuovo Messaggio <i class="w3-padding fa fa-pencil"></i></a>
    <a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-inbox w3-margin-right"></i>Inbox<i class="fa fa-caret-down w3-margin-left"></i></a>
    <div id="Demo1" class="w3-hide w3-animate-left">
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Borge');w3_close();" id="firstTab">


            <!-- Chat nella sideBar, con piccole anteprime di messaggio, il destinatario e l'oggetto -->
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="/w3images/avatar3.png" style="width:15%;"><span class="w3-opacity w3-large">Borge Refsnes</span>
                <h6>Subject: Remember Me</h6>
                <p>Hello, i just wanted to let you know that i'll be home at...</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Jane');w3_close();">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="/w3images/avatar5.png" style="width:15%;"><span class="w3-opacity w3-large">Jane Doe</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('John');w3_close();">
            <div class="w3-container">
                <img class="w3-round w3-margin-right" src="/w3images/avatar2.png" style="width:15%;"><span class="w3-opacity w3-large">John Doe</span>
                <p>Welcome!</p>
            </div>
        </a>
    </div>

    <!-- Altre sezioni di messaggi, richieste per il locatore -->
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-paper-plane w3-margin-right"></i>Richieste</a>
</nav>


<!-- Inizio PopUp per invio email quando clicchi "Nuovo messaggio" -->
<div id="id01" class="w3-modal" style="z-index:4">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-padding w3-red">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-red w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
            <h2>Invia Messaggio</h2>
        </div>


        <div class="w3-panel">
            <label>Destinatario:</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text">
            <label>Mittente:</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text">
            <label>Oggetto:</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text">
            <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?">
            <div class="w3-section">
                <a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Annulla  <i class="fa fa-remove"></i></a>
                <a class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id01').style.display='none'">Invia  <i class="fa fa-paper-plane"></i></a>
            </div>
        </div>
    </div>
</div>



<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Chiudi Sidemenu" id="myOverlay"></div>

<!-- Chat estesa con il mittente o destinatario -->
<div class="w3-main" style="margin-left:320px;">
    <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
    <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>

    <div id="Borge" class="w3-container person">
        <br>
        <img class="w3-round  w3-animate-top" src="/w3images/avatar3.png" style="width:20%;">
        <h5 class="w3-opacity">Subject: Remember Me</h5>
        <h4><i class="fa fa-clock-o"></i> From Borge Refsnes, Sep 27, 2015.</h4>
        <a class="w3-button w3-light-grey" href="#">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
        <a class="w3-button w3-light-grey" href="#">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
        <hr>
        <p>Hello, i just wanted to let you know that i'll be home at lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Best Regards, <br>Borge Refsnes</p>
    </div>

    <div id="Jane" class="w3-container person">
        <br>
        <img class="w3-round w3-animate-top" src="/w3images/avatar5.png" style="width:20%;">
        <h5 class="w3-opacity">Subject: None</h5>
        <h4><i class="fa fa-clock-o"></i> From Jane Doe, Sep 25, 2015.</h4>
        <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
        <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Forever yours,<br>Jane</p>
    </div>

    <div id="John" class="w3-container person">
        <br>
        <img class="w3-round w3-animate-top" src="/w3images/avatar2.png" style="width:20%;">
        <h5 class="w3-opacity">Subject: None</h5>
        <h4><i class="fa fa-clock-o"></i> From John Doe, Sep 23, 2015.</h4>
        <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
        <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
        <hr>
        <p>Welcome.</p>
        <p>That's it!</p>
    </div>

</div>
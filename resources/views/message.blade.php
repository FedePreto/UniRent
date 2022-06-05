@extends('layouts.private')

@section('title','Messaggi')

@section('scripts')
@parent
<script src="{{ asset('js/form_validation.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    var openInbox = document.getElementById("myBtn");
    openInbox.click();

    var openRichieste = document.getElementById("myBtnRichieste");
    openRichieste.click();

    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    function myFunc(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-red";
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-red", "");
        }
    }


    openMail()

    function openMail(personName) {
        var i;
        var x = document.getElementsByClassName("person");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x = document.getElementsByClassName("test");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" w3-light-grey", "");
        }
        document.getElementById(personName).style.display = "block";
        event.currentTarget.className += " w3-light-grey";
    }
</script>

<script>
    var openTab = document.getElementById("firstTab");
    openTab.click();
</script>
@endsection


@section('content')
<div>
    <div class="w3-row-padding">
        <div style="border: 1px solid rgb(221, 221, 221);  box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:650px; float:left; width:19.5%;">

            @if(count($chat)>0)
            @foreach($chat as $chatAperta)
            <div class=" w3-animate-left">
                <!--<a href="javascript:void(0)" style="display:block;" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail($destinatario);" id="firstTab">-->
                <a href="{{route('conversazione',[$chatAperta['alloggio'][0]['id'],$chatAperta['utente'][0]['id']])}}" style="display:block;" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail($destinatario);" id="firstTab">

                    <div>
                        <div><span class="w3-opacity w3-large"><b>{{$chatAperta["utente"][0]["name"]}} {{$chatAperta["utente"][0]["cognome"]}}</b></span></div>
                        <div>
                            <h5>per<br>
                                {{$chatAperta["alloggio"][0]["titolo"]}}<br>
                                {{$chatAperta["alloggio"][0]["citta"]}},
                                {{$chatAperta["alloggio"][0]["cap"]}},<br>
                                {{$chatAperta["alloggio"][0]["indirizzo"]}},
                                {{$chatAperta["alloggio"][0]["numero"]}}
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @else
            <div align="center" class="w3-padding"><span class="w3-opacity w3-large"><b>Non hai chat aperte.</b></span></div>
            @endif


        </div>
        <div style="overflow:auto; border: 1px solid rgb(221, 221, 221); padding-right: 20px; padding-top: 0px ;padding-left: 20px;padding-bottom: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:650px; float:right; width:79.5%;">
            @if(isset($messaggi))
            <div style="padding-top:10px;">
                @foreach($messaggi["messaggi"] as $messaggio)
                @if($messaggio["mittente"]==$id)

                <div style="padding-left: 15px;">
                    <div>
                        <h4 align="right"><b>{{$messaggio["contenuto"]}}</b></h4>
                        <h6 align="right">{{$messaggio["data"]}}</h6>
                    </div>
                </div>
                @else
                <div style="padding-left: 15px;">
                    <div>
                        <h4 align="left"><b>{{$messaggio["contenuto"]}}</b></h4>
                        <h6 align="left">{{$messaggio["data"]}}</h6>
                    </div>
                </div>
                @endif
                <br>
                <hr>
                @endforeach
            </div>
            @else
            <h2 align="center" style="padding-top:150px;"><b>Seleziona una chat per visualizzare la conversazione!</b></h2>
            @endif
            

        </div>
    </div>
</div>
@endsection
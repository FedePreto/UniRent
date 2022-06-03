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


    openMail("Borge")

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
            <div>
                <div><a id="myBtn" onclick="myFunc('Demo1')" style="display:block; text-align:center;" href="javascript:void(0)" class="w3-bar-item-mess w3-button"><i class="fa fa-inbox w3-margin-right"></i>Inbox<i class="fa fa-caret-down w3-margin-left"></i></a></div>



                <div id="Demo1" class="w3-hide w3-animate-left">
                    <a href="javascript:void(0)" style="display:block;" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Borge');" id="firstTab">
                        <div>
                            <div><span class="w3-opacity w3-large">Borge dfgfdghfdwghershrterwnnya berbtyebRefsnes</span></div>
                            <div>
                                <h6>Subject: Remember Me</h6>
                            </div>
                            <div>
                                <p>Hello, i just wanted to let you know that i'll be home at...</p>
                            </div>



                        </div>
                    </a>
                    <a href="javascript:void(0)" style="display:block;" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Jane');">
                        <div class="w3-container">
                            <span class="w3-opacity w3-large">Jane Doe</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)" style="display:block;" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('John');">
                        <div class="w3-container">
                            <span class="w3-opacity w3-large">John Doe</span>
                            <p>Welcome!</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div style="overflow:auto; border: 1px solid rgb(221, 221, 221); padding-right: 20px; padding-top: 0px ;padding-left: 20px;padding-bottom: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; height:650px; float:right; width:79.5%;">
            <div style="padding-top:10px;">

                <div style="padding-left: 15px">
                    <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
                    <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>

                    <div id="Borge">
                        <h5 class="w3-opacity">Subject: Remember Me</h5>
                        <h4><i class="fa fa-clock-o"></i> From Borge Refsnes, Sep 27, 2015.</h4>
                        <a class="w3-button w3-light-grey" href="#">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
                        <a class="w3-button w3-light-grey" href="#">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
                        <hr>
                        <p>Hello, i just wanted to let you know that i'll be home at lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Best Regards, <br>Borge Refsnes</p>
                    </div>

                    <div id="Jane">
                        <br>
                        <h5 class="w3-opacity">Subject: None</h5>
                        <h4><i class="fa fa-clock-o"></i> From Jane Doe, Sep 25, 2015.</h4>
                        <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
                        <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Forever yours,<br>Jane</p>
                    </div>

                    <div id="John">
                        <br>
                        <h5 class="w3-opacity">Subject: None</h5>
                        <h4><i class="fa fa-clock-o"></i> From John Doe, Sep 23, 2015.</h4>
                        <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
                        <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
                        <hr>
                        <p>Welcome.</p>
                        <p>That's it!</p>
                    </div>

                </div>







            </div>

        </div>

        <div style="text-align:center; width:1%;">
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')

@section('title', 'Admin')

@section('scripts')
@parent
<script  language="JavaScript" type="text/javascript">
    $(function() {
        $(".alert").show().delay(2000).fadeOut("show");
    })

});

</script>
    
@endsection

@section('content')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1 id="titolo" style="margin-bottom:0px;"><b>Gestione FAQ</b></h1>
    <div class=" w3-bottombar w3-padding-16" style="margin-bottom:16px;">
    <a  class="w3-button w3-green" onclick="document.getElementById('aggiunta').style.display='block'">Statistiche</a>
    </div>
    
  </header>
  
  <!-- First Photo Grid-->
  <div style="padding-left: 20px; padding-right: 20px;">
<div class="col-sm-12">   
  <table class="w3-table-all table-striped">
    <thead>
        <tr>
          <td><b style="font-size:18px;">Domanda</b></td>
          <td><b style="font-size:18px;">Risposta</b></td>
          <td colspan = 2><b style="font-size:18px;">Azioni</b></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td> </td>
            <td>
                <button  class="ancora w3-button w3-blue" onClick="myFunction()">Modifica</button>
            </td>
            <td>
            <form method="post" >
                  <button class="w3-button w3-red" type="submit">Elimina</button>
                </form>
            </td>
        </tr>
    </tbody>
  </table>



 @endsection

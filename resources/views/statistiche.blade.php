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
    <h1 id="titolo" style="margin-bottom:0px;"><b>Statistiche</b></h1>
    <div class=" w3-bottombar w3-padding-16 " style="margin-bottom:16px; height:150px;">
    <div style="float:left;">
    {{ Form::open(array('route' => ['adminfilter'], 'method' => 'POST', 'id'=>'filtraStatistiche')) }}
          {{Form::label("Tipo di camera:")}}<br>
          <ul class="w3-bar-block w3-text my-filter ">
            <li>{{ Form::radio('tipo_camera',2, true)}}Tutte</li>
            <li>{{ Form::radio('tipo_camera',0)}}Appartamento</li>
            <li>{{ Form::radio('tipo_camera',1)}}Posto Letto</li>
          </ul>
        </div>
        <div style="float:right; padding-top: 45px;">  
        {{ Form::submit('Filtra Statistiche', ['class' => 'w3-button w3-green']) }}
        </div>

        <div style="text-align:center; padding-top: 25px;">
        <div style="float:left; padding-left:100px;"> 
        <div>        {{ Form::label('inizio_intervallo', ' Inizio Intervallo', ['class' => 'label-input-card']) }}
        </div>

        {{ Form::date('inizio_intervallo', NULL, ['class' => 'input-card', 'id' => 'inizio_intervallo', 'style' => 'width:300px']) }}</div>
        <div style="float:right; padding-right:100px;">
        <div>        {{ Form::label('fine_intervallo', ' Fine Intervallo', ['class' => 'label-input-card']) }}
        </div>

        {{ Form::date('fine_intervallo', NULL, ['class' => 'input-card', 'id' => 'fine_intervallo', 'style' => 'width:300px']) }}</div>
        {{Form::close()}}
        
      </div>
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

@extends('layouts.admin')

@section('title', 'Admin')

@section('scripts')
@parent
<script  language="JavaScript" type="text/javascript">
    $(function() {
        $(".alert").show().delay(2000).fadeOut("show");
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
    <a  class="w3-button w3-green" onclick="document.getElementById('aggiunta').style.display='block'">Aggiungi FAQ</a>
    </div>
    @if ($errors->any())
    <div class="alert">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    <br />
    @endif
    @if (session('status'))
    <div class="alert success">
      {{ session('status') }}
    </div>
    @endif
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
        @foreach($faqs as $faq)
        <tr>
            <td>{{$faq->domanda}}</td>
            <td>{{$faq->risposta}} </td>
            <td>
                <button id="{{$faq->id}}"  class="ancora w3-button w3-blue" onClick="myFunction()">Modifica</button>
            </td>
            <td>
            <form action="{{ route('faq.delete', $faq->id)}}" method="post" >
                  @csrf
                  @method('DELETE')
                  <button class="w3-button w3-red" type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
  </table>



<!--MODIFICA FAQ-->
  <div id="modifica" class="modal" style="z-index:4">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container  w3-blue">
                    <h2>Modifica FAQ</h2>
                </div>
                <div class="w3-panel" style="padding-bottom:16px;">
                    <div id="divscript" align='center'>
                        <!--
                        onclick="document.getElementById('modifica').style.display='block'"    
                        {{ Form::open(array('route' => ['faq.update',$faq->id ], 'method' => 'PUT', 'id'=>'modificaFaq', 'class' => 'animate')) }}
                        {{ Form::label('domanda', 'Domanda', ['class' => 'label-input-alloggio']) }}
                        {{ Form::text('domanda', $faq->domanda, ['class' => 'text-input-alloggio', 'id' => 'risposta']) }}
                        <br>
                        {{ Form::label('risposta', 'Risposta', ['class' => 'label-input-alloggio']) }}
                        {{ Form::text('risposta', $faq->risposta, ['class' => 'text-input-alloggio', 'id' => 'risposta']) }}
                        <div class="w3-section" >
                            <a class="w3-button w3-red" style="width:150px; float:left;" onclick="document.getElementById('modifica').style.display='none'">Annulla <i class="fa fa-remove"></i></a>
                            {{ Form::submit('Modifica', ['class' => 'w3-button w3-right w3-blue' , 'style'=> "width:150px"]) }}
                            {{Form::close()}}-->
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>





  <!--INPUT FAQ-->
  <div id="aggiunta" class="modal" style="z-index:4">
                                    <div class="w3-modal-content w3-animate-zoom">
                                        <div class="w3-container  w3-green">
                                            <h2>Aggiungi FAQ</h2>
                                        </div>
                                        <div class="w3-panel" style="padding-bottom:16px;">
                                            <div align='center'>
                                            {{ Form::open(array('route' => ['faq.store', $faq->id], 'method' => 'POST', 'id'=>'inserimentoFaq', 'class' => 'animate')) }}
                                            {{ Form::label('domanda', 'Domanda', ['class' => 'label-input-alloggio']) }}
                                            {{ Form::text('domanda','', ['class' => 'text-input-alloggio', 'id' => 'domanda']) }}
                                            @if ($errors->first('domanda'))
                                            <ul class="errors">
                                            @foreach ($errors->get('domanda') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                                 </ul>
                                             @endif
                                                <br>
                                                {{ Form::label('risposta', 'Risposta', ['class' => 'label-input-alloggio']) }}
                                            {{ Form::text('risposta','', ['class' => 'text-input-alloggio', 'id' => 'risposta']) }}
                                            @if ($errors->first('risposta'))
                                            <ul class="errors">
                                            @foreach ($errors->get('risposta') as $message)
                                            <li>{{ $message }}</li>
                                            @endforeach
                                                 </ul>
                                             @endif
                                            <div class="w3-section" >
                                                <a class="w3-button w3-red" style="width:150px; float:left;" onclick="document.getElementById('aggiunta').style.display='none'">Annulla <i class="fa fa-remove"></i></a>
                                                {{ Form::submit('Inserisci', ['class' => 'w3-button w3-right w3-blue' , 'style'=> "width:150px"]) }}
                                                {{Form::close()}}
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
  

 @endsection

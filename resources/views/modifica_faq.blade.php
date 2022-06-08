@extends('layouts.admin')
@section('title', 'Modifica Faq')

@section('content')
@isset($faq)
@if ($errors->any())
<div class="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!--MODIFICA FAQ-->
<div class="w3-container" align='center'>
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container  w3-blue">
            <h2>Modifica FAQ</h2>
        </div>
        <div class="w3-panel" style="padding-bottom:16px;">
            <div align='center'>
                {{ Form::open(array('route' => ['faq.update',$faq->id ], 'method' => 'PUT', 'id'=>'modificaFaq', 'class' => 'animate')) }}
                {{ Form::label('domanda', 'Domanda', ['class' => 'label-input-alloggio']) }}
                {{ Form::text('domanda', $faq->domanda, ['class' => 'text-input-alloggio', 'id' => 'domanda']) }}
                @if ($errors->first('domanda'))
                <ul class="errors">
                    @foreach ($errors->get('domanda') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                {{ Form::label('risposta', 'Risposta', ['class' => 'label-input-alloggio']) }}
                {{ Form::text('risposta', $faq->risposta, ['class' => 'text-input-alloggio', 'id' => 'risposta']) }}
                @if ($errors->first('risposta'))
                <ul class="errors">
                    @foreach ($errors->get('risposta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                {{ Form::submit('Salva Modifica', ['class' => 'w3-button w3-right w3-blue' , 'style'=> "width:150px"]) }}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endisset
@endsection
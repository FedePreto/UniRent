@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div class="static w3-center">
    <h3>Registrazione</h3>
    <p>Utilizza questa form per registrarti al sito.</p>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

            <div  class="wrap-input">
            
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                
                {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('cognome'))
                <ul class="errors">
                    @foreach ($errors->get('cognome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('', '', ['class' => 'fa fa-envelope']) }}
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('', '', ['class' => 'fa fa-phone']) }}
                {{ Form::label('cellulare', 'Cellulare', ['class' => 'label-input']) }}
                {{ Form::text('cellulare', '', ['class' => 'input','id' => 'cellulare']) }}
                @if ($errors->first('cellulare'))
                <ul class="errors">
                    @foreach ($errors->get('cellulare') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('', '', ['class' => 'fa fa-birthday-cake']) }}
                {{ Form::label('data_nascita', 'Data di Nascita', ['class' => 'label-input']) }}
                {{Form::date('data_nascita', \Carbon\Carbon::now(),['class'=>'input'])}}
                
                @if ($errors->first('data_nascita'))
                <ul class="errors">
                    @foreach ($errors->get('data_nascita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>



             <div  class="wrap-input">
                {{ Form::label('', '', ['class' => 'fa fa-user']) }}
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('', '', ['class' => 'fa fa-lock']) }}
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('', '', ['class' => 'fa fa-lock']) }}
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>

            <div  class="wrap-input">
                {{ Form::label('', '', ['class' => 'fa fa-cog']) }}
                {{ Form::label('livello', 'Qual è il suo ruolo?', ['class' => 'label-input']) }}<br>
                <ul class='my-filter ruolo'>
                    <li>{{ Form::radio('livello',1, false ,['class' => 'input', 'id' => 'locatore']) }} {{ Form::label('livello', 'Locatore ', ['class' => 'label-input']) }}</li>
                    <li>{{ Form::radio('livello',2, false ,['class' => 'input', 'id' => 'locatario']) }} {{ Form::label('livello', 'Locatario', ['class' => 'label-input']) }}</li>
                </ul> 
                @if ($errors->first('livello'))
                <ul class="errors">
                    @foreach ($errors->get('livello') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif                
            </div>

            <div  class="wrap-input">
            
                {{ Form::label('descrizione', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input', 'id' => 'descrizione']) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'my-button']) }}
            </div>
            

            <div  class="wrap-input">
                 <p> Se hai già un account <a  href="{{ route('login') }}">effettua il login</a></p>
             </div>
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection

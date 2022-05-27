@extends('layouts.private')

@section('title', 'Profilo')

@section('content')
@isset($profilo)


<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

<div class="w3-row-padding">
    <br>    
    <p>nome {{$profilo->username}} 
    <br>cognome {{ $profilo->password }}
    <br>nome {{ $profilo->nome }} 
    <br>cognome {{ $profilo->cognome }} 
    <br>data {{ $profilo->data_nascita }}
    <br>email {{ $profilo->email }}</p>
    <br>
</div>
@endisset  
@endsection
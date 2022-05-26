<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>UniRent | @yield('title', 'Dashboard')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/w3-style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    </head>
    <body>
          
        <div class="w3-main" style="">
            @include('layouts/_navpublic')
            @include('layouts/header')
            @include('layouts/catalog')
            @include('layouts/footer')
        </div>
    </body>
</html>
@php
    if(empty($imgFile)){
        $imgFile = 'default.jpg';
    }
    if ( null != $attrs){
        $attrs = 'class='.$attrs.'';
    }

@endphp

<img src="{{asset('img/appartamenti/'.$imgFile) }}" style="width:100%" {{ $attrs}}>
@php
    if(empty($imgFile)){
        $imgFile = 'default.png';
        
    }    
@endphp

<img src="{{asset('img/foto_profilo/'.$imgFile) }}" style= "width:100%">
@if ($paginator->lastPage() != 1)
<div class="w3-center w3-padding-32">
    <div class="w3-bar">
        
        <!-- Link alla prima pagina -->
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->url(1) }}" class="w3-bar-item w3-button w3-hover-black">&lt;&lt;</a> 
        @else
            <p class="w3-bar-item my-button inactive ">&lt;&lt;</p>  
        @endif
        
        <!-- Link alla pagina precedente -->
        @if ($paginator->currentPage() != 1)
            <a href="{{ $paginator->previousPageUrl() }}" class="w3-bar-item w3-button w3-hover-black">&lt;</a> 
        @else
            <p class="w3-bar-item my-button inactive">&lt;</p> 
        @endif
        
        <p class="w3-bar-item my-button link-static">{{ $paginator->firstItem() }} / {{ $paginator->lastItem() }} </p>     
        <!-- Link alla pagina successiva -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="w3-bar-item w3-button w3-hover-black">&gt;</a> 
        @else
        <p class="w3-bar-item my-button inactive ">&gt;</p> 
        @endif

        <!-- Link all'ultima pagina -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="w3-bar-item w3-button w3-hover-black">&gt;</a>
        @else
        <p class="w3-bar-item my-button inactive">&gt;&gt;</p> 
        @endif
    </div>
</div>
@endif

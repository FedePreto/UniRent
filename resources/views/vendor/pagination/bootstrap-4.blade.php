


<div class="w3-center ">
    <div class="w3-bar">

        @if ($paginator->hasPages())
        <nav>
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="page-item disabled w3-bar-item " style="padding-right:5px; padding-left:10px;" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" style="pointer-events: none; color:grey;" aria-hidden="true">&lsaquo;</a>
                </div>
            @else
                <div class="page-item w3-bar-item  " style="padding-right:5px; padding-left:10px;">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </div>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <div class="page-item disabled w3-bar-item  " style="padding-right:5px; padding-left:10px;" aria-disabled="true"><a class="page-link" style=" color:grey;">{{ $element }}</a></div>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <div class="page-item activetor w3-bar-item  " style="padding-right:5px; padding-left:10px;" aria-current="page"><a class="page-link" style="pointer-events: none; color:grey;">{{ $page }}</a></div>
                        @else
                            <div class="page-item w3-bar-item " style="padding-right:5px; padding-left:10px;"><a class="page-link" href="{{ $url }}">{{ $page }}</a></div>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <div class="page-item w3-bar-item  " style="padding-right:5px; padding-left:10px;">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
</div>
            @else
                <div class="page-item disabled w3-bar-item " style="padding-right:5px; padding-left:10px;" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link" style="pointer-events: none;  color:grey;" aria-hidden="true">&rsaquo;</a>
</div>
            @endif
</div>
    </nav>
@endif
    </div>
</div>
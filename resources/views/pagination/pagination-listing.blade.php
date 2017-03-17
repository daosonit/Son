@if ($paginator->hasPages())
    <ul class="pager pager-v3 pager-sm no-margin-bottom">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <li class="previous"><a href="{{ $paginator->previousPageUrl() }}">&larr; Lùi</a></li>
        @endif

        <li class="page-amount">{{$paginator->currentPage()}} of {{$paginator->lastPage()}} </li>
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Tiến &rarr;</a></li>
        @endif
    </ul>
@endif



@if ($paginator->hasPages())
    <div class="clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn btn-light btn-outline-dark disabled float-left">{{'Newest post'}}</span>
        @else
            <a class="btn btn-primary float-left" href="{{ $paginator->previousPageUrl() }}">{{'Newest post'}}</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-primary float-right" href="{{ $paginator->nextPageUrl() }}">{{'Older post'}}</a>
        @else
            <span class="btn btn-light btn-outline-dark disabled float-right">{{'Older post'}}</span>
        @endif
    </div>
@endif

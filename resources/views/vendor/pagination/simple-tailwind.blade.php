@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Lien page précédente --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 text-sm font-medium bg-white border border-gray-300 rounded-md cursor-not-allowed opacity-50">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
               class="px-4 py-2 text-sm font-medium bg-white border border-gray-300 rounded-md hover:bg-gray-100">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Lien page suivante --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
               class="px-4 py-2 text-sm font-medium bg-white border border-gray-300 rounded-md hover:bg-gray-100">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="px-4 py-2 text-sm font-medium bg-white border border-gray-300 rounded-md cursor-not-allowed opacity-50">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif

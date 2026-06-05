@if ($paginator->hasPages())
<nav class="d-flex flex-column align-items-center justify-content-center mt-4 gap-2">

    {{-- Info --}}
    <div class="text small text-center">
        Showing <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
        – <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
        of <span class="fw-semibold">{{ $paginator->total() }}</span>
    </div>

    {{-- Pagination --}}
    <ul class="pagination mb-0">

        {{-- Prev --}}
        <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link border-0 rounded-start-pill px-3 py-2"
               href="{{ $paginator->previousPageUrl() ?? '#' }}">
                ← Prev
            </a>
        </li>

        {{-- Pages --}}
        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link border-0 px-3 py-2">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <span class="page-link bg-primary text-white border-0 px-3 py-2">
                                {{ $page }}
                            </span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link border-0 px-3 py-2"
                               href="{{ $url }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endif

                @endforeach
            @endif

        @endforeach

        {{-- Next --}}
        <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link border-0 rounded-end-pill px-3 py-2"
               href="{{ $paginator->nextPageUrl() ?? '#' }}">
                Next →
            </a>
        </li>

    </ul>
</nav>

<style>
.pagination {
    gap: 4px;
}

.page-link {
    color: #374151;
    background: #ffffff;
    transition: all 0.2s ease;
    border-radius: 8px;
}

.page-link:hover {
    background: #f3f4f6;
    transform: translateY(-1px);
}

.page-item.active .page-link {
    background: #2563eb !important;
    color: #fff !important;
    font-weight: 500;
}

.page-item.disabled .page-link {
    opacity: 0.5;
}
</style>
@endif
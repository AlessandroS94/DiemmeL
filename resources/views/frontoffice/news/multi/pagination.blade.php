<ul class="pagination">
    @if ($collection->onFirstPage())
        <li class="page-item disabled">
            <a href="#" class="page-link" aria-label="Previous">
                <
            </a>
        </li>
    @else
        <li class="page-item">
            <a href="{{ $collection->previousPageUrl() }}" class="page-link" aria-label="Previous">
                <
            </a>
        </li>
    @endif

    @foreach ($collection->getUrlRange(1, $collection->lastPage()) as $page => $url)
        <li class="page-item{{ $page == $collection->currentPage() ? ' active' : '' }}">
            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
        </li>
    @endforeach

    @if ($collection->hasMorePages())
        <li class="page-item">
            <a href="{{ $collection->nextPageUrl() }}" class="page-link" aria-label="Next">
                >
            </a>
        </li>
    @else
        <li class="page-item disabled">
            <a href="#" class="page-link" aria-label="Next">
                >
            </a>
        </li>
    @endif
</ul>

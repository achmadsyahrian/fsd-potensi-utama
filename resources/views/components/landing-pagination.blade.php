<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <!-- Previous Page Link -->
        @if ($data->onFirstPage())
            <li class="page-item disabled">
                <a>
                    <span class="page-link">&laquo;</span>
                </a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        @endif

        <!-- Page Number Links -->
        @php
            $currentPage = $data->currentPage();
            $lastPage = $data->lastPage();
            $start = max(1, $currentPage - 1);
            $end = min($lastPage, $currentPage + 1);
        @endphp

        <!-- First Page -->
        @if ($start > 1)
            <li class="page-item">
                <a class="page-link" href="{{ $data->url(1) }}">1</a>
            </li>
            @if ($start > 2)
                <li class="page-item disabled">
                    <a>
                        <span class="page-link">...</span>
                    </a>
                </li>
            @endif
        @endif

        <!-- Page Range -->
        @for ($page = $start; $page <= $end; $page++)
            <li class="page-item">
                <a class="page-link {{ $currentPage == $page ? 'status-color text-white' : '' }}" href="{{ $data->url($page) }}">{{ $page }}</a>
            </li>
        @endfor

        <!-- Last Page -->
        @if ($end < $lastPage)
            @if ($end < $lastPage - 1)
                <li class="page-item disabled">
                    <a>
                        <span class="page-link">...</span>
                    </a>
                </li>
            @endif
            <li class="page-item">
                <a class="page-link" href="{{ $data->url($lastPage) }}">{{ $lastPage }}</a>
            </li>
        @endif

        <!-- Next Page Link -->
        @if ($data->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">&raquo;</span>
            </li>
        @endif
    </ul>
</nav>
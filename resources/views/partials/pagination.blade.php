@if ($totalPages > 1)
<nav>
    <ul class="pagination justify-content-center">
        @if ($currentPage > 1)
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);" onclick="loadPage({{ $currentPage - 1 }})"><</a>
            </li>
        @endif

        @for($i = 1; $i <= $totalPages; $i++)
            <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                <a class="page-link" href="javascript:void(0);" onclick="loadPage({{ $i }})">{{ $i }}</a>
            </li>
        @endfor

        @if ($currentPage < $totalPages)
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);" onclick="loadPage({{ $currentPage + 1 }})">></a>
            </li>
        @endif
    </ul>
</nav>
@endif

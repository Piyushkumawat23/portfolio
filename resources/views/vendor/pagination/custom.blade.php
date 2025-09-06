@if ($paginator->hasPages())
    <div class="cs_height_60 cs_height_lg_40"></div>
    <div class="cs_pagenation cs_style_1 cs_center">
        <ul class="cs_mp_0">
            {{-- Previous Page Link --}}
            <li class="prev {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                @if ($paginator->onFirstPage())
                    <a href="javascript:void(0);"><span><i class="fa-solid fa-angle-left"></i></span></a>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        <span><i class="fa-solid fa-angle-left"></i></span>
                    </a>
                @endif
            </li>

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Three Dots --}}
                @if (is_string($element))
                    <li><a href="javascript:void(0);"><span>{{ $element }}</span></a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="{{ $page == $paginator->currentPage() ? 'active' : '' }}">
                            <a href="{{ $url }}"><span>{{ $page }}</span></a>
                        </li>
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            <li class="next {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </a>
                @else
                    <a href="javascript:void(0);"><span><i class="fa-solid fa-angle-right"></i></span></a>
                @endif
            </li>
        </ul>
    </div>
@endif

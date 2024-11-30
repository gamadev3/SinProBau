@if ($paginator->hasPages())
    <nav class="w-full flex justify-center">
        <ul class="list-style-none flex items-center">
            @if ($paginator->onFirstPage())
                <li>
                    <a class="cursor-pointer relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700" aria-label="Previous">
                        <img src="/images/icons/disabled-pagination-left-arrow.svg" alt="Começo das notícias">
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700" aria-label="Previous">
                        <img src="/images/icons/enabled-pagination-left-arrow.svg" alt="Notícias anteriores">
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page">
                                <a class="cursor-pointer text-green-700 font-medium text-sm px-3 py-2.5 text-center mx-2 mb-2">{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-sm text-sm px-3 py-2.5 text-center mx-2 mb-2">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700" aria-label="Next">
                        <img src="/images/icons/enabled-pagination-right-arrow.svg" alt="Próximos notícias">
                    </a>
                </li>
            @else
                <li>
                    <a class="cursor-pointer relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700" aria-label="Next">
                        <img src="/images/icons/disabled-pagination-right-arrow.svg" alt="Não há mais notícias">
                    </a>
                </li>

            @endif
        </ul>
    </nav>
@endif

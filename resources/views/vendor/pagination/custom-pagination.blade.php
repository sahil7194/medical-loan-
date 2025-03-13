@if ($paginator->hasPages())
    <div class="wow fadeInUp flex items-center justify-center space-x-3 pt-10 pb-[70px]" data-wow-delay=".2s">

        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <span class="flex h-10 w-10 items-center justify-center rounded bg-white text-base font-medium text-black drop-shadow-card cursor-not-allowed">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.93896 6.99999L7.88896 11.95L6.47496 13.364L0.110962 6.99999L6.47496 0.635986L7.88896 2.04999L2.93896 6.99999Z" fill="currentColor" />
                </svg>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex h-10 w-10 items-center justify-center rounded bg-white text-base font-medium text-black drop-shadow-card hover:bg-primary hover:text-white dark:bg-dark dark:text-white dark:drop-shadow-card-dark dark:hover:bg-primary">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.93896 6.99999L7.88896 11.95L6.47496 13.364L0.110962 6.99999L6.47496 0.635986L7.88896 2.04999L2.93896 6.99999Z" fill="currentColor" />
                </svg>
            </a>
        @endif

        <!-- Pagination Links -->
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <a href="{{ $url }}" class="flex h-10 w-10 items-center justify-center rounded bg-white text-base font-medium text-black drop-shadow-card hover:bg-primary hover:text-white dark:bg-dark dark:text-white dark:drop-shadow-card-dark dark:hover:bg-primary
                    @if ($paginator->currentPage() == $page) bg-primary text-white @endif">
                        {{ $page }}
                    </a>
                @endforeach
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex h-10 w-10 items-center justify-center rounded bg-white text-base font-medium text-black drop-shadow-card hover:bg-primary hover:text-white dark:bg-dark dark:text-white dark:drop-shadow-card-dark dark:hover:bg-primary">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.06092 7.00001L0.110915 2.05001L1.52491 0.636014L7.88892 7.00001L1.52492 13.364L0.110916 11.95L5.06092 7.00001Z" fill="currentColor" />
                </svg>
            </a>
        @else
            <span class="flex h-10 w-10 items-center justify-center rounded bg-white text-base font-medium text-black drop-shadow-card cursor-not-allowed">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.06092 7.00001L0.110915 2.05001L1.52491 0.636014L7.88892 7.00001L1.52492 13.364L0.110916 11.95L5.06092 7.00001Z" fill="currentColor" />
                </svg>
            </span>
        @endif
    </div>
@endif

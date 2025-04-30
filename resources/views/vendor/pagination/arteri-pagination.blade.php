@if ($paginator->hasPages())
  <nav
    role="navigation"
    aria-label="{{ __("Pagination Navigation") }}"
    class="flex items-center justify-between overflow-x-scroll scrollbar-hide"
  >

    <div class="flex flex-1 sm:items-center sm:justify-center">
      <div class="py-4">
        <span class="relative z-0 inline-flex gap-3 rounded-md rtl:flex-row-reverse">
          {{-- Previous Page Link --}}

          @if ($paginator->onFirstPage())
            <span aria-disabled="true" aria-label="{{ __("pagination.previous") }}">
              <span
                class="relative inline-flex cursor-default items-center rounded-md border border-[#E0E0E0] bg-transparent px-2 py-2 text-sm font-semibold leading-5 text-[#BDBDBD] transition duration-150 ease-in-out focus:z-10 focus:outline-none"
                aria-hidden="true"
              >
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </span>
          @else
            <a
              href="{{ $paginator->previousPageUrl() }}"
              rel="prev"
              class="relative inline-flex items-center rounded-md border border-[#E0E0E0] bg-transparent px-2 py-2 text-sm font-semibold leading-5 text-[#BDBDBD] transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:z-10 focus:outline-none"
              aria-label="{{ __("pagination.previous") }}"
            >
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          @endif

          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
              <span aria-disabled="true">
                <span
                  class="relative -ml-px inline-flex cursor-default items-center rounded-md border border-[#E0E0E0] bg-transparent px-4 py-2 text-sm font-semibold leading-5 text-[#BDBDBD]"
                >
                  {{ $element }}
                </span>
              </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
              @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span aria-current="page">
                    <span
                      class="relative -ml-px inline-flex cursor-default items-center rounded-md border border-transparent bg-[#E0E0E0] px-4 py-2 text-sm font-semibold leading-5 text-[#212121]"
                    >
                      {{ $page }}
                    </span>
                  </span>
                @else
                  <a
                    href="{{ $url }}"
                    class="relative -ml-px inline-flex items-center rounded-md border border-transparent bg-transparent px-4 py-2 text-sm font-semibold leading-5 text-gray-700 transition duration-150 ease-in-out hover:border-[#E0E0E0] hover:text-gray-700 focus:z-10 focus:outline-none"
                    aria-label="{{ __("Go to page :page", ["page" => $page]) }}"
                  >
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Next Page Link --}}

          @if ($paginator->hasMorePages())
            <a
              href="{{ $paginator->nextPageUrl() }}"
              rel="next"
              class="relative -ml-px inline-flex cursor-default items-center rounded-md border border-[#E0E0E0] bg-transparent px-2 py-2 text-sm font-medium leading-5 text-[#BDBDBD] transition duration-150 ease-in-out hover:border-gray-500 hover:text-gray-700 focus:z-10 focus:outline-none"
              aria-label="{{ __("pagination.next") }}"
            >
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          @else
            <span aria-disabled="true" aria-label="{{ __("pagination.next") }}">
              <span
                class="relative -ml-px inline-flex cursor-default items-center rounded-md border border-[#E0E0E0] bg-transparent px-2 py-2 text-sm font-medium leading-5 text-[#BDBDBD]"
                aria-hidden="true"
              >
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </span>
          @endif
        </span>
      </div>
    </div>
  </nav>
@endif

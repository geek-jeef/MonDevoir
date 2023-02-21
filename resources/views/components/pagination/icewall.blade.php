<div>
  @if ($paginator->hasPages())
    @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)
    <nav role="navigation" aria-label="Pagination Navigation" class="w-full sm:w-auto sm:mr-auto mt-2">
      <ul class="pagination">
        {{-- Previous Page Link --}}
        <li class="page-item">
          @if ($paginator->onFirstPage())
            <a aria-disabled="true" class="page-link" href="javascript:;" aria-label="{{ __('pagination.previous') }}" >
              <x-icon class="w-4 h-4" name="chevron-left" />
            </a>
          @else
            <a class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" rel="prev" aria-label="{{ __('pagination.previous') }}">
              <x-icon class="w-4 h-4" name="chevron-left" />
            </a>
          @endif
        </li>

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
          {{-- "Three Dots" Separator --}}
          @if (is_string($element))
            <li class="page-item"  aria-disabled="true">
              <a class="page-link" href="javascript:;">{{ $element }}</</a>
            </li>
          @endif

          {{-- Array Of Links --}}
          @if (is_array($element))
            @foreach ($element as $page => $url)
              <li wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page{{ $page }}" class="page-item {{($page == $paginator->currentPage())? 'active' : ''}} ">
                @if ($page == $paginator->currentPage())
                  <a aria-current="page" class="page-link" href="javascript:;">{{ $page }}</a>
                @else
                  <a wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" aria-label="{{ __('Go to page :page', ['page' => $page]) }}" class="page-link" href="javascript:;">{{ $page }}</a>
                @endif
              </li>
            @endforeach
          @endif
        @endforeach
        {{-- Next Page Link --}}
        <li class="page-item">
          @if ($paginator->hasMorePages())
            <a class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" href="javascript:;" aria-label="{{ __('pagination.next') }}" >
              <x-icon class="w-4 h-4" name="chevron-right" />
            </a>
          @else
            <a aria-disabled="true" class="page-link" href="javascript:;" aria-label="{{ __('pagination.next') }}">
              <x-icon class="w-4 h-4" name="chevron-right" />
            </a>
          @endif
        </li>
      </ul>
    </nav>
  @endif
  {{--<div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#">
          <i class="w-4 h-4" data-feather="chevrons-left"></i>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">
          <i class="w-4 h-4" data-feather="chevron-left"></i>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">...</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">...</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">
          <i class="w-4 h-4" data-feather="chevron-right"></i>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">
          <i class="w-4 h-4" data-feather="chevrons-right"></i>
        </a>
      </li>
    </ul>
  <select class="w-20 form-select box mt-3 sm:mt-0">
    <option>10</option>
    <option>25</option>
    <option>35</option>
    <option>50</option>
  </select>
</div>
--}}
</div>

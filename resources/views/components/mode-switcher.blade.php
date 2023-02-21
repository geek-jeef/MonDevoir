<div class="cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-12 h-12 flex items-center justify-center z-50 mb-8 mr-10 bg-primary dark:bg-primary print:hidden">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#theme-switcher-modal" class="relative text-white/70">
      <x-icon name="color-swatch" class=" w-6 h-6 dark:text-slate-500" />
    </a>
</div>
  <div id="theme-switcher-modal" class="modal print:hidden" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Choisir Un theme</h2>
        </div>
        <div class="modal-body">
          @include('components/main-color-switcher')
          @include('components/dark-mode-switcher')
        </div>
      </div>
    </div>
  </div>

<div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12 print:hidden">
  <div class="h-full flex items-center">

    <a href="#" class="-intro-x hidden md:flex">
      <img alt="" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
      <span class="text-white text-lg ml-3">
        {{config('ecole.nom.court')}}
      </span>
    </a>

    <livewire:widget.annee-scolaire />
    <livewire:widget.outils-recherche wire:key="unique-outils-recherche" />
    <livewire:widget.switcher />
    <livewire:widget.profil />
  </div>
</div>
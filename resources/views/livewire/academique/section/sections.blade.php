<section>

  <div class="wrapper mt-8 z-40 print:hidden">
    <div class="wrapper-box">
      <nav class="top-nav" style="padding-top:0.5rem; padding-bottom: 0.5rem;">
        <ul>
          @foreach ($cycles as $cycle)
            <li>
              <a href="javascript:;" class="{{ ($currentCycleId == $cycle->id) ? 'top-menu top-menu--active' : 'top-menu' }}">
                <div class="top-menu__icon  ">
                  <x-icon name="office-building" class="text-white w-5 h-5" />
                </div>
                <div class="top-menu__title">
                  {{ $cycle->nom_cycle }}
                  @if ($cycle->classes->count())
                    <x-icon name="chevron-down" class="top-menu__sub-icon" />
                  @endif
                </div>
              </a>
              @if($cycle->classes->count())
                <ul class="{{ ($currentCycleId == $cycle->id) ? 'top-menu__sub-open' : '' }}">
                  @foreach ($cycle->classes as $classe)
                    <li class="{{ ($currentClasseId == $classe->id) ? 'bg-black/20' : '' }} hover:bg-white/10">
                      <a 
                        href="javascript:;"
                        wire:click="changeCurrentClasse({{$classe->id}},{{$cycle->id}})"
                        class="top-menu ">
                        <div class="top-menu__icon">
                          <x-icon name="tag" class="text-white w-5 h-5" />
                        </div>
                        <div class="top-menu__title">
                          {{ $classe->nom_court }}
                        </div>
                      </a>
                    </li>
                  @endforeach
                </ul>
              @endif
              
            </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </div>

  <div class="tab-content mt-5 print:shadow-none print:m-0 print:p-5">
    @if($currentClasse)
      <div wire:loading.remove>
        <livewire:academique.section.salle-par-classe :classe="$currentClasse" wire:key="liste-salle-{{$currentClasse}}-classe" />
      </div>
      <div wire:loading class="flex justify-center w-full text-center">
        <x-loading />
      </div>
    @else
      <x-empty-state titre="Choisir une Classe" message="" />
    @endif
  </div>



   <div id="formulaire-creation-salle" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Enregistrer une Salle</h2>
        </div>
        <div class="modal-body">
          <livewire:forms.section.create-salle-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>  
  
</section>

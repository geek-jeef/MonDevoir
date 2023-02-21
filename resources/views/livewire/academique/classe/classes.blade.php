<section>
  <div wire:ignore class="intro-y flex items-center mt-8 print:hidden">
    <h2 class="text-lg font-medium mr-auto">Classes</h2>
    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
      {{--<button class="btn btn-primary mr-2 mb-2">
        Ajouter Une Classe <i class="w-6 h-6 ml-2" data-feather="plus"></i> 
      </button>
      --}}
      <a href="javascript:;" class="btn btn-outline-primary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-classe"> Enregistrer Une Classe
        <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
        <x-icon name="plus" class="w-6 h-6" solid />
        </span>
      </a>
    </div>
  </div>
  <div wire:ignore class="intro-y box px-5 mt-5 print:hidden">
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
      @if($cycles)
      @foreach($cycles as $cycle)
        <li id="classes-cycle-{{$cycle->id}}-tab" class="nav-item" role="presentation">
          <button
            href="javascript:;"
            wire:click="changeCurrentCycle({{$cycle->id}})"
            class="nav-link py-4 {{ ( $currentCycle->id == $cycle->id  ) ? 'active' : ''}}"
            data-tw-target="#classes-cycle-{{$cycle->id}}"
            aria-controls="classes-cycle-{{$cycle->id}}"
            aria-selected="{{( $currentCycle->id == $cycle->id  )? 'true' : 'false'}}"
            role="tab"
          >
            {{$cycle->nom_cycle}}
          </button>
        </li>
      @endforeach
      @endif
    </ul>
  </div>
  <div class="intro-y tab-content mt-5 print:shadow-none print:m-0 print:p-0">
    @if($currentCycle)
      <div wire:loading.remove id="classes-cycle-{{$currentCycle->id}}" class="tab-pane active " role="tabpanel" aria-labelledby="classes-cycle-{{$currentCycle->id}}-tab" wire:key="classes-cycle-{{$currentCycle->id}}">
        <livewire:academique.classe.classe-par-cycle :cycle="$currentCycle" wire:key="classes-cycle-content-{{$currentCycle->id}}" />
      </div>
    @else
      <x-empty-state message="Aucun cycle Disponible" />
    @endif
    <div wire:loading class="text-center w-full print:hidden" >
      <x-loading />
    </div>
  </div>

  <div id="formulaire-creation-classe" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Enregistrer une Classe</h2>
        </div>
        <div class="modal-body">
          <livewire:forms.classe.create-classe-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>
</section>

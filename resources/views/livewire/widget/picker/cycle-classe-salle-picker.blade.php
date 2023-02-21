<div>
  <div class="sm:flex sm:mr-auto w-full" >
    <div class="sm:flex items-center sm:mr-4">
      <livewire:widget.select
        title="Cycle"
        :value="$cycle"
        :options="$cycles"
        option_value="id"
        option_label="nom_cycle"
        emitUpEvent="cycleSelected"
      />                    
    </div>
    <div class="sm:flex items-center sm:mr-4">
      <livewire:widget.select
        title="Classe"
        :value="$classe"
        :options="$classes"
        option_value="id"
        option_label="nom_classe"
        key="cycle-{{ $cycle ?? 'none' }}-classes"
        emitUpEvent="classeSelected"
      />                    
    </div>
    <div class="sm:flex items-center sm:mr-4">
      <livewire:widget.select
        title="Salle"
        :value="$salle"
        :options="$salles"
        option_value="id"
        option_label="nom_salle"
        key="classe-{{ $classe ?? 'none' }}-salles"
        emitUpEvent="salleSelected"
      />
    </div>
    <div class="mt-2 xl:mt-0 self-end">
      <a class="btn btn-primary {{ $ready ? '' : 'disabled'}}" {{ $ready ? '' : 'disabled'}} href="javascript:;" 
      wire:click="onMakeItRainClick"  spinner="onMakeItRainClick" wire:loading.attr="disabled" wire:loading.class="!cursor-wait" wire:target="onMakeItRainClick" /> Valider
        <svg class="animate-spin w-4 h-4 mx-2 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" @if (preg_replace('/[^a-zA-Z]+/', '', 'onMakeItRainClick')) wire:target="onMakeItRainClick" @endif wire:loading.delay>
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
      </a>
    </div>
  </div>
</div>

  

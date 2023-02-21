<div class=" col-span-12 flex items-center justify-center sm:justify-end mt-5">
  @if($this->hasPrevStep())
    <button type="button" class="btn btn-primary ml-2" wire:click="goToPrevStep" spinner="goToPrevStep" wire:loading.attr="disabled" wire:loading.class="!cursor-wait" wire:target="goToPrevStep">
      <x-dynamic-component :component="WireUi::component('icon')" name="chevron-left" class="w-4 h-4 shrink-0"/> {{__('Précédent')}}
      <svg class="animate-spin w-4 h-4 mx-2 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" @if (preg_replace('/[^a-zA-Z]+/', '', 'goToPrevStep')) wire:target="goToPrevStep" @endif wire:loading.delay>
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
    </button>
  @endif
  @if($this->hasNextStep())
    <button type="button" class="btn btn-primary ml-2" wire:click="goToNextStep" spinner="goToNextStep" wire:loading.attr="disabled" wire:loading.class="!cursor-wait" wire:target="goToNextStep">
      <svg class="animate-spin w-4 h-4 mx-2 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" @if (preg_replace('/[^a-zA-Z]+/', '', 'goToNextStep')) wire:target="goToNextStep" @endif wire:loading.delay>
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
       {{__('Suivant')}}
      <x-dynamic-component :component="WireUi::component('icon')" name="chevron-right" class="w-4 h-4 shrink-0"/>
    </button>
  @else
    <button type="submit" class="btn btn-primary  w-24 ml-2">{{__('Soumettre')}}</button>
  @endif
</div>
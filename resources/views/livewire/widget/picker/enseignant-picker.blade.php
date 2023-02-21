<div>
  <div class="xl:flex sm:mr-auto w-full" >
    <div class="sm:flex items-center sm:mr-4">
      <x-select
        label="Choisir Un Enseignant"
        wire:model.defer="enseignant_id"
        placeholder="Choisir un Enseignant"
        :async-data="route('api.enseignants.index')"
        :template="[
          'name'   => 'user-option',
          'config' => ['src' => 'profile_image']
        ]"
        option-label="nom_complet"
        option-value="id"
        option-description="phone"
      />
    </div>
    <div class="mt-2 xl:mt-0 self-end">
      <a class="btn btn-primary " href="javascript:;" wire:click="onValidation"  spinner="onValidation" wire:loading.attr="disabled" wire:loading.class="!cursor-wait" wire:target="onValidation" /> Valider
        <svg class="animate-spin w-4 h-4 mx-2 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" @if (preg_replace('/[^a-zA-Z]+/', '', 'onValidation')) wire:target="onValidation" @endif wire:loading.delay>
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
      </a>
    </div>
  </div>
</div>
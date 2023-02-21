<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>

  <div class="intro-y box mt-5">
    <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
      <h2 class="font-medium text-base mr-auto">Soumettre Les Notes</h2>
      <div class="form-check form-switch">
        <input class="form-check-input" wire:model="editable" type="checkbox">
        <label class="form-check-label" >Modifier</label>
      </div>
    </div>
    <div class="p-5">
      <form wire:submit.prevent="Soumettre" {{ (!$editable) ? 'disabled' :''}} >
        <x-errors class="mt-3"/>
        <div class="mt-3">
          <h2 class="font-medium"> La Soumission Sera Faites pour l'année <span class="text-primary"> {{$notable->annee->nom_annee}} </span> </h2>
        </div>
        <div class="mt-3">
            <x-select
                label="Choisir Une Periode"
                placeholder="Periode"
                :options="$periodes->toArray()"
                option-label="nom_periode"
                option-value="id"
                wire:model="periode_id"
                x-on:close="Livewire.emit('modifierListeExamen')"
                x-on:clear="Livewire.emit('modifierListeExamen')"
            />
        </div>
        <div class="mt-3">
            <x-select
                label="Choisir Un Examen"
                placeholder="Examen"
                :options="$examens"
                option-label="nom_examen"
                option-value="id"
                wire:model.defer="examen_id"
            />
        </div>
        @if($editable)
        <div class="mt-3">
          <button class="btn btn-primary" type="submit">Soumettre</button>
        </div>
        @endif
      </form>
    </div>
  </div>

  <div class="intro-y box mt-5 border-2 border-danger  dark:border-danger">
    <div class="flex items-center p-5 border-b border-danger/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto"> Retirer La Soumission</h2>
    </div>
    <div class="p-5">
        <div class="text-sm ">
          Les Notes enregistrées ne seront pas tenues en compte dans les calcul des resultats
        </div>
        <div class="mt-5">
            <button wire:click="Retirer"  wire:loading.attr="disabled" class="btn btn-danger" >
                Retirer La Soumission
            </button>
        </div>
    </div>
  </div>

</div>
<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>

  {{--

    'periode.nom_periode' => 'required|string',
    'periode.date_debut' => "required|date",
    'periode.date_fin' => "required|date|after:periode.date_debut",
    'periode.cycle_academique_id' => 'required|integer',

  --}}
  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <x-native-select
          label="Choisir Un Cycle"
          placeholder="Choisir un cycle"
          :options="$cycles"
          option-label="nom_cycle"
          option-value="id"
          wire:model.defer="periode.cycle_academique_id"
          required

      />
    </div>
    <div class="mt-3">
      <h2>La Periode séra créee pour l"Année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
    </div>
    <div class="mt-3">
      <x-input label="Nom de la Periode" wire:model.defer="periode.nom_periode" placeholder="Trimestre , Semestre etc..." required />
    </div>
    <div class="mt-3">
      <label  class="form-label">Date de Début</label>
      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="periode.date_debut" required>
    </div>
    <div class="mt-3">
      <label  class="form-label">Date de Fin</label>
      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="periode.date_fin" required>
    </div>

    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
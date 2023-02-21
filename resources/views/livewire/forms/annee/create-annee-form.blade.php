<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <x-input label="Nom de l' Année Scolaire" wire:model.defer="annee.nom_annee" placeholder="2021-2022" required />
    </div>
    <div class="mt-3">
      <label  class="form-label">Date de Début</label>
      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="annee.date_debut" required>
    </div>
    <div class="mt-3">
      <label  class="form-label">Date de Fin</label>
      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="annee.date_fin" required>
    </div>
    <div class="mt-3">
      <div class="form-check form-switch">
          <input class="form-check-input" wire:model.defer="annee.ouvert_pour_inscription" type="checkbox">
          <label class="form-check-label" >Ouvert Pour les Inscriptions</label>
      </div>
    </div>
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
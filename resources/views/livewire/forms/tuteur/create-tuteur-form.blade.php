<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <div class="mt-3">
      <label  class="form-label">Nom et Prénoms</label>
      <input type="text" class="form-control" wire:model.defer="tuteur.nom">
    </div>
    <div class="mt-3">
      <label class="form-label">Numéro de télephone Principal</label>
      <x-input wire:model.defer="tuteur.phone_primaire" />
    </div>
    <div class="mt-3">
      <label class="form-label">Numéro de télephone Secondaire</label>
      <x-input wire:model.defer="tuteur.phone_secondaire" />
    </div>
    <div class="mt-3">
      <x-select
        label="Sexe"
        placeholder="Choisir Le Sexe"
        wire:model.defer="tuteur.genre" required>
        <x-select.option label="Masculin" value="Masculin" />
        <x-select.option label="Feminin" value="Feminin" />
      </x-select>
    </div>
    <div class="mt-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" wire:model.defer="tuteur.email" placeholder="example@gmail.com">
    </div>
    <div class="mt-3">
      <label  class="form-label">Adresse</label>
        <textarea class="form-control" rows="2" wire:model.defer="tuteur.adresse"></textarea>
    </div>
    <div class="mt-3">
      <label  class="form-label">Profession</label>
      <input type="text" class="form-control" wire:model.defer="tuteur.profession">
    </div>
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
<div>
  <div class="font-medium text-base">Information sur l'éleve</div>
  <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
    <div class="intro-y col-span-12 sm:col-span-6">
      <label  class="form-label">Nom</label>
      <input type="text" class="form-control" placeholder="nom" wire:model.defer="state.nom" minlength="2" required>
    </div>
    <div class="intro-y col-span-12 sm:col-span-6">
      <label  class="form-label">Prénoms</label>
      <input type="text" class="form-control" placeholder="Prénoms" wire:model.defer="state.prenoms" minlength="2" required>
    </div>
    <div class="intro-y col-span-12 sm:col-span-6" >
      <x-select
        label="Sexe"
        placeholder="Choisir Le Sexe"
        wire:model.defer="state.genre" required>
        <x-select.option label="Masculin" value="Masculin" />
        <x-select.option label="Feminin" value="Feminin" />
      </x-select>
    </div>

    <div class="intro-y col-span-12 sm:col-span-6">
      <x-select
        label="Nationalité"
        wire:model.defer="state.nationalite" 
        placeholder="Choisir une Nationalité" 
        :async-data="route('api.pays.index')" 
        option-label="nationalite" 
        option-value="nationalite" 
        option-description="libelle"
      />
    </div>

    <div class="intro-y col-span-12 sm:col-span-6">
      <label  class="form-label">Date de Naissance</label>
      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="state.date_de_naissance" required>
    </div>

    <div class="intro-y col-span-12 sm:col-span-6">
      <label  class="form-label">Lieu de Naissance</label>
      <input type="text" class="form-control" wire:model.defer="state.lieu_de_naissance" required>
    </div>                

    <div class="intro-y col-span-12 sm:col-span-12">
      <label  class="form-label">Adresse</label>
      <textarea class="form-control" rows="2" wire:model.defer="state.adresse"></textarea>
    </div>
  </div>
</div>


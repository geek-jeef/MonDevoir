<div>

  <form wire:submit.prevent="save">
  <div class="intro-y box mt-5">
    <div class="font-medium py-5 px-10 text-base">Information sur l'éleve</div>
    <div class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
      <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
        <div class="intro-y col-span-12 sm:col-span-6">
          <x-input icon="user" right-icon="pencil" label="Nom" placeholder="nom" value="{{$eleve->nom}}" wire:model.defer="eleve.nom" required />
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">

          <label  class="form-label">Prénoms</label>
          <input type="text" class="form-control" placeholder="Prénoms" wire:model.defer="eleve.prenoms" minlength="2" required>
        </div>
        <div class="intro-y col-span-12 sm:col-span-6" >
          <x-select
            label="Sexe"
            placeholder="Choisir Le Sexe"
            wire:model.defer="eleve.genre" required>
            <x-select.option label="Masculin" value="Masculin" />
            <x-select.option label="Feminin" value="Feminin" />
          </x-select>
        </div>
        <div class="intro-y col-span-12 sm:col-span-6">
          <label  class="form-label">Date de Naissance</label>
          <input type="date" class="form-control" wire:model.defer="eleve.date_de_naissance" required>
        </div>                 

        <div class="intro-y col-span-12 sm:col-span-12">
          <label  class="form-label">Nationalité</label>
          <x-select
            wire:model.defer="eleve.nationalite" 
            placeholder="Choisir une Nationalité" 
            :async-data="route('api.pays.index')" 
            option-label="nationalite" 
            option-value="nationalite" 
            option-description="libelle"
          />
        </div>

        <div class="intro-y col-span-12 sm:col-span-12">
          <label  class="form-label">Adresse</label>
          <textarea class="form-control" rows="2" wire:model.defer="eleve.adresse"></textarea>
        </div>

        <div class="intro-y col-span-12 sm:col-span-12">
          <button class="btn btn-primary"><i data-feather="save" class="w-4 h-4 mx-2"></i>Enregistrer</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  <div class="intro-y mt-2">
    <livewire:eleve.carte.carte-widget selected="0" :eleve="$eleve" :annee="\Hp::annee()" wire:key="carte-widget-editor-{{$eleve->id}}" />
  </div>
</div>
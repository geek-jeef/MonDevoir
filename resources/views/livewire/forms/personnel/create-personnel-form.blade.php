<div>
  <div class="intro-y box" >
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
      <h2 class="font-medium text-base mr-auto">Remplissez ce formulaire</h2>
    </div>
    <form wire:submit.prevent="save" class="p-5">
      <x-errors class="mt-3"/>       
      <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
        <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Information</div>
      </div>
      <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
          <x-input label="Nom" wire:model.defer="personnel.nom" required />
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
          <x-input label="Prénoms" wire:model.defer="personnel.prenoms" required />
        </div>

        <div class="intro-y col-span-12 lg:col-span-6">
          <x-select
            label="Sexe"
            placeholder="Choisir Le Sexe"
            wire:model.defer="personnel.genre" required>
            <x-select.option label="Masculin" value="Masculin" />
            <x-select.option label="Feminin" value="Feminin" />
          </x-select>
        </div>

        <div class="intro-y col-span-12 lg:col-span-6">
          <label  class="form-label">Date de Naissance</label>
          <input type="date" class="form-control" data-single-mode="true" wire:model.defer="personnel.date_de_naissance" required>
        </div>
      </div>

      <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-8">
        <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Emploi</div>
      </div>
      <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
          <x-input label="Poste" wire:model.defer="personnel.designation" required />
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
          <x-input label="Formation" wire:model.defer="personnel.qualification" required />
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
          <label  class="form-label">Date D'embauche</label>
          <input type="date" class="form-control" data-single-mode="true" wire:model.defer="personnel.date_embauche" required>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6 self-end">
          {{-- TODO: droit d'acces predefinis --}}
          <div class="form-check form-switch">
            <input class="form-check-input" wire:model.defer="personnel.enseignant" type="checkbox">
            <label class="form-check-label" >Enseignant?</label>
          </div>
        </div>
      </div>


      <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-8">
        <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Contact</div>
      </div>

      <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
          <x-input label="Télephone" wire:model.defer="personnel.phone" required />
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
          <x-input label="Email" wire:model.defer="personnel.email" required />
        </div>
        <div class="intro-y col-span-12 lg:col-span-12">
          <x-textarea wire:model.defer="personnel.adresse" label="Adresse" />
        </div>
      </div>
      <div class="mt-3">
        <button class="btn btn-primary" type="submit">Enregister</button>
      </div>                           
    </form>
</div>
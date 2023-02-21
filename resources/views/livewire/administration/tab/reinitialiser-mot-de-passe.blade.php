<div>
  <div class="intro-y box lg:mt-5">
    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
     <h2 class="font-medium text-base mr-auto">Changer le Mot de Passe d'un utilisateur</h2>
    </div>
    <div class="p-5">
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
        <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
    <form wire:submit.prevent="save">
      <x-errors class="mt-3"/>
      <div class="mt-3">
        <x-select 
          label="Utilisateurs" 
          :options="$utilisateurs->toArray()" 
          option-label="name" 
          option-value="id"
          option-description="email" 
          wire:model.defer="utilisateur_id"
          required />
      </div>
      <div class="mt-3">
        <x-input label="Mot de Passe" type="password" wire:model.defer="password"  required />
      </div>
      <div class="mt-3">
        <x-input label="Confirmer le Mot de Passe" type="password" wire:model.defer="confirmation_password"  required />
      </div>
      <div class="mt-3">
        <button class="btn btn-primary" type="submit">Enregister</button>
      </div>
    </form>      

      
    </div>
  </div>
</div>

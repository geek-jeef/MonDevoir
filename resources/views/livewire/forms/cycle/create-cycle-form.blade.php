<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <x-input label="Nom du Cycle Scolaire" wire:model.defer="cycle.nom_cycle" placeholder="exemple: Primaire , Collège ..." required />
    </div>
    <div class="mt-3">
      <h2 class=" font-medium "> Le Cycle sera crée pour l'année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
    </div>
    <div class="mt-3">
      <div class="form-check form-switch">
          <input class="form-check-input" wire:model.defer="cycle.ouvert_cette_annee" type="checkbox">
          <label class="form-check-label" >Ouvert Cette Année ?</label>
      </div>
    </div>
    <div class="mt-3">
      <x-select 
        label="Responsable" 
        :options="App\Models\Personnel::all()->toArray()" 
        option-label="nom_complet" 
        option-value="id"
        option-description="description" 
        wire:model.defer="cycle.directeur_id"
        required />
    </div>
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
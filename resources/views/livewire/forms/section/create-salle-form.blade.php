<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <div class="mt-3">
      @if($salle->classe_id)
      <h2> La salle sera créee Pour la classe : {{App\Models\Classe::find($salle->classe_id)->nom_classe}} </h2>
      @endif
      <input type="hidden" wire:model="salle.classe_id" value="">
    </div>
    <div class="mt-3">
      <x-input wire:model="salle.nom_salle" label="Nom de la salle" placeholder="Nom de la salle" required />
    </div>
    <div class="mt-3">
      <x-input wire:model="salle.info_salle" label="Information sur la Salle" placeholder="Information sur la Salle" />
    </div>
    <div class="mt-3">
      <x-input wire:model="salle.capacite" label="Capacité de la Salle" type="number" min="1" />
    </div>
    <div class="mt-3">
        <x-select
            label="Choisir Un Enseignant Titulaire"
            wire:model.defer="salle.enseignant_id"
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
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
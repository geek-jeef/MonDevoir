<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <div class="mt-3">
      @if($matiere->classe_id)
      <h2> La Matiere sera créee Pour la classe : {{App\Models\Classe::find($matiere->classe_id)->nom_classe}} </h2>
      @endif
      <input type="hidden" wire:model.defer="matiere.classe_id" value="">
    </div>
    <div class="mt-3">
      <x-input wire:model.defer="matiere.nom_matiere" label="Nom de la matiere (version longue)" required />
    </div>
    <div class="mt-3">
      <x-input wire:model.defer="matiere.nom_matiere_court" label="Nom de la matiere (version courte)"  required />
    </div>
    <div class="mt-3">
      <x-input wire:model.defer="matiere.code" label="Code" />
    </div>
    <div class="mt-3">
      <x-input wire:model.defer="matiere.coeficient" required value="2" label="Coeficient de la Matiere" type="number" min="1" max="20" />
    </div>
 
    <div class="mt-3">
      <x-select
          label="Type"
          placeholder="Choisir un type"
          :options="[
              ['name' => 'Principal',  'id' => 1],
              ['name' => 'Facultatif', 'id' => 2],
              ['name' => 'Au choix',   'id' => 3],
          ]"
          option-label="name"
          option-value="id"
          wire:model.defer="matiere.type"
          required
      />
    </div>
    <div class="mt-3">
      <div class="mt-2">
          <div class="form-check form-switch">
              <input class="form-check-input" wire:model.defer="matiere.exclure_des_resultats" type="checkbox" >
              <label class="form-check-label" >Exclure des Résultats ?</label>
          </div>
      </div>
    </div>

    {{--<div class="mt-3">
        <x-select
            label="Choisir Un Enseignant"
            wire:model.defer="matiere.enseignant_id"
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
    --}}
    

    
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>

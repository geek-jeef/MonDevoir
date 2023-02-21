<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <x-errors class="mt-3"/>
  <form wire:submit.prevent="save">
    {{--update-classe-for-composition-creation--}}

    <div class="mt-3">
      <livewire:widget.picker.cycle-classe-salle-picker eventToFired="update-classe-for-composition-creation"  />
    </div>

    <div class="mt-3">
      @if($classe)
        <h2> La Composition sera crée Pour la Classe : {{$classe->nom_classe}} </h2>
        <input type="hidden" wire:model.defer="composition.classe_id" value="{{$classe->id}}" required>
        <input type="hidden" wire:model.defer="composition.classe_id" value="{{$classe->classe_id}}" required>
        <input type="hidden" wire:model.defer="composition.annee_academique_id" value="{{$annee_academique_id}}" required>
      @else
        <h2 class="text-danger" > Aucune Classe n'as été Choisi ... </h2>
      @endif

    </div>
    <div class="mt-3">
      <x-input wire:model.defer="composition.nom_composition" label="Nom de composition (version longue)" required />
    </div>

    <div class="mt-3">
      <x-input wire:model.defer="composition.ponderation" label="Ponderation" type="number" required />
    </div>

    <div class="mt-3">
      <x-select
          label="Matiere"
          placeholder="Choisir une Matiere"
          :options="$liste_matiere"
          option-label="nom_matiere"
          option-value="id"
          wire:model.defer="composition.matiere_id"
          required
      />
    </div>    
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
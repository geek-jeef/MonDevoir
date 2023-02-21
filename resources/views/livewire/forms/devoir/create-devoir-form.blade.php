<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <x-errors class="mt-3"/>
  <form wire:submit.prevent="save">
    {{--update-salle-for-devoir-creation--}}

    <div class="mt-3">
      <livewire:widget.picker.cycle-classe-salle-picker eventToFired="update-salle-for-devoir-creation"  />
    </div>

    <div class="mt-3">
      @if($salle)
        <h2> Le Devoir sera crée Pour la Salle : {{$salle->nom_salle}} </h2>
        <input type="hidden" wire:model.defer="devoir.salle_id" value="{{$salle->id}}" required>
        <input type="hidden" wire:model.defer="devoir.classe_id" value="{{$salle->classe_id}}" required>
        <input type="hidden" wire:model.defer="devoir.annee_academique_id" value="{{$annee_academique_id}}" required>
      @else
        <h2 class="text-danger" > Aucune Salle n'as été Choisi ... </h2>
      @endif

    </div>
    <div class="mt-3">
      <x-input wire:model.defer="devoir.nom_devoir" label="Nom du devoir (version longue)" required />
    </div>

    <div class="mt-3">
      <x-input wire:model.defer="devoir.ponderation" label="Ponderation" type="number" required />
    </div>

    <div class="mt-3">
      <x-select
          label="Matiere"
          placeholder="Choisir une Matiere"
          :options="$liste_matiere"
          option-label="nom_matiere"
          option-value="id"
          wire:model.defer="devoir.matiere_id"
          required
      />
    </div>    
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
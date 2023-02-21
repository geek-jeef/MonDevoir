<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <x-errors class="intro-y mt-3"/>
    <div class="intro-y mt-3">
      @if($systeme->annee_academique_id)
        <h2> Le Systeme sera crée Pour l'année : {{App\Models\AnneeAcademique::find($systeme->annee_academique_id)->nom_annee}} </h2>
        <input type="hidden" wire:model.defer="systeme.annee_academique_id" value="{{$systeme->annee_academique_id}}" required>
      @else
        <h2 class="text-danger" > Aucune Année Scolaire Disponible n'as été Choisi ... </h2>
      @endif
    </div>
    <div class="intro-y mt-3">
      <x-input label="Titre" wire:model.defer="systeme.titre" required />
    </div>
    <div class="intro-y mt-3">
      <x-input label="Montant à Payé" wire:model.defer="systeme.montant" type="number" required />
    </div>
    <div class="intro-y mt-3">
      <x-input label="Frais d'inscription" wire:model.defer="systeme.inscription" type="number" required />
    </div>

    <div class="intro-y mt-3">
      <x-textarea wire:model.defer="systeme.description" label="Description" />
    </div>    
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
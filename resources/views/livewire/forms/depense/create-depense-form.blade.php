<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <h2>La Dépense séra enregistée pour l'Année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
    </div>
    <div class="mt-3">

      <x-select
        label="Type de Depense"
        placeholder="Choisir"
        :options="$depense->types"
        wire:model="depense.type"
        required
      />

    </div>
    <div class="mt-3">
      <x-textarea
        label="Description"
        placeholder="example( reference facture .....) "
        wire:model.lazy="depense.description"
        required

      />
    </div>

    <div class="mt-3">
      <x-input label="Montant" wire:model.defer="depense.montant" required />
    </div>

    <div class="mt-3">
      <x-input label="Confirmer Le Montant" wire:model.defer="montant_confirmation" required />
    </div>

    <div class="mt-3">
      <div class="form-check form-switch">
          <input class="form-check-input" wire:model.defer="depense.facture" type="checkbox">
          <label class="form-check-label" >Une facture/reçu a été fourni?</label>
      </div>
    </div>

    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
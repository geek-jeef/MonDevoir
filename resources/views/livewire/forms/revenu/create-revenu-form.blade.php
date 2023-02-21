<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <h2>Le Revenu séra enregistée pour l'Année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
    </div>
    <div class="mt-3">

      <x-select
        label="Type de Revenu"
        placeholder="Choisir"
        :options="$revenu->types"
        wire:model="revenu.type"
        required
      />

    </div>
    <div class="mt-3">
      <x-textarea
        label="Description"
        placeholder="example( reference, source .....) "
        wire:model.lazy="revenu.description"
        required

      />
    </div>

    <div class="mt-3">
      <x-input label="Montant" wire:model.defer="revenu.montant" required />
    </div>

    <div class="mt-3">
      <x-input label="Confirmer Le Montant" wire:model.defer="montant_confirmation" required />
    </div>

    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
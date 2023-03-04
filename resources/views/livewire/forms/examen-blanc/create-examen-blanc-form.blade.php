<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>

  {{--

return [
            'examen.nom_examen' => 'required|string',
            'examen.ouvert_pour_enregistrement' => "nullable|boolean",
            'examen.annee_academique_id' => 'required|integer|exists:annee_academiques,id',


            'info.date_debut' => 'required|string',
            'info.date_fin' => 'required|string',
            'info.responsable_nom' => 'nullable|string',
            'info.responsable_phone' => 'nullable|string',
            'info.responsable_email' => 'nullable|string',
        ];
  --}}

  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <h2>L'Examen Blanc séra créee pour l'Année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
    </div>

    <div class="mt-3">
      <x-input label="Nom de l'Examen" wire:model.defer="examen.nom_examen" placeholder="example : BEPC Blanc 1" required />
    </div>
    <div class="mt-3">
      <label  class="form-label">Date de Début</label>
      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="info.date.date_debut" required>
    </div>
    <div class="mt-3">
      <label  class="form-label">Date de Fin</label>
      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="info.date.date_fin" required>
    </div>

    <div class="mt-3">
      <x-input label="Responsable de L'examen" wire:model.defer="info.responsable.nom" />
    </div>
    <div class="mt-3">
      <x-input label="Telephone du responsable" wire:model.defer="info.responsable.phone" />
    </div>
    <div class="mt-3">
      <x-input label="Email du responsable" type="email" wire:model.defer="info.responsable.email" />
    </div>

    <div class="mt-3">
      <div class="form-check form-switch">
          <input class="form-check-input" wire:model.defer="examen.ouvert_pour_enregistrement" type="checkbox">
          <label class="form-check-label" >Ouvert Pour Enregistrment des Notes ?</label>
      </div>
    </div>

    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
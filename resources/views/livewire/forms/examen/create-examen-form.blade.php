<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>

  {{--

return [
            'examen.nom_examen' => 'required|string',
            'examen.periode_id' => "required|integer|exists:examens,id",
            'examen.ouvert_pour_enregistrement' => "nullable|boolean",
            'examen.annee_academique_id' => 'required|integer|exists:annee_academiques,id',
        ];
  --}}
  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <h2>La Examen séra créee pour l'Année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
    </div>
    <div class="mt-3">
      <x-native-select
          label="Choisir Une Periode"
          placeholder="Choisir un cycle"
          :options="$cycles"
          option-label="nom_cycle"
          option-value="id"
          wire:model="selected_cycle_id"
          required

      />
    </div>
    <div class="mt-3">
      <x-native-select
          label="Choisir Une Periode"
          placeholder="Choisir une Periode"
          :options="$periodes"
          option-label="nom_periode"
          option-value="id"
          wire:model.defer="examen.periode_id"
          required

      />
    </div>

    <div class="mt-3">
      <x-input label="Nom de l'Examen" wire:model.defer="examen.nom_examen" placeholder="example : Composition Trimestre" required />
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
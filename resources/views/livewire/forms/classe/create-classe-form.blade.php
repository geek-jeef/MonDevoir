<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  {{--

  $table->string('nom_classe');
  $table->string('nom_court', 50);
  $table->string('serie',100)->nullable();
  $table->boolean('matiere_au_choix')->default(false);
  $table->unsignedTinyInteger('max_matiere_au_choix')->nullable();
  $table->boolean('ouvert_pour_inscription')->default(true);
  $table->boolean('active')->default(true);
  $table->unsignedInteger('cycle_academique_id')->nullable();
  $table->json('data')->nullable();
  --}}
  <form wire:submit.prevent="save">
    <div class="mt-3">
      <x-native-select
        label="Choisir Un Cycle"
        :options="$cycles->toArray()"
        option-label="nom_cycle"
        option-value="id"
        wire:model="classe.cycle_academique_id"
    />
    </div>
    <div class="mt-3">
      <x-input wire:model="classe.nom_classe" label="Nom de la Classe (format long)  " placeholder="Nom de la Classe" required />
    </div>

    <div class="mt-3">
      <x-input wire:model="classe.nom_court" label="Nom de la Classe (format court)  " placeholder="Nom de la Classe (format court)" required />
    </div>

    <div class="mt-3">
      <x-input wire:model="classe.serie" hint="Optionel" label="Série " placeholder="Série" />
    </div>
    <div class="mt-3">
      <div class="mt-2">
          <div class="form-check form-switch">
              <input class="form-check-input" wire:model="classe.matiere_au_choix" type="checkbox">
              <label class="form-check-label" >Posséde des matieres au choix ?</label>
          </div>
      </div>
    </div>

    <div class="mt-3">
      <div class="mt-2">
          <div class="form-check form-switch">
              <input class="form-check-input" wire:model="classe.ouvert_pour_inscription" type="checkbox">
              <label class="form-check-label" >Ouvert pour les Inscriptions ?</label>
          </div>
      </div>
    </div>

    {{--<div class="mt-3">
      <x-toggle lg wire:model="classe.ouvert_pour_inscription" label="Ouvert pour les Inscriptions ?" />
    </div>--}}

    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <form wire:submit.prevent="save">
    <x-errors class="mt-3"/>
    <div class="mt-3">
      <h2>Le Salaire séra enregistée pour l'Année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
    </div>
    <div class="mt-3">
        {{--
            $table->string('transactable');
            $table->string('type');
            $table->integer('montant');
            $table->string('description')->nullable();
            $table->integer('beneficiaire_id')->nullable();
            
            $table->json('data')->nullable();
            $table->string('annee_academique_id');
        --}}
        <x-select
            label="Choisir Un Membre du Personnel"
            wire:model.defer="salaire.beneficiaire_id"
            placeholder="Membre du Personnel"
            :async-data="route('api.personnels.index')"
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
      <x-textarea
        label="Description"
        placeholder="example( reference, source .....) "
        wire:model.lazy="salaire.description"
        required
      />
    </div>

    <div class="mt-3">
      <x-input label="Montant" wire:model.defer="salaire.montant" required />
    </div>

    <div class="mt-3">
      <x-input label="Confirmer Le Montant" wire:model.defer="montant_confirmation" required />
    </div>
    
    
    <div class="mt-3">
      <label>Période De Payement</label>
      <div class="flex gap-x-3">
        <x-datetime-picker
          label="Du"
          display-format="DD/MM/YYYY"
          wire:model.defer="periode_debut"
          data-daterange="true"
          without-tips="true"
          without-timezone="true"
          without-time="true"
          required
        />
        <x-datetime-picker
          label="Au"
          display-format="DD/MM/YYYY"
          wire:model.defer="periode_fin"
          data-daterange="true"
          without-tips="true"
          without-timezone="true"
          without-time="true"
          required
        />
      </div>
    </div>

    

    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
</div>
<section>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  @if(isset($cours) && $cours != null)

  <div wire:key="{{$trackId}}">
     <div class="overflow-x-auto my-3">
      <table class="table table-bordered table-hover"> 
        <tbody> 
          <tr> 
            <td class="w-0">Heure</td> 
            <td> <span class="text-primary mr-2"> {{$cours->jour_de_semaine}} </span> de <span class="text-primary mx-2"> {{$cours->heure_debut}} </span> à <span class="text-primary mx-2"> {{$cours->heure_fin}} </span> </td> 
          </tr>
          <tr> 
            <td class="w-0">Durée</td> 
            <td> <span class="text-primary mr-2"> {{$cours->difference}} </span> minutes </td> 
          </tr>
          <tr> 
            <td class="w-0">Salle</td> 
            <td> {{$cours->salle->nom_salle}} </td> 
          </tr>
          <tr> 
            <td class="w-0">Matiere</td> 
            <td> {{$cours->matiere->nom_matiere}} </td> 
          </tr>
          <tr> 
            <td class="w-0">Enseignant</td> 
            <td> {{$cours->enseignant->nom_complet}} </td> 
          </tr>

        </tbody>
      </table>
    </div>
    <div class="flex justify-around  my-3">
      <button class="flex btn btn-primary" onclick="@this.updateCours()" >
        <x-icon name='pencil' class="w-4 h-4 mr-2" />
        Modifier
      </button>
      <button class="flex btn btn-danger" onclick="
          window.$wireui.confirmDialog({
            title: 'Supprimer Cet Cours?',
            description: 'cette Action est irreversible',
            icon: 'question',
            accept: {
                label: 'Oui, Supprimer',
                execute: () =>  @this.supprimerCours(),
            },
            reject: {
                label: 'Non, Annuler',
            }
          }, '{{$this->id}}')" 
        >
        <x-icon name='trash' class="w-4 h-4 mr-2" />
        Supprimer
      </button>
      
    </div>
  </div>

  {{--<form wire:submit.prevent="save">
    <x-errors class="mt-3"/>

    <div class="mt-3">
      <livewire:widget.picker.cycle-classe-salle-picker wire:key="{{$pickerId}}" eventToFired="update-salle-for-cours-add" :salle="$salle_id" :classe="$classe_id" :cycle="$cycle_id"  />
    </div>

    <div class="mt-3">
      @if($salle)
        <h2> Le Cours sera crée Pour la Salle : {{$salle->nom_salle}} </h2>
        <input type="hidden" wire:model.defer="cours.salle_id" value="{{$salle->id}}" required>
        <input type="hidden" wire:model.defer="cours.annee_academique_id" value="{{$annee_academique_id}}" required>
      @else
        <h2 class="text-danger" > Aucune Salle n'as été Choisi ... </h2>
      @endif


    </div>

    
    <div class="mt-3">
      <x-select
          label="Jour de la Sémaine"
          placeholder="Choisir un Jour"
          :options="[
              ['name' => 'Lundi',  'id' => 1],
              ['name' => 'Mardi', 'id' => 2],
              ['name' => 'Mercredi',   'id' => 3],
              ['name' => 'Jeudi',   'id' => 4],
              ['name' => 'Vendredi',   'id' => 5],
              ['name' => 'Samedi',   'id' => 6],
              ['name' => 'Dimanche',   'id' => 0],
          ]"
          option-label="name"
          option-value="id"
          wire:model.defer="cours.jour"
          required
      />    
    </div>
    
    <div class="mt-3">
      <x-time-picker
          label="Heure du début"
          format="24"
          wire:model.defer="cours.heure_debut"
      />
    </div>
    <div class="mt-3">
      <x-time-picker
          label="Heure de fin"
          format="24"
          wire:model.defer="cours.heure_fin"
      />
    </div>
    <div class="mt-3">
      <x-select
          label="Matiere"
          placeholder="Choisir une Matiere"
          :options="$liste_matiere"
          option-label="nom_matiere"
          option-value="id"
          wire:model.defer="cours.matiere_id"
          required
      />
    </div>
    <div class="mt-3">
        <x-select
            label="Choisir Un Enseignant"
            wire:model.defer="cours.enseignant_id"
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
    <div class="mt-3">
      <button class="btn btn-primary" type="submit">Enregister</button>
    </div>
  </form>
  --}}
  @endif
</section>
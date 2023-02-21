<section>
  <div class="intro-y box lg:mt-5 ">
    <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
      <div class="flex items-center">
        <input class="form-check-input mr-3" wire:click="$emitUp('toggleCarteSelection','{{$eleve->id}}')" wire:model="selected"  type="checkbox">
        <h2 class="font-medium text-base mr-auto"> <a title="Afficher le Profil" class="tooltip" href="{{route('eleve.show',$eleve->id)}}" target="_blank">{{$eleve->nom_complet}}</a></h2>
      </div>
      <div class="flex items-center justify-end">
        <div class="form-check form-switch mr-2">
          <input class="form-check-input" wire:model="editable" type="checkbox">
          <label class="form-check-label" >Modifier</label>
        </div>
        <div class="dropdown">
          <button class="dropdown-toggle flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
             <x-icon  class="w-4 h-4" name="dots-vertical" />
          </button>
          <div class="dropdown-menu w-40 ">
            <ul class="dropdown-content">
              <li>
                <a href="javascript:;" wire:click="printCarteOne({{$eleve->id}})" class="dropdown-item">
                  <x-icon name="printer" class="w-4 h-4 mr-2" />
                  <span class="truncate ">Imprimer</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
      </div>
      
    </div>
    <div class="p-5 wrapper">
      @if($editable)
        <x-errors class="mb-4"/>
        <div class="flex flex-col-reverse xl:flex-row flex-col">
          <div class="flex-1 mt-6 xl:mt-0">
            <form wire:submit.prevent="save">

              <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 2xl:col-span-6">
                  <div class="2xl:mt-3">
                    <x-input.input-lockable label="Nom" wire:model.defer="eleve.nom" />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable label="Prénoms" wire:model.defer="eleve.prenoms" />
                  </div>
                </div>
                <div class="col-span-12 2xl:col-span-6">
                  <div class="2xl:mt-3">
                    <x-input.input-lockable label="Date de Naissance" type='date' wire:model.defer="eleve.date_de_naissance" />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable label="Lieu de Naissance" wire:model.defer="eleve.lieu_de_naissance" />
                  </div>
                </div>
                <div class="col-span-12">
                  <div class="mt-3">
                    <x-select-lockable 
                    label="Tuteur Principal" 
                    :options="$eleve->tuteurs->toArray()" 
                    option-label="nom" 
                    option-value="id"
                    option-description="phone_primaire" 
                    wire:model.defer="tuteur_principal_id" />
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary w-20 mt-3">Save</button>
            </form>
          </div>
          <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
            <form wire:submit.prevent="savePhoto">
              <x-image-carte :eleve="$eleve" wire:model.defer="photo" />
            </form>
          </div>
        </div>
      @else
        <div class="flex justify-center">
          <livewire:eleve.carte.show-carte :eleve="$eleve" :annee="$annee" />
        </div>
      @endif
    </div>
  </div>  
</section>

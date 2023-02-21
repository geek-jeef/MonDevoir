<section>
  <div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-lg font-medium mr-auto">Carte D'Etudiant</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>

@if(!$salle_id)

  <div class=" mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-3">
      <h2 class="text-lg font-medium mr-auto">Choisir Un Cycle</h2>
    </div>
    <div class="intro-y mt-5">
      <div class="intro-y">
        <div class="grid grid-cols-12 gap-5 mt-5">
          @foreach($cycles as $cycle)
            <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5  {{ ($cycle->id == $cycle_id)? 'bg-primary' : '' }}  cursor-pointer zoom-in" onclick="Livewire.emit('modifierListeClasseForCarte',{{$cycle->id}});">
            @if($cycle->id == $cycle_id)
              <div class="font-medium text-base text-white">{{$cycle->nom_cycle}}</div>
              <div class="text-white text-opacity-80 dark:text-slate-500">{{$cycle->classes->count()}} Classes</div>
            @else
              <div class="font-medium text-base">{{$cycle->nom_cycle}}</div>
              <div class="text-slate-500">{{$cycle->classes->count()}} Classes</div>
            @endif
            </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>


  @if($classes)
  <div class=" mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-3">
      <h2 class="text-lg font-medium mr-auto">Choisir Une Classe</h2>
    </div>
    <div class="intro-y mt-5">
      <div class="intro-y">
          <div class="grid grid-cols-12 gap-5 mt-5">
            @foreach($classes as $classe)
              <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5  {{ ($classe->id == $classe_id)? 'bg-primary' : '' }}  cursor-pointer zoom-in" onclick="Livewire.emit('modifierListeSalleForCarte',{{$classe->id}});">
              @if($classe->id == $classe_id)
                <div class="font-medium text-base text-white">{{$classe->nom_classe}}</div>
                <div class="text-white text-opacity-80 dark:text-slate-500">{{$classe->salles->count()}} Salles</div>
              @else
                <div class="font-medium text-base">{{$classe->nom_classe}}</div>
                <div class="text-slate-500">{{$classe->salles->count()}} Salles</div>
              @endif
              </div>
            @endforeach
          </div>
      </div>
    </div>
  </div>
  @endif


  @if($salles)
    <div class=" mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
      <div class="intro-y flex flex-col sm:flex-row items-center mt-3">
        <h2 class="text-lg font-medium mr-auto">Choisir Une Salle</h2>
      </div>
      <div class="grid grid-cols-12 gap-5 mt-3 pt-3">
        @foreach($salles as $salle)
          <a href="javascript:;" wire:click="$set('salle_id', {{$salle->id}})" class="intro-x block col-span-6 sm:col-span-3 2xl:col-span-2"   >
            <div class="box rounded-md p-3 relative zoom-in {{ ($salle->id == $salle_id)  ? 'border-2 border-primary' : ''}}">
              <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                <div class="absolute top-0 left-0 w-full h-full image-fit">
                  <img alt="" class="rounded-md" src="{{ route('avatar',$salle->nom_salle) }}">
                </div>
              </div>
              <div class="block font-medium text-center truncate mt-3">{{ $salle->nom_salle }}</div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  @endif
    
@else

  <div class="intro-y flex flex-col sm:flex-row items-center mt-2">
    <h2 class="text-lg font-medium mr-auto">Salle de :{{$selected_salle->nom_salle}}</h2>

    {{ $eleves->links('components.pagination.custom-indicator') }}

    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
          @php
            $selected_cycle = $cycles->firstWhere('id', $cycle_id) ;
          @endphp
          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_cycle) {{$selected_cycle['nom_cycle']}} @else Choisir un cycle @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content">
                @foreach($cycles as $cycle)
                <li>
                  <a href="javascript:;" wire:click="listeClasse({{$cycle->id}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$cycle->nom_cycle}}</span>
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>

          @php
            $selected_classe = $classes->firstWhere('id', $classe_id) ;
          @endphp
          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_classe) {{$selected_classe['nom_classe']}} @else Choisir une Classe @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content">
                @if($classes)
                @foreach($classes as $classe)
                <li>
                  <a href="javascript:;" wire:click="listeSalle({{$classe->id}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$classe->nom_classe}}</span>
                  </a>
                </li>
                @endforeach
                @endif
              </ul>
            </div>
          </div>

          @php
            $selected_salle = $salles->firstWhere('id', $salle_id) ;
          @endphp
          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_salle) {{$selected_salle['nom_salle']}} @else Choisir un salle @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content">
              @if($salles)
                @foreach($salles as $salle)
                <li>
                  <a href="javascript:;" wire:click="$set('salle_id', {{$salle->id}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$salle->nom_salle}}</span>
                  </a>
                </li>
                @endforeach
              @endif
              </ul>
            </div>
          </div>

      <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0 mr-2 ">
        <div class="w-56 relative text-slate-500">
          <input type="text" class="form-control w-56 box pr-10" wire:model.debounce.1500ms="recherche" placeholder="Recherche...">
          <x-icon name="search" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" />
        </div>
      </div>

      <div class="dropdown">
        <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
           <x-icon  class="w-4 h-4" name="printer" />
        </button>
        <div class="dropdown-menu w-52">
          <ul class="dropdown-content">
            <li>
              <a href="javascript:;" wire:click="printCarteAll()" class="dropdown-item">
                <x-icon name="document" class="w-4 h-4 mr-2" />
                <span class="truncate ">Imprimer Tout</span>
              </a>
            </li>
            <li>
              <a href="javascript:;" wire:click="printCarteSelection()" class="dropdown-item">
                <x-icon name="document" class="w-4 h-4 mr-2" />
                <span class="truncate ">Imprimer la Selection</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-12 gap-6 mt-5">
    @foreach($eleves as $eleve)
    <div class="intro-y col-span-12 lg:col-span-6">
      <livewire:eleve.carte.carte-widget :selected="$this->isSelected($eleve->id)" :eleve="$eleve" :annee="$annee" wire:key="carte-widget-editor-{{$eleve->id}}" />
    </div>
    @endforeach
  </div>

  <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center justify-between mt-5">
    {{ $eleves->links() }}
    <div>
      <select wire:model="per_page" class="w-20 form-select box mt-3 sm:mt-0">
        @foreach([5,10,12,16,24,32,64] as $nb)
          <option {{ ($per_page == $nb )? 'selected' : ''}} >{{$nb}}</option>
        @endforeach
      </select>
    </div>
  </div>



@endif

</section>

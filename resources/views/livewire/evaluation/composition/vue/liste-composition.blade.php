<div>
  <div class="intro-y tab-content mt-5">
    <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <div class="hidden md:block mx-auto text-slate-500"> {{ $compositions->links('components.pagination.custom-indicator') }} </div>
        <div class="w-full flex sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_cycle) {{$selected_cycle['nom_cycle']}} @else Choisir un cycle @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content">
                @foreach($cycles as $cycle)
                <li>
                  <a href="javascript:;" wire:click="modifierSelectedCycle({{$cycle}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$cycle->nom_cycle}}</span>
                  </a>
                </li>
                @endforeach
                <li>
                  <a href="javascript:;" wire:click="$set('selected_cycle', null)" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate"> Afficher Tout </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_classe) {{$selected_classe['nom_classe']}} @else Choisir une Classe @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content">
                @if($classes)
                @foreach($classes as $classe)
                <li>
                  <a href="javascript:;" wire:click="modifierSelectedClasse({{$classe}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$classe->nom_classe}}</span>
                  </a>
                </li>
                @endforeach
                @endif
                <li>
                  <a href="javascript:;" wire:click="$set('selected_classe', null)" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate"> Afficher Tout </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_matiere) {{$selected_matiere['nom_matiere']}} @else Choisir un matiere @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content">
              @if($matieres)
                @foreach($matieres as $matiere)
                <li>
                  <a href="javascript:;" wire:click="$set('selected_matiere', {{$matiere}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$matiere->nom_matiere}}</span>
                  </a>
                </li>
                @endforeach
              @endif
                <li>
                  <a href="javascript:;" wire:click="$set('selected_matiere', null)" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate"> Afficher Tout </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          {{--
          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_salle) {{$selected_salle['nom_salle']}} @else Choisir un salle @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content">
              @if($salles)
                @foreach($salles as $salle)
                <li>
                  <a href="javascript:;" wire:click="$set('selected_salle', {{$salle}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$salle->nom_salle}}</span>
                  </a>
                </li>
                @endforeach
              @endif
                <li>
                  <a href="javascript:;" wire:click="$set('selected_salle', null)" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate"> Afficher Tout </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          --}}

          <div class="dropdown">
            <button class="dropdown-toggle btn btn-primary px-2 " aria-expanded="false" data-tw-toggle="dropdown">
            <span class="w-5 h-5 flex items-center justify-center">
              <x-icon name="share" class=" w-4 h-4" />
            </span>
            </button>
            <div class="dropdown-menu w-40">
            <ul class="dropdown-content">
              <li>
              <a href="" class="dropdown-item">
                <i data-feather="printer" class="w-4 h-4 mr-2"></i> Imprimer
              </a>
              </li>
              <li>
              <a href="" class="dropdown-item">
                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exporter vers Excel
              </a>
              </li>
              <li>
              <a href="" class="dropdown-item">
                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exporter en PDF
              </a>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
        <table class="table table-report -mt-2">
        <thead>
          <tr>
          <th class="whitespace-nowrap">ID</th>
          <th class="text-center">Nom Composition</th>
          <th class="text-center whitespace-nowrap">Ponderation</th>
          <th class="text-center whitespace-nowrap">Matiere</th>
          <th class="text-center whitespace-nowrap">Cycle</th>
          <th class="text-center whitespace-nowrap">Classe</th>
          <th class="text-center whitespace-nowrap">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($compositions as $composition)
          <tr class="intro-x">
            <td class="text-center">{{$composition->id}}</td>
            <td>
            <a href="javascript:;" class="font-medium whitespace-nowrap">{{ $composition->nom_composition}}</a>
            </td>
            <td class="text-center">{{$composition->ponderation}}</td>
            <td class="text-center">{{$composition->matiere->nom_matiere}}</td>
            @php
              $composition_classe = $composition->classe;
            @endphp
            <td class="text-center">{{$composition_classe->cycle->nom_cycle}}</td>
            <td class="text-center whitespace-nowrap">{{$composition_classe->nom_classe}}</td>
            <td class="table-report__action w-56">
              <div class="flex justify-center items-center">
                <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                  window.$wireui.confirmDialog({
                    title: 'Modifier les Notes?',
                    description: 'pour le composition {{$composition->nom_composition}} ?',
                    icon: 'question',
                    accept: {
                        label: 'Oui, Modifier les Notes',
                        color: 'primary',
                        execute: () => { window.open(@js(route('composition.show',$composition->id)), '_blank').focus();},
                    },
                    reject: {
                        label: 'Non, Annuler',
                        method: 'cancel'
                    }
                  })"
                >
                  <x-icon name="pencil" class="w-4 h-4 mr-1" />Modifier les Notes
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>

      <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center justify-between">
        {{ $compositions->links() }}
        <select wire:model="per_page" class="w-20 form-select box mt-3 sm:mt-0">
          @foreach([10,20,30,50,100] as $nb)
            <option {{ ($per_page == $nb )? 'selected' : ''}} >{{$nb}}</option>
          @endforeach
        </select>
      </div>
    </div>
    
  </div>
</div>
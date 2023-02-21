<section>
  <div wire.ignore class="intro-y flex items-center mt-3">
    <h2 class="text-lg font-medium mr-auto">Matiere</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
@if($matiere)
  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire.ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', [ \Hp::avatar($matiere->nom_matiere_court)] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 sm:whitespace-normal font-medium text-lg">{{ $matiere->nom_matiere }} </div>
          <div class="text-slate-500">{{ $matiere->nom_matiere_court }} </div>
          <div class="text-slate-500">
            <div title="Classe" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
              <x-icon name="collection" class="w-4 h-4 mr-2" /> Classe : {{$matiere->classe->nom_court}}
            </div>
          </div>
          <div class="text-slate-500">
            <div title="Classe" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
              <x-icon name="collection" class="w-4 h-4 mr-2" /> Type : {{$matiere->nom_type}}
            </div>
          </div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div title="Année Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center">
            <x-icon name="calendar" class="w-4 h-4 mr-2" /> {{$matiere->classe->annee->nom_annee}}
          </div>

          <div title="Cycle Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <x-icon name="calendar" class="w-4 h-4 mr-2" /> {{$matiere->classe->cycle->nom_cycle}}
          </div>

          @if($matiere->code)
            <div title="Code" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
              <x-icon name="code" class="w-4 h-4 mr-2" /> {{$matiere->code}}
            </div>
          @endif
          
          <div class="truncate sm:whitespace-normal flex items-center mt-3 {{ $matiere->active ? 'text-success' : 'text-danger' }}">
            <x-icon name="book-open" class="w-4 h-4 mr-2" /> {{ $matiere->active ? 'Active' : 'Inactive' }}
          </div>
        </div>
      </div>
    </div>
    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">

      @foreach($menus as $menu)
      <li id="menu-matiere-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-matiere-{{$menu['id']}}"
          aria-controls="menu-matiere-{{$menu['id']}}"
          aria-selected="{{($menu['id'] == $currentMenu['id'] )? 'true' : 'false'}}"
          role="tab"
        >
          <i class="w-4 h-4 mr-2" data-feather="{{$menu['icon']}}"></i> {{$menu['titre']}}
        </button>
      </li>
      @endforeach
    </ul>
  </div>
  <div class="tab-content mt-5">
    @foreach($menus as $menu)
    <div
      wire:key="menu-matiere-pane-key-{{$menu['id']}}" 
      id="menu-matiere-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-matiere-{{$menu['id']}}-tab">

      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-matiere-pane-content-key-{{$menu['id']}}">
          {{$menu['titre']}}
          @if($currentMenu['id'] == 1)
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">{{$menu['titre']}}</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                <x-errors class="mb-4"/>
                <div class=".flex flex-col-reverse xl:flex-row flex-col">
                  <form wire:submit.prevent="update">
                    <div class="">
                      <h2> La Matiere sera modifier Pour la classe : {{$matiere->classe->nom_classe}} </h2>
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="matiere.nom_matiere" label="Nom de la matiere (version longue)" required />
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="matiere.nom_matiere_court" label="Nom de la matiere (version courte)"  required />
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="matiere.code" label="Code"  />
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="matiere.coeficient" required value="2" label="Coeficient de la Matiere" type="number" min="1" max="20" />
                    </div>
                    <div class="mt-3">
                      <x-select
                          label="Type"
                          placeholder="Choisir un type"
                          :options="[
                              ['name' => 'Principal',  'id' => 1],
                              ['name' => 'Facultatif', 'id' => 2],
                              ['name' => 'Au choix',   'id' => 3],
                          ]"
                          option-label="name"
                          option-value="id"
                          wire:model.defer="matiere.type"
                          required
                      />
                    </div>
                    <div class="mt-3">
                      <div class="mt-2">
                          <div class="form-check form-switch">
                              <input class="form-check-input" wire:model.defer="matiere.exclure_des_resultats" type="checkbox" >
                              <label class="form-check-label" >Exclure des Résultats ?</label>
                          </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="submit">Enregister</button>
                    </div>                  
                  </form>
                </div>
              </div>
            </div> 
            <div wire:loading class="text-center w-full" >
              <x-loading />
            </div>
          @elseif($currentMenu['id'] == 2)
            @php
              $compositions = App\Models\Composition::where('matiere_id',$this->matiere->id)->orderByDesc('created_at')->get() ;
            @endphp
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
              <table class="table table-report -mt-2">
              <thead>
                <tr>
                <th class="whitespace-nowrap">ID</th>
                <th class="text-center">Nom Composition</th>
                <th class="text-center whitespace-nowrap">Ponderation</th>
                <th class="text-center whitespace-nowrap">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($compositions as $composition)
                <tr class="intro-x">
                  <td class="text-center">{{$composition->id}}</td>
                  <td>
                    <a href="javascript:;" class="font-medium">{{ $composition->nom_composition}}</a>
                  </td>
                  <td class="text-center">{{$composition->ponderation}}</td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                        window.$wireui.confirmDialog({
                          title: 'Modifier les Notes?',
                          description: 'pour la composition {{$composition->nom_composition}}?',
                          icon: 'question',
                          accept: {
                              label: 'Oui, Modifier les Notes',
                              color: 'primary',
                              url: '{{route('composition.show',$composition->id)}}',
                          },
                          reject: {
                              label: 'Non, Annuler',
                              method: 'cancel'
                          }
                        })"
                      >
                        <x-icon name="pencil" class="w-4 h-4 mr-1" />Modifier les Notes
                      </a>
                      <a class="flex items-center mr-3 text-danger whitespace-nowrap" href="javascript:;">
                        <x-icon name="trash" class="w-4 h-4 mr-1" />Supprimer
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          @elseif($currentMenu['id'] == 3)
            @php
              $devoirs = App\Models\Devoir::where('matiere_id',$this->matiere->id)->orderBy('devoirs.salle_id')->orderByDesc('created_at')->get() ;
            @endphp

            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
              <table class="table table-report -mt-2">
              <thead>
                <tr>
                <th class="whitespace-nowrap">ID</th>
                <th class="text-center">Nom Devoir</th>
                <th class="text-center whitespace-nowrap">Ponderation</th>
                <th class="text-center whitespace-nowrap">Salle</th>
                <th class="text-center whitespace-nowrap">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($devoirs as $devoir)
                <tr class="intro-x">
                  <td class="text-center">{{$devoir->id}}</td>
                  <td>
                  <a href="javascript:;" class="font-medium">{{ $devoir->nom_devoir}}</a>
                  </td>
                  <td class="text-center">{{$devoir->ponderation}}</td>
                  <td class="text-center whitespace-nowrap">{{$devoir->salle->nom_salle}}</td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                        window.$wireui.confirmDialog({
                          title: 'Modifier les Notes?',
                          description: 'pour le devoir {{$devoir->nom_devoir}} ?',
                          icon: 'question',
                          accept: {
                              label: 'Oui, Modifier les Notes',
                              color: 'primary',
                              url: '{{route('devoir.show',$devoir->id)}}',
                          },
                          reject: {
                              label: 'Non, Annuler',
                              method: 'cancel'
                          }
                        })"
                      >
                        <x-icon name="pencil" class="w-4 h-4 mr-1" />Modifier les Notes
                      </a>
                      <a class="flex items-center mr-3 text-danger whitespace-nowrap" href="javascript:;">
                        <x-icon name="trash" class="w-4 h-4 mr-1" />Supprimer
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          @elseif($currentMenu['id'] == 4)
            @php
              $resultats = App\Models\ResultatMatiere::select(['examen_id' ,'matiere_id', 'classe_id', ])
                                                  ->groupBy(['examen_id' ,'matiere_id', 'classe_id', ])
                                                  ->having('matiere_id',$matiere->id)
                                                  ->get();
              debug($resultats);
            @endphp
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
              <table class="table table-report -mt-2">
              <thead>
                <tr>
                <th class="whitespace-nowrap">#</th>
                <th class="text-center">Examen</th>
                <th class="text-center whitespace-nowrap">Classe</th>
                <th class="text-center whitespace-nowrap">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($resultats as $resultat)
                <tr class="intro-x">
                  <td class="text-center">{{$loop->iteration}}</td>
                  <td>
                    <a href="javascript:;" class="flex">
                      <div class="self-center w-10 h-10 image-fit mr-2">
                        <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar', [\Hp::avatar($resultat->examen->nom_examen)])}}" title="{{ $resultat->examen->nom_examen}}" />
                      </div>
                      <div class="self-center ml-5 hover:text-primary hover:font-bold">
                        <div class="font-medium whitespace-nowrap hover:text-primary hover:font-bold">{{ $resultat->examen->nom_examen}}</div>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                          {{ $resultat->examen->periode->nom_periode}} <span class="mx-2">({{$resultat->matiere->nom_matiere_court}})</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="text-center">
                    {{$resultat->classe->nom_court}}
                  </td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                        window.$wireui.confirmDialog({
                          title: 'Afficher les resultats?',
                          description: `Pour {{ $resultat->examen->nom_examen}} ({{$resultat->matiere->nom_matiere}}) Classe de {{$resultat->classe->nom_court}} ?` ,
                          icon: 'question',
                          accept: {
                              label: 'Oui, Afficher',
                              color: 'primary',
                              url: '{{route('resultat.examen.matiere',[$resultat->examen_id , $resultat->classe_id ,$resultat->matiere_id ])}}',
                          },
                          reject: {
                              label: 'Non, Annuler',
                              method: 'cancel'
                          }
                        })"
                      >
                        <x-icon name="eye" class="w-4 h-4 mr-1" />Afficher Resultat
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>            
          @elseif($currentMenu['id'] == 5)
            @php
            $enseignants = App\Models\Cours::select(['enseignant_id' ,'matiere_id', 'salle_id' ])
                                          ->selectRaw('count(id) as nb')
                                          ->groupBy(['enseignant_id' ,'matiere_id', 'salle_id' ])
                                          ->having('matiere_id',$matiere->id)
                                          ->get() ;
            debug($enseignants);
            @endphp
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
              <table class="table table-report -mt-2">
              <thead>
                <tr>
                <th class="whitespace-nowrap">#</th>
                <th class="text-center">Enseignant</th>
                <th class="text-center whitespace-nowrap">Nbre de Cours/Sémaine</th>
                <th class="text-center whitespace-nowrap">Salle</th>
                <th class="text-center whitespace-nowrap">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($enseignants as $data)
                <tr class="intro-x">
                  <td class="text-center">{{$loop->iteration}}</td>
                  <td>
                    <a href="javascript:;" class="flex">
                      <div class="self-center w-10 h-10 image-fit mr-2">
                        <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar', [\Hp::avatar($data->enseignant->nom_complet)])}}" title="{{ $data->enseignant->nom_complet}}" />
                      </div>
                      <div class="self-center ml-5 hover:text-primary hover:font-bold">
                        <div class="font-medium whitespace-nowrap hover:text-primary hover:font-bold">{{ $data->enseignant->nom_complet}}</div>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                          {{ $data->enseignant->description}}
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="text-center">
                    {{$data->nb}}
                  </td>
                  <td class="text-center">
                    {{$data->salle->nom_salle}}
                  </td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                        window.$wireui.confirmDialog({
                          title: 'Afficher le Profil?',
                          description: `Pour {{ $data->enseignant->nom_complet}}?` ,
                          icon: 'question',
                          accept: {
                              label: 'Oui, Afficher',
                              color: 'primary',
                              url: '{{route('personnel.show',[$data->enseignant_id])}}',
                          },
                          reject: {
                              label: 'Non, Annuler',
                              method: 'cancel'
                          }
                        })"
                      >
                        <x-icon name="eye" class="w-4 h-4 mr-1" />Afficher Resultat
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>                
          @endif
        </div>
      @else
      <x-loading />
      @endif

    </div>
    @endforeach
  </div>
@endif
</section>

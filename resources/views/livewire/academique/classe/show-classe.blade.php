<section>
  <div wire.ignore class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Classe</h2>
  </div>
  <!-- BEGIN: Profile Info -->
  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire.ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', [$classe->nom_court] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $classe->nom_classe }}<span class="mx-2">({{ $classe->nom_court }})</span> </div>
          <div class="text-slate-500">Classe</div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div title="Année Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center">
            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> {{$classe->annee()->first()->nom_annee}}
          </div>
          <div title="Cycle Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> {{$classe->cycle()->first()->nom_cycle}}
          </div>
          @if($classe->serie)
          <div title="Serie" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <i data-feather="git-branch" class="w-4 h-4 mr-2"></i> {{$classe->serie}}
          </div>
          @endif
          <div class="truncate sm:whitespace-normal flex items-center mt-3 {{ $classe->ouvert_pour_inscription ? 'text-success' : 'text-danger' }}">
            <i data-feather="edit" class="w-4 h-4 mr-2"></i> Inscription {{ $classe->ouvert_pour_inscription ? 'Ouverte' : 'fermée' }}
          </div>
          {{--@if(session('annee_en_cours')->id == $classe->annee()->id)
            <div class="truncate sm:whitespace-normal flex items-center mt-3 text-success">
              <i data-feather="activity" class="w-4 h-4 mr-2"></i> Classe Active
            </div>
          @else
            <div class="truncate sm:whitespace-normal flex items-center mt-3 text-danger }}">
              <i data-feather="archive" class="w-4 h-4 mr-2"></i> Classe Archivée
            </div>
          @endif
          --}}
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
        @foreach($stats as $stat)
        <div class="text-center rounded-md w-20 py-3">
          <div class="font-medium text-primary text-xl">{{$stat['valeur']}}</div>
          <div class="text-slate-500">{{$stat['texte']}}</div>
        </div>
        @endforeach
      </div>
    </div>
    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">

      @foreach($menus as $menu)
      <li id="menu-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-{{$menu['id']}}"
          aria-controls="menu-{{$menu['id']}}"
          aria-selected="{{($menu['id'] == $currentMenu['id'] )? 'true' : 'false'}}"
          role="tab"
        >
          <i class="w-4 h-4 mr-2" data-feather="{{$menu['icon']}}"></i> {{$menu['titre']}}
        </button>
      </li>
      @endforeach
      
    </ul>
  </div>
  <!-- END: Profile Info -->
  <div class="tab-content mt-5">
    @foreach($menus as $menu)
    <div
      wire:key="menu-pane-key-{{$menu['id']}}" 
      id="menu-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-{{$menu['id']}}-tab">

      {{--  if current menu content else loading --}}
      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-pane-content-key-{{$menu['id']}}">

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
                    <div class="mt-3">
                      <h2 class=""> Classe de :  <span class="text-primary mx-2"> {{$classe->cycle->nom_cycle}} </span> </h2>
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="classe.nom_classe" label="Nom de la Classe (format long)  " placeholder="Nom de la Classe" required />
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="classe.nom_court" label="Nom de la Classe (format court)  " placeholder="Nom de la Classe (format court)" required />
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="classe.serie" hint="Optionel" label="Série " placeholder="Série" />
                    </div>
                    <div class="mt-3">
                      <div class="mt-2">
                          <div class="form-check form-switch">
                              <input class="form-check-input" wire:model.defer="classe.matiere_au_choix" type="checkbox" />
                              <label class="form-check-label" >Posséde des matieres au choix ?</label>
                          </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <div class="mt-2">
                          <div class="form-check form-switch">
                              <input class="form-check-input" wire:model.defer="classe.ouvert_pour_inscription" type="checkbox" />
                              <label class="form-check-label" >Ouvert pour les Inscriptions ?</label>
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
            <div wire:loading.remove >
              <div class=" p-5">
                <livewire:academique.section.salle-par-classe :classe="$classe" />
              </div>
            </div>
            <div id="formulaire-creation-salle" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <a data-tw-dismiss="modal" href="javascript:;">
                          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                      </a>
                      <div class="modal-header">
                          <h2 class="font-medium text-base mr-auto">Enregistrer une Salle</h2>
                      </div>
                      <div class="modal-body">
                          <livewire:forms.section.create-salle-form />
                      </div>
                      <div class="modal-footer w-full bottom-0">
                          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
                      </div>
                  </div>
              </div>
            </div>
          @elseif($currentMenu['id'] == 3)

            <div wire:loading.remove >
              <div class="p-5">
                <livewire:academique.matiere.matiere-par-classe :classe="$classe" />
              </div>
            </div>
            <div id="formulaire-creation-matiere" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <a data-tw-dismiss="modal" href="javascript:;">
                          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                      </a>
                      <div class="modal-header">
                          <h2 class="font-medium text-base mr-auto">Enregistrer une Matiere</h2>
                      </div>
                      <div class="modal-body">
                          <livewire:forms.matiere.create-matiere-form />
                      </div>
                      <div class="modal-footer w-full bottom-0">
                          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
                      </div>
                  </div>
              </div>
            </div>
            <div id="modal-show-matiere" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                      <a data-tw-dismiss="modal" href="javascript:;">
                          <x-icon name="x" class="w-8 h-8 text-slate-400" />
                      </a>
                      <div class="modal-header">
                          <h2 class="font-medium text-base mr-auto">Matiere</h2>
                      </div>
                      <div class="modal-body bg-slate-100">
                          <livewire:academique.matiere.show-matiere />
                      </div>
                      <div class="modal-footer w-full bottom-0">
                          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
                      </div>
                  </div>
              </div>
            </div>
          @elseif($currentMenu['id'] == 4)
            @php
              $resultats = App\Models\ResultatExamen::select(['examen_id', 'classe_id', ])
                                                  ->selectRaw('max(max_moyenne_classe) as max_moyenne ')
                                                  ->selectRaw('min(min_moyenne_classe) as min_moyenne ')
                                                  ->selectRaw('avg(avg_moyenne_classe) as avg_moyenne ')
                                                  ->groupBy(['examen_id', 'classe_id', ])
                                                  ->having('classe_id',$classe->id)
                                                  ->get();
            @endphp
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
              <table class="table table-report -mt-2">
              <thead>
                <tr>
                <th class="whitespace-nowrap">#</th>
                <th class="text-center">Examen</th>
                <th class="text-center whitespace-nowrap">Moyenne Min</th>
                <th class="text-center whitespace-nowrap">Moyenne Classe</th>
                <th class="text-center whitespace-nowrap">Moyenne Max</th>
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
                          {{ $resultat->examen->periode->nom_periode}} <span class="mx-2">( {{$classe->nom_court}} )</span>
                        </div>
                      </div>
                    </a>
                  </td>
                  <td class="text-center whitespace-nowrap font-bold text-red-700">
                    {{$resultat->min_moyenne}} / 20
                  </td>
                  <td class="text-center whitespace-nowrap font-bold text-primary">
                    {{$resultat->avg_moyenne}} / 20
                  </td>
                  <td class="text-center whitespace-nowrap font-bold text-emerald-700">
                    {{$resultat->max_moyenne}} / 20
                  </td>
                  <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                        window.$wireui.confirmDialog({
                          title: 'Afficher les resultats?',
                          description: `Pour {{ $resultat->examen->nom_examen}} ({{$resultat->classe->nom_court}})?` ,
                          icon: 'question',
                          accept: {
                              label: 'Oui, Afficher',
                              color: 'primary',
                              url: '{{route('resultat.examen.all',[$resultat->examen_id , $resultat->classe_id])}}',
                          },
                          reject: {
                              label: 'Non, Annuler',
                              method: 'cancel'
                          }
                        })"
                      >
                        <x-icon name="eye" class="w-4 h-4 mr-1" />Resultats
                      </a>
                      <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                        window.$wireui.confirmDialog({
                          title: 'Afficher les bulletins?',
                          description: `Pour {{ $resultat->examen->nom_examen}} ({{$resultat->classe->nom_court}})?` ,
                          icon: 'question',
                          accept: {
                              label: 'Oui, Afficher',
                              color: 'primary',
                              url: '{{route('bulletin.examen',[$resultat->examen_id , $resultat->classe_id])}}',
                          },
                          reject: {
                              label: 'Non, Annuler',
                              method: 'cancel'
                          }
                        })"
                      >
                        <x-icon name="document" class="w-4 h-4 mr-1" />Bulletins
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div> 
          @elseif($currentMenu['id'] == 5)
          <div class="grid grid-cols-12 gap-6">
            <div wire:loading class="col-span-12 text-center w-full" >
              <x-loading />
            </div>
            <div wire:loading.remove class="col-span-12 intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Ecolage</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                <div>
                  @php
                    $systeme =  ($classe->systemeEcolage) ? $classe->systemeEcolage : $classe->cycle->systemeEcolage; 
                  @endphp
                  @if($systeme)
                    <table class="table table-bordered">
                      <thead class="table-light">
                        <tr>
                          <th class="whitespace-nowrap">#</th>
                          <th class="whitespace-nowrap">Information</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Systeme de Payement</td>
                          <td>{{$systeme->titre}}  @if(!$classe->systemeEcolage)<span class="mx-2" >  | herité de  <a class="text-primary" href="{{route('academique.cycle.show',[$classe->cycle->id])}}"> {{$classe->cycle->nom_cycle}} </a> </span>  @endif</td>
                        </tr>
                        <tr>
                          <td>Description</td>
                          <td>{{$systeme->description}}</td>
                        </tr>
                        <tr>
                          <td>Montant</td>
                          <td class="text-primary font-bold"> {{$systeme->montant}} FCFA</td>
                        </tr>
                        <tr>
                          <td>Frais d'Inscription</td>
                          <td class="text-primary font-bold"> {{$systeme->inscription}} FCFA</td>
                        </tr>
                      </tbody>
                    </table>
                  @else
                  <x-small-empty-state message="Aucun Systeme de Payement Enregistré" />
                  @endif
                </div>
                <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 my-7">
                  <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Changer Systeme de Payement Ecolage </div>
                </div>
                <x-errors class="mb-4"/>
                <div class=".flex flex-col-reverse xl:flex-row flex-col">
                  <form wire:submit.prevent="setSystemeEcolage">
                    <div class="mt-3">
                      <x-select-lockable 
                        label="Systeme de Payement Ecolage" 
                        :options="App\Models\SystemeEcolage::actuel()->get()->toArray()" 
                        option-label="titre" 
                        option-value="id"
                        option-description="montant" 
                        wire:model.defer="systeme_ecolage_id"
                        required />
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="submit">Choisir</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> 
            <div wire:loading.remove class="col-span-12 lg:col-span-6 mt-8">
              <livewire:graphe.payement.progression-inscription :academique="$classe" />
            </div>
            <div wire:loading.remove class="col-span-12 lg:col-span-6 mt-8">
              <livewire:graphe.payement.progression-payement :academique="$classe" />
            </div>
          </div>

          @endif
          
        </div>
      @else
      <x-loading />
      @endif

    </div>
    @endforeach
  </div>
</section>
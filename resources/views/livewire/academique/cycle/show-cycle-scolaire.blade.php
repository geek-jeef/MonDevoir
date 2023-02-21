<section >
  <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Cycle Scolaire</h2>
  </div>
  <!-- BEGIN: Profile Info -->
  <div wire:ignore class="intro-y box px-5 pt-5 mt-5">
    <div wire:ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', ['Cycle Scolaire'] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $cycle->nom_cycle }}</div>
          <div class="text-slate-500">Cycle Scolaire</div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div title="Annéee Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center">
            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> {{$cycle->getAnnee()->nom_annee}}
          </div>
          <div class="truncate sm:whitespace-normal flex items-center mt-3 {{ $cycle->ouvert_cette_annee ? 'text-success' : 'text-danger' }}">
            <i data-feather="edit" class="w-4 h-4 mr-2"></i> Inscription {{ $cycle->ouvert_cette_annee ? 'Ouverte' : 'fermée' }}
          </div>
          @if(session('annee_en_cours')->id == $cycle->annee->id)
            <div class="truncate sm:whitespace-normal flex items-center mt-3 text-success">
              <i data-feather="activity" class="w-4 h-4 mr-2"></i> Cycle En Cours
            </div>
          @else
            <div class="truncate sm:whitespace-normal flex items-center mt-3 text-danger }}">
              <i data-feather="archive" class="w-4 h-4 mr-2"></i> Cycle Archivée
            </div>
          @endif
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

      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-pane-content-key-{{$menu['id']}}">
          @if($currentMenu['id'] == 1)
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Information</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                <x-errors class="mb-4"/>
                <div class=".flex flex-col-reverse xl:flex-row flex-col">
                  <form wire:submit.prevent="update">
                    <x-errors class="mt-3"/>
                    <div class="mt-3">
                      <x-input.input-lockable label="Nom du Cycle Scolaire" wire:model.defer="cycle.nom_cycle" placeholder="exemple: Primaire , Collège ..." required />
                    </div>
                    <div class="mt-3">
                      <h2 class=" font-medium "> Le Cycle sera crée pour l'année: <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
                    </div>
                    <div class="mt-3">
                      <div class="form-check form-switch">
                          <input class="form-check-input" wire:model.defer="cycle.ouvert_cette_annee" type="checkbox">
                          <label class="form-check-label" >Ouvert Cette Année ?</label>
                      </div>
                    </div>
                    <div class="mt-3">
                      <x-select-lockable 
                        label="Responsable" 
                        :options="App\Models\Personnel::all()->toArray()" 
                        option-label="nom_complet" 
                        option-value="id"
                        option-description="description" 
                        wire:model.defer="cycle.directeur_id"
                        required />
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
              <h2 class="intro-y text-lg font-medium mt-3">Liste des Classes Pour le cycle : {{$cycle->nom_cycle}} </h2>
              <div  class="grid grid-cols-12 gap-6 mt-3">
                <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                  <div class="hidden md:block mx-auto text-slate-500"> {{$cycle->classes->count()}} Classes Enregistrés</div>
                </div>
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                  <table class="table table-report -mt-2">
                    <thead>
                      <tr>
                        <th class="whitespace-nowrap">Classe</th>
                        <th class="text-center whitespace-nowrap">Nbre de Salles</th>
                        <th class="text-center whitespace-nowrap">Effectif Cumulé</th>
                        <th class="text-center whitespace-nowrap">Active</th>
                        <th class="text-center whitespace-nowrap">Inscription</th>
                        <th class="text-center whitespace-nowrap">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($cycle->classes as $classe)
                        <tr class="intro-x">
                          <td class="mr-auto">
                            <a href="{{ route('academique.classe.show',[$classe->id])}}" class="flex">
                              <div class="self-center w-10 h-10 image-fit mr-2">
                                <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$classe->nom_court])}}" title="{{ $classe->nom_court}}" />
                              </div>
                              <div class="self-center ml-5 hover:text-primary hover:font-bold">
                                <div class="font-medium whitespace-nowrap hover:text-primary hover:font-bold">{{ $classe->nom_classe}} @if($classe->serie) <span class="px-2 py-1 rounded-full bg-primary text-white mr-1">Serie: {{$classe->serie}}</span> @endif </div>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $classe->nom_court }}</div>
                              </div>
                            </a>
                          </td>
                          <td class="text-center">{{$classe->salles->count()}}</td>
                          <td class="text-center">{{$classe->effectif()}}</td>
                          <td class="w-40">
                            <div class="flex items-center justify-center {{ $classe->active ? 'text-success' : 'text-danger' }}">
                              <x-icon name="{{($classe->active)?'check':'x'}}" class="w-4 h-4 mr-2" /> {{ $classe->active ? 'active' : 'inactive' }}
                            </div>
                          </td>
                          <td class="w-40">
                            <div class="flex items-center justify-center {{ $classe->ouvert_pour_inscription ? 'text-success' : 'text-danger' }}">
                              <x-icon name="{{($classe->ouvert_pour_inscription)?'lock-open':'lock-closed'}}" class="w-4 h-4 mr-2" /> {{ $classe->ouvert_pour_inscription ? 'Ouvert' : 'fermé' }}
                            </div>
                          </td>
                          <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                              <a class="flex items-center mr-3"  href="javascript:;" onclick=" var ask = window.confirm('Afficher La Classe {{ $classe->nom_classe}} ?');if (ask) { window.location.href = '{{route('academique.classe.show',[$classe->id])}}';};">
                                <x-icon name="eye" class="w-4 h-4 mr-1" /> Afficher
                              </a>
                              
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          @elseif($currentMenu['id'] == 3)
            <h2 class="intro-y text-lg font-medium mt-3">Resultats et Examen {{$cycle->nom_cycle}} </h2>
            <div class="grid grid-cols-12 gap-6 mt-3">
              <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <div class="hidden md:block mx-auto text-slate-500"> {{$cycle->periodes->count()}} periodes d'evaluations Enregistrés</div>
              </div>
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                  <thead>
                    <tr>
                      <th class="whitespace-nowrap">Periode</th>
                      <th class="text-center whitespace-nowrap">Date de Debut</th>
                      <th class="text-center whitespace-nowrap">Date de Fin</th>
                      <th class="text-center whitespace-nowrap">Nombre Examen</th>
                      <th class="text-center whitespace-nowrap">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $cycle->periodes as $periode)
                      <tr class="intro-x">
                        {{--<td class="mr-auto">
                          <a href="{{ route('academique.cycle.show',[$periode->cycle->id])}}" class="flex">
                            <div class="self-center w-10 h-10 image-fit mr-2">
                              <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$periode->cycle->nom_cycle])}}" title="{{ $periode->cycle->nom_cycle}}" />
                            </div>
                            <div class="self-center ml-5 hover:text-primary hover:font-bold">
                              <div class="font-medium whitespace-nowrap">{{ $periode->cycle->nom_cycle}}</div>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $annee->nom_annee }}</div>
                            </div>
                          </a>
                        </td>
                        --}}

                        <td class="mr-auto">
                          <a href="{{ route('periode.show',[$periode->id])}}" class="flex">
                            <div class="self-center w-10 h-10 image-fit mr-2">
                              <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$periode->nom_periode])}}" title="{{ $periode->nom_periode}}" />
                            </div>
                            <div class="self-center ml-5 hover:text-primary hover:font-bold">
                              <div class="font-medium whitespace-nowrap">{{ $periode->nom_periode}}</div>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $cycle->nom_cycle }}</div>
                            </div>
                          </a>
                        </td>
                        <td class="text-center">{{ $periode->debut }}</td>
                        <td class="text-center">{{ $periode->fin }}</td>
                        <td class="text-center whitespace-nowrap">{{ $periode->examens->count() }}</td>
                        <td class="w-40 whitespace-nowrap">
                          <a href="{{ route('periode.show',[$periode->id])}}" class="flex items-center justify-center text-primary">
                            <x-icon name="eye" class="w-4 h-4 mr-2" /> Afficher
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          @elseif($currentMenu['id'] == 4)
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
                    @if($cycle->systemeEcolage)
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
                            <td>{{$cycle->systemeEcolage->titre}}</td>
                          </tr>
                          <tr>
                            <td>Description</td>
                            <td>{{$cycle->systemeEcolage->description}}</td>
                          </tr>
                          <tr>
                            <td>Montant</td>
                            <td class="text-primary font-bold"> {{$cycle->systemeEcolage->montant}} FCFA</td>
                          </tr>
                          <tr>
                            <td>Frais d'Inscription</td>
                            <td class="text-primary font-bold"> {{$cycle->systemeEcolage->inscription}} FCFA</td>
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
                <livewire:graphe.payement.progression-inscription :academique="$cycle" />
              </div>
              <div wire:loading.remove class="col-span-12 lg:col-span-6 mt-8">
                <livewire:graphe.payement.progression-payement :academique="$cycle" />
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
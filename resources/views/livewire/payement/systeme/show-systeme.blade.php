<section>
  <div wire.ignore class="intro-y flex items-center mt-3">
    <h2 class="text-lg font-medium mr-auto">Systeme d'Ecolage</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
@if($systeme)
  <div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', [ \Hp::avatar($systeme->titre)] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 sm:whitespace-normal font-medium text-lg">{{ $systeme->titre }} </div>
          <div class="text-slate-500">{{ $systeme->description }} </div>
          
          {{--<div class="text-slate-500">
            <div title="Classe" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
              <x-icon name="collection" class="w-4 h-4 mr-2" /> Type : {{$systeme->nom_type}}
            </div>
          </div>
          --}}
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div title="Année Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center">
            <x-icon name="calendar" class="w-4 h-4 mr-2" /> {{$systeme->annee->nom_annee}}
          </div>
        </div>
      </div>
    </div>
    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">

      @foreach($menus as $menu)
      <li id="menu-systeme-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-systeme-{{$menu['id']}}"
          aria-controls="menu-systeme-{{$menu['id']}}"
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
      wire:key="menu-systeme-pane-key-{{$menu['id']}}" 
      id="menu-systeme-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-systeme-{{$menu['id']}}-tab">

      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-systeme-pane-content-key-{{$menu['id']}}">
          {{$menu['titre']}}
          @if($currentMenu['id'] == 1)
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">{{$menu['titre']}}</h2>
                </div>
                <div class="flex items-center justify-end">
                  <div class="form-check form-switch mr-2">
                    <input class="form-check-input" wire:model="editable" type="checkbox">
                    <label class="form-check-label" >Modifier</label>
                  </div>
                </div>
              </div>
              <div class="p-5 wrapper">
                <x-errors class="mb-4"/>
                <div class="flex-col-reverse xl:flex-row flex-col">
                  <form wire:submit.prevent="update">
                    <div class="">
                      <h2> Le Systeme d'Ecolage sera modifier : {{$systeme->annee->nom_annee}} </h2>
                    </div>
                    <div class="intro-y mt-3">
                      <x-input label="Titre" :disabled="!$editable" wire:model.defer="systeme.titre" required />
                    </div>
                    <div class="intro-y mt-3">
                      <x-input label="Montant à Payé" :disabled="!$editable" wire:model.defer="systeme.montant" type="number" required />
                    </div>
                    <div class="intro-y mt-3">
                      <x-input label="Frais d'inscription" :disabled="!$editable" wire:model.defer="systeme.inscription" type="number" required />
                    </div>
                    <div class="intro-y mt-3">
                      <x-textarea wire:model.defer="systeme.description" :disabled="!$editable" label="Description" />
                    </div>    
                    <div class="mt-3">
                      <button class="btn btn-primary" {{(!$editable)? 'disabled':''}} type="submit">Enregister</button>
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
              $academique_cycles = $systeme->cycles_minervables  ;
              $academique_classes = $systeme->classes_minervables  ;
              $academique_salles = $systeme->salles_minervables  ;
            @endphp
            @if($academique_cycles)
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mb-5">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Cycle Academique</h2>
                </div>
                <table class="table table-report -mt-2">
                  <thead>
                    <tr>
                      <th class="whitespace-nowrap">Cycle</th>
                      <th class="text-center whitespace-nowrap">Responsable</th>
                      <th class="text-center whitespace-nowrap">Nb Classes</th>
                      <th class="text-center whitespace-nowrap">Nb Salles</th>
                      <th class="text-center whitespace-nowrap"> Ouvert Pour l'Année</th>
                      <th class="text-center whitespace-nowrap">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($academique_cycles as $cycle)
                      <tr class="intro-x">
                        <td class="mr-auto">
                          <a href="{{ route('academique.cycle.show',[$cycle->id])}}" class="flex">
                            <div class="self-center w-10 h-10 image-fit mr-2">
                              <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$cycle->nom_cycle])}}" title="{{ $cycle->nom_cycle}}" />
                            </div>
                            <div class="self-center ml-5 hover:text-primary hover:font-bold">
                              <div class="font-medium whitespace-nowrap">{{ $cycle->nom_cycle}}</div>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $cycle->annee->nom_annee }}</div>
                            </div>
                          </a>
                        </td>
                        <td class="text-center whitespace-nowrap">{{ $cycle->directeur->nom_complet }}</td>
                        <td class="text-center">{{ $cycle->classes->count() }}</td>
                        <td class="text-center">{{ $cycle->classes->count() }}</td>
                        <td class="w-40 whitespace-nowrap">
                          <div class="flex items-center justify-center {{ ($cycle->ouvert_cette_annee) ? 'text-success' : 'text-danger' }}">
                            <x-icon name="{{($cycle->ouvert_cette_annee)?'lock-open':'lock-closed'}}" class="w-4 h-4 mr-2" /> {{ ($cycle->ouvert_cette_annee) ? 'Ouvert' : 'fermé' }}
                          </div>
                        </td>
                        <td class="table-report__action w-56">
                          <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;" onclick=" var ask = window.confirm('Afficher le Cycle Scolaire {{ $cycle->nom_cycle}} ?');if (ask) { window.location.href = '{{route('academique.cycle.show',[$cycle->id])}}';};">
                              <x-icon name="eye" class="w-4 h-4 mr-1" /> afficher
                            </a>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            @endif
            @if($academique_classes)
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mb-5">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Classes</h2>
                </div>
                <table class="table table-report -mt-2">
                  <thead>
                    <tr>
                      <th class="whitespace-nowrap">Classes</th>
                      <th class="text-center whitespace-nowrap">Cycle</th>
                      <th class="text-center whitespace-nowrap">Nbre de Salle</th>
                      <th class="text-center whitespace-nowrap">Effectif Cumulé</th>
                      <th class="text-center whitespace-nowrap">Active</th>
                      <th class="text-center whitespace-nowrap">Inscription</th>
                      <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($academique_classes as $classe)
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
                        <td class="text-center">{{$classe->cycle->nom_cycle}}</td>
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
            @endif
            @if($academique_salles)
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mb-5">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Salles</h2>
                </div>
                <table class="table table-report -mt-2">
                  <thead>
                    <tr>
                      <th class="text-center whitespace-nowrap">id</th>
                      <th class="whitespace-nowrap">Nomination</th>
                      <th class="text-center whitespace-nowrap">Titulaire</th>
                      <th class="text-center whitespace-nowrap">Effectif/ Capacité</th>
                      <th class="text-center whitespace-nowrap">Active</th>
                      <th class="text-center whitespace-nowrap">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($academique_salles as $salle)
                      <tr class="intro-x">
                        <td >{{ $salle->id }}</td>
                        <td>
                          <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in mr-2">
                              <img alt="" data-action="zoom" class="tooltip rounded-full" src="{{ route('avatar',[$salle->nom_salle]) }}" title="{{ $salle->nom_salle }}"> 
                            </div>
                            <div class="whitespace-nowrap self-center">
                              <a href="javascript:;" class="font-medium whitespace-nowrap hover:font-bold hover:text-primary">{{ $salle->nom_salle}} </a>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5 hover:font-bold ">{{ $salle->info_salle }}</div>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5 hover:font-bold ">{{ $salle->classe->nom_court }}|{{ $salle->cycle->nom_cycle }}</div>
                            </div>
                          </div>
                        </td>
                        <td class="w-40">
                          <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in mr-2">
                              <img alt="" data-action="zoom" class="tooltip rounded-full" src="{{ route('avatar',[$salle->titulaire()]) }}" title="{{ $salle->titulaire() }}"> 
                            </div>
                            <div class="whitespace-nowrap self-center">
                              {{$salle->titulaire()}}
                            </div>
                          </div>
                        </td>
                        <td class="text-center">{{$salle->effectif()}} / {{$salle->capacite}} </td>
                        <td class="w-40">
                          <div class="flex items-center justify-center {{ $salle->active ? 'text-success' : 'text-danger' }}">
                            <x-icon name="{{ $salle->active ? 'check' : 'x' }}" class="w-4 h-4 mr-2" /> {{ $salle->active ? 'active' : 'inactive' }}
                          </div>
                        </td>
                        <td class="table-report__action w-56">
                          <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;" onclick=" var ask = window.confirm('Afficher La salle {{ $salle->nom_salle}} ?');if (ask) { window.location.href = '{{route('academique.salle.show',[$salle->id])}}';};">
                              <x-icon name="eye" class="w-4 h-4 mr-1" /> Afficher
                            </a>
                          </div>
                        </td>              
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>            
            @endif
          @elseif($currentMenu['id'] == 3)
            @php
              $inscriptions = $systeme->eleves_minervables  ;
              debug($inscriptions);
            @endphp
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible"> 
              <div class="flex items-center">
                <h2 class="font-medium text-base mr-auto">Eleves</h2>
              </div>     
              <table class="table table-report -mt-2">
                <thead>
                  <tr>
                  <th class="whitespace-nowrap">ID</th>
                  <th class="whitespace-nowrap">Eleve</th>
                  <th class="text-center whitespace-nowrap">Sexe</th>
                  <th class="text-center whitespace-nowrap">Naissance</th>
                  <th class="text-center whitespace-nowrap">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inscriptions as $inscription)
                  <tr class="intro-x">
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>
                      <div class="flex gap-2">
                        <div class="w-10 h-10 image-fit">
                          <img alt="" data-action="zoom" class="rounded-full" src="{{$inscription->eleve->image}}">
                        </div>
                        <div>
                          <div class="font-medium whitespace-nowrap">{{$inscription->eleve->nom_complet}}</div>
                          <div class="text-slate-500 text-xs whitespace-nowrap">{{$inscription->salle->nom_salle}}</div>
                        </div>
                      </div>                    
                    </td>
                    <td class="text-center whitespace-nowrap">
                      <div class="flex items-center lg:justify-center {{($inscription->eleve->genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}}"> {{$inscription->eleve->genre}}
                      </div>
                    </td>
                    <td>
                      <div class="font-medium whitespace-nowrap">{{$inscription->eleve->naissance}}</div>
                      <div class="text-slate-500 text-xs whitespace-nowrap">{{$inscription->eleve->lieu_de_naissance}}</div>
                    </td>
                    <td>
                      @foreach($inscription->tags as $tag)
                        <span title="{{$tag->name}}" class="tooltip px-2 py-1 rounded-full bg-primary text-white mr-1 cursor-pointer uppercase" >
                          {{$tag->getTranslation('name', 'court')}}
                        </span>
                      @endforeach
                      {{--<span class="px-2 py-1 rounded-full bg-primary text-white mr-1">1</span>--}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @elseif($currentMenu['id'] == 4)
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Attribuer Des Eleves</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                <p>
                  Utiliser L'Outils d'attribution  des systemes de payement avec des paramétres de recherche avancés
                </p>
                <div class="flex justify-end">
                  <a href="{{route('payement.systeme.attribution',['layout' => 'simple-menu'])}}" target="_blank" class="btn btn-primary">Oui, Aller
                    <x-icon name="cursor-click" class="w-4 h-4 ml-2" />
                  </a>
                </div>
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
@endif
</section>

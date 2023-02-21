<section>
  <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Profil Elève</h2>
  </div>
  <div class="intro-y box px-5 pt-5 mt-5 {{$eleve->trashed()? 'border-2 pb-1 border-danger bg-danger/5 dark:border-danger dark:bg-danger/5' : ''}} ">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{route('avatar',[$eleve->nom.' '.$eleve->prenoms])}}">
          <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
            <i class="w-4 h-4 text-white" data-feather="camera"></i>
          </div>
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $eleve->nom.' '.$eleve->prenoms}}</div>
          <div class="text-slate-500">{{ 'Elève' }}</div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                                
          <div class="tooltip truncate sm:whitespace-normal flex items-center" title="Sexe">
            <img src="{{asset('dist/images/gender.svg')}}"  class="w-4 h-4 mr-2" />
            <span class="{{ ($eleve->genre == 'Masculin')   ? 'text-blue-700 dark:text-blue-500'   : 'text-pink-700 dark:text-pink-500'}}"> {{$eleve->genre}}</span>
          </div>
          <div class="tooltip truncate sm:whitespace-normal flex items-center  mt-3" title="date de naissance">
            <i data-feather="calendar"  class="w-4 h-4 mr-2"></i> {{$eleve->date_de_naissance->format('d/m/Y')}}
          </div>

          <div class="tooltip truncate sm:whitespace-normal flex items-center mt-3" title="Nationalité">
            <i data-feather="globe"  class="w-4 h-4 mr-2"></i> {{$eleve->nationalite}}
          </div>
        </div>
      </div>

      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div class="tooltip truncate sm:whitespace-normal flex items-center" title="Adresse">
            <i data-feather="map"  class="w-4 h-4 mr-2"></i> {{$eleve->adresse}}
          </div>
          <div class="tooltip truncate sm:whitespace-normal flex items-center  mt-3" title="Date D'Inscription">
            <i data-feather="edit"  class="w-4 h-4 mr-2"></i> {{$eleve->date_inscription->format('d/m/Y')}}
          </div>
        </div>
        <div class="mt-4 flex items-center gap-4">
          <div class="mr-2 whitespace-nowrap">
            Inscription:
          </div>
          <div class="dropdown w-full">
            <button class="dropdown-toggle btn btn-primary flex items-center w-full" aria-expanded="false" data-tw-toggle="dropdown">
              @if($actual_inscription) {{$actual_inscription->annee->nom_annee}} @else Inscription  @endif<x-icon name="chevron-down" class="w-5 h-5 mx-2" />
            </button>
            <div class="dropdown-menu w-52">
              <ul class="dropdown-content bg-primary text-white">
                @foreach($inscriptions as $inscription)
                <li>
                  <a href="javascript:;" wire:click="changeInscription({{$inscription->id}})" class="dropdown-item">
                    @if($actual_inscription && ($actual_inscription->id == $inscription->id )  )
                      <x-icon name="star" class="w-4 h-4 mr-2" />
                    @endif
                   {{$inscription->annee->nom_annee}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
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

    @if($eleve->trashed())
      <div>
              <div class="intro-y box mt-5 border-2 border-danger dark:border-danger">
                <div class="flex items-center justify-between p-5 bg-danger/10 border-b border-danger/60 dark:border-danger">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Retablir l'eleve</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-10 py-5 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="w-full text-danger dark:text-red-300">
                    L'eleve a été supprimé et mis a la corbeille. Retablir l'Enregistrement de L'eleve
                  </div>
                  <div class="mt-3">
                    <div class="ml-auto">
                      <button 
                        class="btn btn-primary"  
                        onclick="
                          window.$wireui.confirmDialog({
                            title: 'Retablir?',
                            description: `L'eleve @js($eleve->nom_complet) sera retabli`,
                            icon: 'question',
                            accept: {
                              label: 'Oui, valider',
                              execute: () => @this.restoreEleve() ,
                            },
                            reject: {
                                label: 'Non, Annuler',
                            }
                          })
                        " >Retablir</button>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    @endif

    @if( ($actual_inscription) && $actual_inscription->trashed())
      <div>
              <div class="intro-y box mt-5 border-2 border-danger dark:border-danger">
                <div class="flex items-center justify-between p-5 bg-danger/10 border-b border-danger/60 dark:border-danger">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Annuler Un Abandon de l'eleve</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-10 py-5 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="w-full text-danger dark:text-red-300">
                    Annulé un Abandon de l'eleve pour cette année academique. Les payements et les evaluations seront dégélés
                  </div>
                  <div class="mt-3">
                    <div class="ml-auto">
                      <button 
                        class="btn btn-primary"  
                        onclick="
                          window.$wireui.confirmDialog({
                            title: 'Marquer un Retour?',
                            description: `Annuler un Abandon de @js($eleve->nom_complet) `,
                            icon: 'question',
                            accept: {
                              label: 'Oui, valider',
                              execute: () => @this.annulerAbandonEleve() ,
                            },
                            reject: {
                                label: 'Non, Annuler',
                            }
                          })
                        " >Retablir l'Eleve</button>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    @endif

  <div class="intro-y tab-content mt-5">
    @foreach($menus as $menu)
    <div
      wire:key="menu-pane-key-{{$menu['id']}}" 
      id="menu-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-{{$menu['id']}}-tab">

      {{--  if current menu content else loading --}}
      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-pane-content-key-{{$menu['id']}}">

          @if($currentMenu['id'] == 1)
            <div class="intro-y box mt-5">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Information sur l'éleve</h2>
                </div>
                <div class="flex items-center justify-end">
                  <div class="form-check form-switch mr-2">
                    <input class="form-check-input" wire:model="information_editable" type="checkbox">
                    <label class="form-check-label" >Modifier</label>
                  </div>
                </div>
              </div>
              @if($information_editable)
              <form wire:submit.prevent="update">
                <div class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                      <label  class="form-label">Nom</label>
                      <input type="text" class="form-control" placeholder="nom" wire:model.defer="eleve.nom" minlength="2" required>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                      <label  class="form-label">Prénoms</label>
                      <input type="text" class="form-control" placeholder="Prénoms" wire:model.defer="eleve.prenoms" minlength="2" required>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6" >
                      <x-select
                        label="Sexe"
                        placeholder="Choisir Le Sexe"
                        wire:model.defer="eleve.genre" required>
                        <x-select.option label="Masculin" value="Masculin" />
                        <x-select.option label="Feminin" value="Feminin" />
                      </x-select>
                    </div>

                    <div class="intro-y col-span-12 sm:col-span-6">
                      <label  class="form-label">Nationalité</label>
                      <x-select
                        wire:model.defer="eleve.nationalite" 
                        placeholder="Choisir une Nationalité" 
                        :async-data="route('api.pays.index')" 
                        option-label="nationalite" 
                        option-value="nationalite" 
                        option-description="libelle"
                      />
                    </div>

                    <div class="intro-y col-span-12 sm:col-span-6">
                      <label  class="form-label">Date de Naissance</label>
                      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="eleve.date_de_naissance" required>
                    </div>

                    <div class="intro-y col-span-12 sm:col-span-6">
                      <label  class="form-label">Lieu de Naissance</label>
                      <input type="text" class="form-control" wire:model.defer="eleve.lieu_de_naissance" required>
                    </div>                

                    <div class="intro-y col-span-12 sm:col-span-12">
                      <label  class="form-label">Adresse</label>
                      <textarea class="form-control" rows="3" wire:model.defer="eleve.adresse"></textarea>
                    </div>
                  </div>
                  <div class="font-bold text-xl mt-4">Details Supplémentaires</div>
                  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
                    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Information Médicale</div>
                  </div>
                  <div class="grid grid-cols-12 gap-4 gap-y-5 mt-2">
                    <div class="intro-y col-span-12 sm:col-span-12">
                      <textarea class="form-control" rows="3" wire:model.defer="eleve.data.medical" placeholder="Information Médicale: maladie chronique , Allergie etc..."></textarea>
                    </div>
                  </div>
                  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
                    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Commentaires</div>
                  </div>
                  <div class="grid grid-cols-12 gap-4 gap-y-5 mt-2">
                    <div class="intro-y col-span-12 sm:col-span-12">
                      <textarea class="form-control" rows="3" wire:model.defer="eleve.data.commentaire" placeholder="commentaires ..."></textarea>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
                  {{--
                    <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
                      <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Tuteurs</div>
                    </div>
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-2">
                      <div class="intro-y col-span-8 sm:col-span-8">
                        <label  class="form-label">Tuteurs</label>
                        <x-select placeholder="Choisir des Tuteurs" :async-data="route('api.tuteurs.index')" option-label="nom" option-value="id"
                        option-description="phone_primaire" wire:model.defer="eleve.tuteurs" multiselect />
                      </div>
                      <div class="intro-y col-span-4 sm:col-span-4 self-end flex justify-center">
                        <a href="javascript:;" class="btn btn-outline-secondary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-tuteur"> Enregistrer Un Tuteur
                          <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                            <x-icon name="plus" class="w-6 h-6" solid />
                          </span>
                        </a>      
                      </div>
                    </div>
                  --}}
                </div>
              </form>
              @else
              <div  class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                <div class="intro-y ">
                  <table class="table table-bordered table-hover table-striped">
                    <thead class="table-primary">
                      <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">Information</th>
                        <th class="whitespace-nowrap">Donnée</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Nom</td>
                        <td>{{$eleve->nom}}</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Prénoms</td>
                        <td>{{$eleve->prenoms}}</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sexe</td>
                        <td>
                          <span class="{{ ($eleve->genre == 'Masculin')  ? 'text-blue-700 dark:text-blue-500'   : 'text-pink-700 dark:text-pink-500'}}" >{{$eleve->genre}}</span> </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Date de Naissance</td>
                        <td>{{ date('d/m/Y', strtotime($eleve->date_de_naissance))}}</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Lieu de Naissance</td>
                        <td>{{ $eleve->lieu_de_naissance}}</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Nationalité</td>
                        <td>{{$eleve->nationalite}}</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Adresse</td>
                        <td>{{$eleve->adresse}}</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Tuteurs</td>
                        <td>
                          @foreach($eleve->tuteurs as $Un_tuteur)
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                              <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img src="{{route('avatar',['text' => $Un_tuteur->nom])}}">
                              </div>
                              <div class="ml-4 mr-auto">
                                <div class="font-medium">{{$Un_tuteur->nom}}</div>
                                <div class="text-slate-500 text-xs mt-0.5">{{$Un_tuteur->phone_primaire}}</div>
                              </div>
                            </div>
                          @endforeach
                        </td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Information Médical</td>
                        <td>{{ (isset($eleve->data['medical']) ) ? $eleve->data['medical'] : '' }}</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Commentaires</td>
                        <td>{{(isset($eleve->data['commentaire']) ) ? $eleve->data['commentaire'] : ''}}</td>
                      </tr>
                       @if($actual_inscription)
                      <tr>
                        <td>11</td>
                        <td>Classe</td>
                        <td>
                          @php
                            $Salle = $actual_inscription->salle;
                            $Classe = $Salle->classe;
                            $Cycle = $Classe->cycle;
                          @endphp
                          <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1"> {{$Cycle->nom_cycle}} </span>
                          <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1"> {{$Classe->nom_classe}} </span>
                          <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1"> {{$Salle->nom_salle}} </span>
                        </td>
                      </tr>
                      <tr>
                        <td>12</td>
                        <td>Marquage</td>
                        <td>
                          @foreach($actual_inscription->tags as $tag)
                          <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1">
                            {{$tag->name}}
                          </span>
                          @endforeach
                        </td>
                      </tr>
                      @endif

                    </tbody>
                  </table>
                </div>
              </div>
              @endif
            </div>
            @if($actual_inscription)
            <div class="intro-y mt-2">
              <livewire:eleve.carte.carte-widget selected="0" :eleve="$eleve" :annee="$actual_inscription->annee" wire:key="carte-widget-editor-{{$eleve->id}}" />
            </div> 
            @endif
          @elseif($currentMenu['id'] == 2)
            @if($actual_inscription)
              <div class="intro-y box mt-5">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Marquage sur l'éleve</h2>
                  </div>
                </div>
                
                <div  class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="intro-y ">
                    <table class="table table-bordered table-hover table-striped">
                      <thead class="table-primary">
                        <tr>
                          <th class="whitespace-nowrap">#</th>
                          <th class="whitespace-nowrap">Information</th>
                          <th class="whitespace-nowrap">Donnée</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Classe</td>
                          <td>
                            @php
                              $Salle = $actual_inscription->salle;
                              $Classe = $Salle->classe;
                              $Cycle = $Classe->cycle;
                            @endphp
                            <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1"> {{$Cycle->nom_cycle}} </span>
                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1"> {{$Classe->nom_classe}} </span>
                            <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1"> {{$Salle->nom_salle}} </span>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Marquage</td>
                          <td>
                            @foreach($actual_inscription->tags as $tag)

                        <span class="btn btn-outline-primary relative justify-start rounded-full pr-12 " >
                          {{$tag->name}} ({{$tag->getTranslation('name', 'court')}})
                          <a title="Supprimer le Marquage" class="w-8 h-8 tooltip absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold " wire:click="retirerTags({{$tag->id}})">
                            <x-icon name="trash" class="w-4 h-4" />
                          </a>
                        </span>
                        
                            @endforeach
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
                    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Attribuer un Marquage </div>
                  </div>
                  <form wire:submit.prevent="ajouterTags">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                      <div class="intro-y col-span-12">
                        <x-select
                          wire:key="mark-selector-inscription-{{$actual_inscription->id}}"
                          label="Choisir un Marquage"
                          placeholder="Boursier , Enfant d'enseignant etc..."
                          :options="Tag::getWithType('Eleves')->toArray()"
                          option-label="name.fr"
                          option-value="id"
                          wire:model.defer="inscription_tags"
                          multiselect
                        />
                      </div>
                      <div class="col-span-12">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            @endif
          @elseif($currentMenu['id'] == 3)
              <div class="intro-y box mt-5">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Tuteurs</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="">
                    <table class="table table-bordered table-hover table-striped">
                      <thead class="table-primary">
                        <tr>
                          <th class="whitespace-nowrap">#</th>
                          <th class="whitespace-nowrap">Nom</th>
                          <th class="whitespace-nowrap">Contact</th>
                          <th class="whitespace-nowrap">Adresse</th>
                          <th class="whitespace-nowrap">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($eleve->tuteurs as $Un_tuteur)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                              <div class="flex items-center">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                  <img class=" zoom-in" src="{{route('avatar',['text' => $Un_tuteur->nom])}}">
                                </div>
                                <div class="ml-4 mr-auto">
                                  <div class="font-medium {{($Un_tuteur->genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}} ">{{$Un_tuteur->nom}}</div>
                                  <div class="text-slate-500 text-xs mt-0.5">{{$Un_tuteur->profession}}</div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="flex items-center">
                                <div class="ml-4 mr-auto">
                                  <div class="font-medium">
                                    @if($Un_tuteur->phone_primaire)
                                      <a href="tel:{{$Un_tuteur->phone_primaire}}">{{$Un_tuteur->phone_primaire}}</a>
                                    @endif
                                    @if($Un_tuteur->phone_secondaire)
                                     | <a href="tel:{{$Un_tuteur->phone_secondaire}}">{{$Un_tuteur->phone_secondaire}}</a>
                                    @endif
                                  </div>
                                  <div class="text-slate-500 text-xs mt-0.5">
                                    @if($Un_tuteur->email)
                                      <a href="mailto:{{$Un_tuteur->email}}">{{$Un_tuteur->email}}</a>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>{{$Un_tuteur->adresse}}</td>
                            <td>
                              <div class="flex justify-around items-center gap-2">
                                <a class="edit flex items-center text-danger" href="javascript:;" onclick="
                                  window.$wireui.confirmDialog({
                                    title: 'Retirer Le Tuteur?',
                                    description: `Retirer le Tuteur {{$Un_tuteur->nom}} `,
                                    icon: 'question',
                                    accept: {
                                        label: 'Oui, Retirer',
                                        execute: () => @this.supprimerTuteur({{$Un_tuteur->id}}) ,
                                    },
                                    reject: {
                                        label: 'Non, Annuler',
                                    }
                                })">
                                  <x-icon name="trash" class="w-4 h-4 mr-1" /> Retirer
                                </a>
                                <a class="edit flex items-center" href="javascript:;" wire:click="$emitTo('tuteur.show-tuteur', 'show-tuteur-id' , {{$Un_tuteur->id}} )">
                                  <x-icon name="eye" class="w-4 h-4 mr-1" /> Afficher
                                </a>
                              </div>
                            </td>
                          </tr>
                        @empty
                          <x-small-empty-state message="Aucun Tuteur Enregistré" />
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                  
                  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
                    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Attribuer un Tuteur </div>
                  </div>
                  <form wire:submit.prevent="attribuerTuteur">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                      <x-errors class="intro-y col-span-12"/>
                      <div class="intro-y col-span-12">
                        <x-select 
                          placeholder="Choisir des Tuteurs" 
                          :async-data="route('api.tuteurs.index')" 
                          option-label="nom" 
                          option-value="id" 
                          option-description="phone_primaire" 
                          wire:model.defer="nouveau_tuteurs" 
                          multiselect 
                        />
                      </div>
                      <div class="col-span-12">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                      </div>
                    </div>
                  </form>
                  <div class="mt-3">
                    <a href="javascript:;" class="btn btn-outline-secondary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-tuteur"> Enregistrer Un Tuteur
                      <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                        <x-icon name="plus" class="w-6 h-6" solid />
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            <div id="formulaire-creation-tuteur" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <a data-tw-dismiss="modal" href="javascript:;">
                            <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                        </a>
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">Enregistrer un Tuteur</h2>
                        </div>
                        <div class="modal-body">
                            <livewire:forms.tuteur.create-tuteur-form />
                        </div>
                        <div class="modal-footer w-full bottom-0">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-show-tuteur" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                      <a data-tw-dismiss="modal" href="javascript:;">
                          <x-icon name="x" class="w-8 h-8 text-slate-400" />
                      </a>
                      <div class="modal-header">
                          <h2 class="font-medium text-base mr-auto">Tuteur de {{$eleve->nom_complet}} </h2>
                      </div>
                      <div class="modal-body bg-slate-100">
                          <livewire:tuteur.show-tuteur />
                      </div>
                      <div class="modal-footer w-full bottom-0">
                          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
                      </div>
                  </div>
              </div>
            </div>
          @elseif($currentMenu['id'] == 4)
            @if($actual_inscription)
              <div class="intro-y box mt-5">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Année Academique - {{$actual_inscription->annee->nom_annee}} </h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="intro-y ">
                    <table class="table table-bordered table-hover table-striped">
                      <thead class="table-primary">
                        <tr>
                          <th class="whitespace-nowrap">#</th>
                          <th class="whitespace-nowrap">Information</th>
                          <th class="whitespace-nowrap">Donnée</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Classe</td>
                          <td>
                            @php
                              $Salle = $actual_inscription->salle;
                              $Classe = $Salle->classe;
                              $Cycle = $Classe->cycle;
                            @endphp
                            <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1"> {{$Cycle->nom_cycle}} </span>
                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1"> {{$Classe->nom_classe}} </span>
                            <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1"> {{$Salle->nom_salle}} </span>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Marquage</td>
                          <td>
                            @foreach($actual_inscription->tags as $tag)

                        <span class="btn btn-outline-primary relative justify-start rounded-full pr-12 " >
                          {{$tag->name}} ({{$tag->getTranslation('name', 'court')}})
                          <a title="Supprimer le Marquage" class="w-8 h-8 tooltip absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold " wire:click="retirerTags({{$tag->id}})">
                            <x-icon name="trash" class="w-4 h-4" />
                          </a>
                        </span>
                        
                            @endforeach
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="intro-y box mt-5">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Changer De Classe</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="w-full">
                    <livewire:widget.picker.cycle-classe-salle-picker eventToFired="changeSalleDestination"  />
                  </div>
                  <form wire:submit.prevent="changerClasse">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                      
                      @if($nouvelle_salle)
                      <div class="col-span-12 text-base">
                        L'eleve sera deplacé à la salle : <span class="font-bold text-primary">{{$nouvelle_salle->nom_academique}}</span>
                      </div>
                      <div class="col-span-12">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                      </div>
                      @endif
                    </div>
                  </form>
                </div>
              </div>
            @endif
            @if(!$eleve->inscription_courante)
              <div class="intro-y box mt-5">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Inscrire Pour l'année en Cours - {{\Hp::annee()->nom_annee}}</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="w-full">
                    <livewire:widget.picker.cycle-classe-salle-picker eventToFired="changeSalleNouvelleInscription"  />
                  </div>
                  <form wire:submit.prevent="nouvelleInscription">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                      
                      @if($inscription_salle)
                      <div class="col-span-12 text-base">
                        L'eleve sera inscrit dans la salle : <span class="font-bold text-primary">{{$inscription_salle->nom_academique}}</span>
                      </div>
                      <div class="col-span-12">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                      </div>
                      @endif
                    </div>
                  </form>
                </div>
              </div>
            @endif
          @elseif($currentMenu['id'] == 5)
            {{$menu['titre']}}
          @elseif($currentMenu['id'] == 6)
            @if($actual_inscription)
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Ecolage</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                <div>
                  @php
                    $systeme =  ($actual_inscription->systemeEcolage) ? $actual_inscription->systemeEcolage : $actual_inscription->salle->systemeEcolage;
                    $systeme =  ($systeme) ? $systeme : $actual_inscription->salle->classe->systemeEcolage;
                    $systeme =  ($systeme) ? $systeme : $actual_inscription->salle->classe->cycle->systemeEcolage;
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
                          <td>{{$systeme->titre}}
                            @if(!$actual_inscription->systemeEcolage)
                            <span class="mx-2" >  | herité de 
                              @if($actual_inscription->salle->systemeEcolage) 
                                <a class="text-primary" href="{{route('academique.salle.show',[$actual_inscription->salle_id])}}">
                                  {{$actual_inscription->salle->nom_salle}} 
                                </a>
                              @elseif($actual_inscription->salle->classe->systemeEcolage)
                                <a class="text-primary" href="{{route('academique.classe.show',[$actual_inscription->salle->classe->id])}}">
                                  {{$actual_inscription->salle->classe->nom_classe}} 
                                </a>
                              @else
                                <a class="text-primary" href="{{route('academique.cycle.show',[$actual_inscription->salle->classe->cycle->id])}}">
                                  {{$actual_inscription->salle->classe->cycle->nom_cycle}} 
                                </a>
                              @endif 
                            </span>  
                            @endif
                          </td>
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
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Liste des Payements</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                @php
                  $enregistrements = App\Models\EnregistrementPayement::withWhereHas('payement', function ($query) {
                        $query->where('payements.payable_type', App\Models\SystemeEcolage::class);
                      }
                    )
                  ->where('eleve_id',$eleve->id)
                  ->where('annee_academique_id',$actual_inscription->annee_academique_id)
                  ->orderByDesc('created_at')->get()
                  ;
                  $valeur_progression = $actual_inscription->valeurProgressionEcolage();

                @endphp

                <div class="mb-3">
                  <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                    <div class="flex text-slate-500 text-xs">
                      <div class="mr-auto">Progression</div>
                      <div> {{$valeur_progression}} %</div>
                    </div>
                    <div class="progress h-2 mt-2">
                      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{$valeur_progression}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$valeur_progression}}%;"></div>
                    </div>
                  </div>
                </div>

                
                <div class=" col-span-12 overflow-auto lg:overflow-visible">
                  <table class="table table-bordered table-striped print:table-report--tabulator print:table-bordered">
                    <thead>
                      <tr>
                        <th class="whitespace-nowrap">ID</th>
                        <th class="whitespace-nowrap">Eleve</th>
                        <th class="text-center whitespace-nowrap">Payement</th>
                        <th class="text-center whitespace-nowrap">Reste à Payer</th>
                        <th class="text-center whitespace-nowrap">Compte Soldé</th>
                        <th class="text-center whitespace-nowrap">Date</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($enregistrements as $enregistrement)
                        <tr class="intro-x">
                          <td>
                            <div class="font-medium whitespace-nowrap">{{substr(str_repeat(0, 4).$enregistrement->id,-4)}}</div>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">ref:{{ $enregistrement->ref_no }}</div>
                          </td>
                          <td>
                            <div class="flex gap-2">
                              <div class="w-10 h-10 image-fit">
                                <img alt="" title="Sexe {{$eleve->genre}}" data-action="zoom" class="rounded-full" src="{{$eleve->image}}">
                              </div>
                              <div>
                                <a title="voir le Profil" target="_blank" class="font-medium whitespace-nowrap hover:underline hover:font-bold {{($eleve->genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}}" href="{{route('eleve.show',[$eleve->id])}}" >{{$eleve->nom_complet}}</a>
                                <div class="text-slate-500 text-xs whitespace-nowrap"> {{$actual_inscription->salle->nom_salle}} | {{$actual_inscription->salle->classe->cycle->nom_cycle}}</div>
                              </div>
                            </div> 
                          </td>

                          <td>
                            <div class="font-bold text-primary whitespace-nowrap">{{ $enregistrement->montant_paye }} FCFA</div>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"> {{ (($enregistrement->data['pour_inscription'])?? false) ? 'Pour Inscription' : 'Pour Ecolage' }} </div>
                          </td>

                          <td>
                            <div class="font-bold text-primary whitespace-nowrap">{{ $enregistrement->balance }} FCFA</div>
                          </td>

                          <td class="">
                            @if($enregistrement->complete)
                              <div class="flex items-center justify-center text-success">
                                <x-icon name="check" class="w-4 h-4 mr-2" /> Oui
                              </div>
                            @else
                              <div class="flex items-center justify-center text-danger">
                                <x-icon name="x" class="w-4 h-4 mr-2" /> Non
                              </div>
                            @endif
                          </td>

                          <td>
                            <div class="font-bold whitespace-nowrap">{{ $enregistrement->date }}</div>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">à {{$enregistrement->heure}} </div>
                          </td>

                          <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                              @php
                                $recu = App\Models\Recu::where('enregistrement_payement_id',$enregistrement->id)->orderByDesc('created_at')->first();
                              @endphp
                              @if($recu)
                              <a title="Afficher le Recu" class="flex items-center mr-3 hover:underline hover:font-bold hover:text-primary" href="{{route('payement.recu.show',[$recu->id])}}" target="_blank">
                                <x-icon name="calculator" class="w-4 h-4 mr-1" /> Recu
                              </a>
                              @endif
                              <a class="flex items-center text-danger hover:underline hover:font-bold" href="javascript:;">
                                <x-icon name="trash" class="w-4 h-4 mr-1" /> Annuler
                              </a>
                            </div>
                          </td>
                        </tr>
                      @empty
                        empty
                      @endforelse
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
            @endif
          @elseif($currentMenu['id'] == 7)
            @if(($actual_inscription))
              @if(!$actual_inscription->trashed())
                <div class="intro-y box mt-5 border-2 border-danger dark:border-danger">
                  <div class="flex items-center justify-between p-5 bg-danger/10 border-b border-danger/60 dark:border-danger">
                    <div class="flex items-center">
                      <h2 class="font-medium text-base mr-auto">Marquer Un Abandon de l'eleve</h2>
                    </div>
                  </div>
                  <div  class="px-5 sm:px-10 py-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-full text-danger dark:text-red-300">
                      Marqué un Abandon de l'eleve pour cette année academique. Les payements et les evaluations seront gélés
                    </div>
                    <div class="mt-3">
                      <div class="ml-auto">
                        <button 
                          class="btn btn-primary"  
                          onclick="
                            window.$wireui.confirmDialog({
                              title: 'Abandon?',
                              description: `Marquer un Abandon de @js($eleve->nom_complet) `,
                              icon: 'question',
                              accept: {
                                label: 'Oui, valider',
                                execute: () => @this.abandonEleve() ,
                              },
                              reject: {
                                  label: 'Non, Annuler',
                              }
                            })
                          " >Enregistrer</button>
                      </div>
                    </div>
                  </div>
                </div>
              @else
                <div class="intro-y box mt-5 border-2 border-danger dark:border-danger">
                  <div class="flex items-center justify-between p-5 bg-danger/10 border-b border-danger/60 dark:border-danger">
                    <div class="flex items-center">
                      <h2 class="font-medium text-base mr-auto">Annuler Un Abandon de l'eleve</h2>
                    </div>
                  </div>
                  <div  class="px-5 sm:px-10 py-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-full text-danger dark:text-red-300">
                      Annulé un Abandon de l'eleve pour cette année academique. Les payements et les evaluations seront dégélés
                    </div>
                    <div class="mt-3">
                      <div class="ml-auto">
                        <button 
                          class="btn btn-primary"  
                          onclick="
                            window.$wireui.confirmDialog({
                              title: 'Marquer un Retour?',
                              description: `Annuler un Abandon de @js($eleve->nom_complet) `,
                              icon: 'question',
                              accept: {
                                label: 'Oui, valider',
                                execute: () => @this.annulerAbandonEleve() ,
                              },
                              reject: {
                                  label: 'Non, Annuler',
                              }
                            })
                          " >Retablir l'Eleve</button>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endif


            @if(!$eleve->trashed())
              <div class="intro-y box mt-5 border-2 border-danger dark:border-danger">
                <div class="flex items-center justify-between p-5 bg-danger/10 border-b border-danger/60 dark:border-danger">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Supprimer l'eleve</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-10 py-5 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="w-full text-danger dark:text-red-300">
                    L'eleve sera supprimé. cette action est reversible
                  </div>
                  <div class="mt-3">
                    <div class="ml-auto">
                      <button 
                        class="btn btn-primary"  
                        onclick="
                          window.$wireui.confirmDialog({
                            title: 'Supprimer?',
                            description: `L'eleve @js($eleve->nom_complet) sera supprimé`,
                            icon: 'question',
                            accept: {
                              label: 'Oui, valider',
                              execute: () => @this.supprimerEleve() ,
                            },
                            reject: {
                                label: 'Non, Annuler',
                            }
                          })
                        " >Enregistrer</button>
                    </div>
                  </div>
                </div>
              </div>
            @else
              <div class="intro-y box mt-5 border-2 border-danger dark:border-danger">
                <div class="flex items-center justify-between p-5 bg-danger/10 border-b border-danger/60 dark:border-danger">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Retablir l'eleve</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-10 py-5 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="w-full text-danger dark:text-red-300">
                    L'eleve a été supprimé et mis a la corbeille. Retablir l'Enregistrement de L'eleve
                  </div>
                  <div class="mt-3">
                    <div class="ml-auto">
                      <button 
                        class="btn btn-primary"  
                        onclick="
                          window.$wireui.confirmDialog({
                            title: 'Retablir?',
                            description: `L'eleve @js($eleve->nom_complet) sera retabli`,
                            icon: 'question',
                            accept: {
                              label: 'Oui, valider',
                              execute: () => @this.restoreEleve() ,
                            },
                            reject: {
                                label: 'Non, Annuler',
                            }
                          })
                        " >Retablir</button>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          @endif
          <div wire:loading class="text-center w-full" >
            <x-loading />
          </div>
        </div>
      @else
      <x-loading />
      @endif

    </div>
    @endforeach
  </div>
</section>
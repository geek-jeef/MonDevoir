<section> 
  <div class="wrapper print:hidden print:invisible print:m-0 print:p-0">
    <div class="wrapper-box mt-5">
      <div class="flex justify-between box w-full p-5 bg-slate-100">
        <div>
          <livewire:widget.picker.cycle-classe-salle-picker   eventToFired="update-liste-data" />
        </div>
        <div class="self-end">
          <div class="intro-y flex flex-col-reverse sm:flex-row items-center gap-2">
            <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
              <x-icon class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" name="search" />
              <input type="text" class="form-control w-full sm:w-64 box px-10" placeholder="Recherche" wire:model.debounce.1000ms="recherche">
              {{--
              <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
                <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" name="chevron-down"/>
                <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                  <div class="dropdown-content">
                    <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                      <div class="col-span-6">
                        <label for="input-filter-1" class="form-label text-xs">From</label>
                        <input id="input-filter-1" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                      </div>
                      <div class="col-span-6">
                        <label for="input-filter-2" class="form-label text-xs">To</label>
                        <input id="input-filter-2" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                      </div>
                      <div class="col-span-6">
                        <label for="input-filter-3" class="form-label text-xs">Subject</label>
                        <input id="input-filter-3" type="text" class="form-control flex-1" placeholder="Important Meeting">
                      </div>
                      <div class="col-span-6">
                        <label for="input-filter-4" class="form-label text-xs">Has the Words</label>
                        <input id="input-filter-4" type="text" class="form-control flex-1" placeholder="Job, Work, Documentation">
                      </div>
                      <div class="col-span-6">
                        <label for="input-filter-5" class="form-label text-xs">Doesn't Have</label>
                        <input id="input-filter-5" type="text" class="form-control flex-1" placeholder="Job, Work, Documentation">
                      </div>
                      <div class="col-span-6">
                        <label for="input-filter-6" class="form-label text-xs">Size</label>
                        <select id="input-filter-6" class="form-select flex-1">
                          <option>10</option>
                          <option>25</option>
                          <option>35</option>
                          <option>50</option>
                        </select>
                      </div>
                      <div class="col-span-12 flex items-center mt-3">
                        <button class="btn btn-secondary w-32 ml-auto">Create Filter</button>
                        <button class="btn btn-primary w-32 ml-2">Search</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              --}}
            </div>
            <div class="w-full sm:w-auto flex gap-2">
              <div class="inbox-filter dropdown inset-y-0 right-0 flex items-center" data-tw-placement="bottom-start">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                  <span class="w-5 h-5 flex items-center justify-center">
                    <x-icon class="w-4 h-4" name="filter" />
                  </span>
                </button>                
                <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                  <div class="dropdown-content">
                      <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                        <div class="col-span-12">
                          <x-select
                            label="Sexe"
                            placeholder="Choisir Le Sexe"
                            wire:model="filter_sexe" required>
                            <x-select.option label="Tout" value="Tout" />
                            <x-select.option label="Masculin" value="Masculin" />
                            <x-select.option label="Feminin" value="Feminin" />
                          </x-select>
                        </div>
                        <!--div class="col-span-6">
                          <label  class="form-label text-xs">Ligne de Garde</label>
                          <select wire:model="footer" class="form-select flex-1">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                          </select>
                        </div-->

                        {{--<div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="column_classe" type="checkbox">
                            <label class="form-check-label" >Afficher les Classes</label>
                          </div>
                        </div>
                        --}}
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="column_naissance" type="checkbox">
                            <label class="form-check-label" >Afficher les Dates de Naissance</label>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="column_nationalite" type="checkbox">
                            <label class="form-check-label" >Afficher les Nationalités</label>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="column_action" type="checkbox">
                            <label class="form-check-label" >Afficher les Actions</label>
                          </div>
                        </div>
                        {{--<div class="col-span-12 flex items-center mt-3">
                          <button class="btn btn-primary w-32 ml-2">Valider</button>
                        </div>--}}
                      </div>

                  </div>
                </div>
              </div> 
            </div>
          </div>          
        </div>
      </div>
    </div>
  </div>

  <main class="mt-8">

  <div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
      <div class="grid grid-cols-12 gap-6">
          <table class="table table-report col-span-12 -mt-2">
            <thead>
              <tr>
              <th class="whitespace-nowrap">ID</th>
              <th class="whitespace-nowrap">Eleve</th>
              @if($column_naissance)
                <th class="text-center whitespace-nowrap">Naissance</th>
              @endif
              @if($column_nationalite)
                <th class="text-center whitespace-nowrap">Nationalite</th>
              @endif
              {{--<th class="text-center whitespace-nowrap">Adresse</th>--}}
              
              <th class="text-center whitespace-nowrap">Info</th>
              <th class="text-center whitespace-nowrap">Ecolage</th>
              @if($column_action)
              <th class="text-center whitespace-nowrap">Actions</th>
              @endif

              </tr>
            </thead>
            <tbody>
              @foreach ($eleves as $eleve_data)
                @php
                  $eleve = App\Models\Eleve::find($eleve_data->eleve_id);
                @endphp
              <tr class="intro-x">
                <td class="text-center">
                  <div class="flex gap-2">
                    <div class="form-check form-switch">
                      <input class="form-check-input form-check-input-sm" type="checkbox" {{$this->isSelected($eleve->id) ? 'checked' : ''}} wire:click="toggleEleveSelection({{$eleve->id}})">
                    </div>
                    <div>
                      {{$eleve->id}}
                    </div>
                  </div>
                </td>
                <td>
                  <div class="flex gap-2">
                    <div class="w-10 h-10 image-fit">
                      <img alt="" title="Sexe {{$eleve->genre}}" data-action="zoom" class="rounded-full" src="{{$eleve->image}}">
                    </div>
                    <div>
                      <div class="font-medium whitespace-nowrap {{($eleve->genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}}">{{$eleve->nom_complet}}</div>
                      <div class="text-slate-500 text-xs whitespace-nowrap">{{$eleve->inscription_courante->salle->nom_salle}}</div>
                    </div>
                  </div>                    
                </td>
                @if($column_naissance)
                <td>
                  <div class="font-medium whitespace-nowrap">{{$eleve->naissance}}</div>
                  <div class="text-slate-500 text-xs whitespace-nowrap">{{$eleve->lieu_de_naissance}}</div>
                </td>
                @endif
                @if($column_nationalite)
                <td>
                  <div class="font-medium whitespace-nowrap">{{$eleve->nationalite}}</div>
                </td>
                @endif
                {{--<td>
                  {{$eleve->adresse}}
                </td>
                --}}

                <td class="whitespace-nowrap">
                  @foreach($eleve->inscription_courante->tags as $tag)
                    <span title="{{$tag->name}}" class="tooltip px-2 py-1 rounded-full bg-primary text-white mr-1 cursor-pointer uppercase" >
                      {{$tag->getTranslation('name', 'court')}}
                    </span>
                  @endforeach
                </td>
                <td>
                  @php
                    $systeme =  ($eleve->inscription_courante->systemeEcolage) ? $eleve->inscription_courante->systemeEcolage : $eleve->inscription_courante->salle->systemeEcolage;
                    $systeme =  ($systeme) ? $systeme : $eleve->inscription_courante->salle->classe->systemeEcolage;
                    $systeme =  ($systeme) ? $systeme : $eleve->inscription_courante->salle->classe->cycle->systemeEcolage;
                  @endphp
                  @if($systeme)
                    <div title="{{$systeme->description}}" class="font-medium whitespace-nowrap cursor-pointer">{{$systeme->titre}}</div>
                    <div class="text-slate-500 text-xs whitespace-nowrap">
                      <span class="font-bold text-primary cursor-pointer" title="Montant Ecolage" >{{$systeme->montant}} FCFA</span> <span class="mx-1 font-bold cursor-pointer" title="Frais d'inscription" >| {{$systeme->inscription}} FCFA</span>
                      @if(!$eleve->inscription_courante->systemeEcolage)
                        <span class="mx-1" >| herité de 
                          @if($eleve->inscription_courante->salle->systemeEcolage) 
                            <a class="text-primary" href="{{route('academique.salle.show',[$eleve->inscription_courante->salle_id])}}">
                              {{$eleve->inscription_courante->salle->nom_salle}} 
                            </a>
                          @elseif($eleve->inscription_courante->salle->classe->systemeEcolage)
                            <a class="text-primary" href="{{route('academique.classe.show',[$eleve->inscription_courante->salle->classe->id])}}">
                              {{$eleve->inscription_courante->salle->classe->nom_classe}} 
                            </a>
                          @else
                            <a class="text-primary" href="{{route('academique.cycle.show',[$eleve->inscription_courante->salle->classe->cycle->id])}}">
                              {{$eleve->inscription_courante->salle->classe->cycle->nom_cycle}} 
                            </a>
                          @endif 
                        </span>  
                      @endif
                    </div>
                  @else
                    <div class="font-medium whitespace-nowrap cursor-pointer text-danger">Aucun Systeme de Payement</div>
                  @endif
                </td>
                @if($column_action)
                <td class="table-report__action">
                  <div class="flex justify-center items-center">
                    <a class="tooltip flex items-center mr-3" href="javascript:;"title="Afficher le Profil de l'eleve" >
                      <x-icon name="eye" class="w-4 h-4 mr-1" /> Profil
                    </a>
                    <a class="tooltip flex items-center text-danger" href="javascript:;" title="Retirer le systeme de Payement" >
                      <x-icon name="trash" class="w-4 h-4 mr-1" /> Retirer
                    </a>
                  </div>
                </td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center justify-between">
              @if($eleves) {{ $eleves->links() }} @endif
              <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
                @foreach([20,30,40,50,1000] as $nb)
                    <option {{ ($perPage == $nb )? 'selected' : ''}} >{{$nb}}</option>
                @endforeach
              </select>
          </div>
      </div>
    </div>
    <div class="col-span-12 2xl:col-span-3">
      <div class="2xl:border-l -mb-10 pb-10">
        <div class="2xl:pl-6 grid grid-cols-12 gap-6">
          <div class="col-span-12 md:col-span-6 xl:col-span-12 -mb-6">
            <div class="intro-x flex items-center h-10">
              <h2 class="text-lg font-medium truncate mr-5">Selection</h2>
            </div>
            <div class="mt-5 soft-scrollbar overflow-auto max-h-[80vh] px-2">
              @php
                  $selectionner = App\Models\Eleve::whereIn('id',$selection)->get();
                  debug($selectionner);
              @endphp
              @foreach ($selectionner as $eleve)
                <div class="intro-x">
                  <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                    <div class="flex gap-2 justify-between w-full ">
                      <div class="flex gap-2">
                        <div class="w-10 h-10 image-fit">
                          <img alt="" title="Sexe {{$eleve->genre}}" data-action="zoom" class="rounded-full" src="{{$eleve->image}}">
                        </div>
                        <div>
                          <div class="font-medium {{($eleve->genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}}">{{$eleve->nom_complet}}</div>
                          <div class="text-slate-500 text-xs">{{$eleve->inscription_courante->salle->nom_salle}} 
                            @foreach($eleve->inscription_courante->tags as $tag)
                              | <span title="{{$tag->name}}" class="tooltip px-2 py-1 rounded-full bg-primary text-white mr-1 cursor-pointer uppercase" >
                                {{$tag->getTranslation('name', 'court')}}
                              </span>
                            @endforeach
                          </div>
                        </div>
                      </div>

                      <div class="form-check form-switch">
                        <input class="form-check-input form-check-input-sm" type="checkbox" {{$this->isSelected($eleve->id) ? 'checked' : ''}} wire:click="toggleEleveSelection({{$eleve->id}})">
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              <a href="javascript:;" wire:click="clearSelectionConfirm()"  class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-red-700 dark:border-darkmode-300 text-slate-500">Supprimer La Selection</a>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 xl:col-span-12 mt-6 -mb-6">
              <form wire:submit.prevent="confirmLierSelection">
                <x-errors class="mb-3"/>
                <div class="mb-3">
                  <x-select
                    label="Choisir un systeme de Payement"
                    placeholder="Systeme de Payement"
                    :options="$listeSysteme"
                    option-label="titre"
                    option-description="details"
                    option-value="id"
                    wire:model.defer="selected_systeme_id"
                    required
                  />                  
                </div>
                <button type="submit" class="box p-4 bg-primary w-full" >
                    <div class="flex flex-wrap gap-3">
                      <div class="mr-auto">
                        <div class="text-white text-opacity-70 dark:text-slate-300 flex items-center leading-3">
                          Lier A La Selection
                        </div>
                        <div class="text-white relative text-2xl font-medium leading-5 pl-4 mt-3.5">
                           {{count($selection)}} Eleves
                        </div>
                      </div>
                      <div class="flex items-center justify-center w-12 h-12 rounded-full bg-white dark:bg-darkmode-300 bg-opacity-20 hover:bg-opacity-30 text-white" >
                        <x-icon name="link" class="w-6 h-6" />
                      </div>
                    </div>
                </button>
              </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
    
  </main>
</section>

<section>
  
  <div  wire:ignore class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Année Scolaire</h2>
  </div>
  <!-- BEGIN: Profile Info -->
  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire:ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', ['Annee Scolaire'] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $annee->nom_annee }}</div>
          <div class="text-slate-500">Année Scolaire</div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div class="tooltip truncate sm:whitespace-normal flex items-center" title="Durée De L'Année">
            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> de <span class="text-primary mx-2">{{ $annee->debut_annee() }}</span>  à <span class="text-primary mx-2">{{ $annee->fin_annee() }}</span>  
          </div>
          <div class="truncate sm:whitespace-normal flex items-center mt-3 {{ $annee->ouvert_pour_inscription ? 'text-success' : 'text-danger' }}">
            <i data-feather="edit" class="w-4 h-4 mr-2"></i> Inscription {{ $annee->ouvert_pour_inscription ? 'Ouverte' : 'fermée' }}
          </div>
          @if(session('annee_en_cours')->id == $annee->id)
            <div class="truncate sm:whitespace-normal flex items-center mt-3 text-success">
              <i data-feather="activity" class="w-4 h-4 mr-2"></i> Année En Cours
            </div>
          @else
            <div class="truncate sm:whitespace-normal flex items-center mt-3 text-danger }}">
              <i data-feather="archive" class="w-4 h-4 mr-2"></i> Année Archivée
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

      {{--  if current menu content else loading --}}
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
                  <div class="flex-1 mt-6 xl:mt-0">
                    <div class="grid grid-cols-12 gap-x-5">
                      <div class="col-span-12 2xl:col-span-6">
                        <div class="mt-3">
                          <x-input.input-lockable label="Nom Année" wire:model.defer="annee.nom_annee" />
                        </div>
                      </div>
                      <div class="col-span-12 2xl:col-span-6 self-end mb-2">
                        <div class="mt-3">
                          <div class="form-check form-switch ">
                              <input class="form-check-input" wire:model.defer="annee.ouvert_pour_inscription" type="checkbox">
                              <label class="form-check-label" >Ouvert Pour les Inscriptions</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-span-12 2xl:col-span-6">
                        <div class="mt-3">
                          <x-input.input-lockable label="Date Début" type="date" wire:model.defer="annee.date_debut" />
                        </div>
                      </div>
                      <div class="col-span-12 2xl:col-span-6">
                        <div class="mt-3">
                          <x-input.input-lockable label="Date Fin" type="date" wire:model.defer="annee.date_fin" />
                        </div>
                      </div>
                      <div class="col-span-12">
                        <div class="mt-3">
                          <x-select-lockable 
                            label="Directeur Principal" 
                            :options="App\Models\Personnel::all()->toArray()" 
                            option-label="nom_complet" 
                            option-value="id"
                            option-description="description" 
                            wire:model.defer="annee.directeur_id" />
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary  mt-3">Enregistrer</button>
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
            <h2 class="intro-y text-lg font-medium mt-3">Liste des Cycles Pour l'année {{$annee->nom_annee}} </h2>
            <div  class="grid grid-cols-12 gap-6 mt-3">
              <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <div class="hidden md:block mx-auto text-slate-500"> {{$annee->cycles->count()}} cycles Enregistrés</div>
              </div>
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                  <thead>
                    <tr>
                      <th class="whitespace-nowrap">Cycle</th>
                      <th class="text-center whitespace-nowrap">Responsable</th>

                      <th class="text-center whitespace-nowrap">Nombre de Classe</th>
                      <th class="text-center whitespace-nowrap">Nombre de Salle</th>
                      <th class="text-center whitespace-nowrap">Ouverture</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($annee->cycles as $cycle)
                      <tr class="intro-x">
                        <td class="mr-auto">
                          <a href="{{ route('academique.cycle.show',[$cycle->id])}}" class="flex">
                            <div class="self-center w-10 h-10 image-fit mr-2">
                              <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$cycle->nom_cycle])}}" title="{{ $cycle->nom_cycle}}" />
                            </div>
                            <div class="self-center ml-5 hover:text-primary hover:font-bold">
                              <div class="font-medium whitespace-nowrap">{{ $cycle->nom_cycle}}</div>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $annee->nom_annee }}</div>
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
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @elseif($currentMenu['id'] == 3)
            <h2 class="intro-y text-lg font-medium mt-3">Resultats et Examen {{$annee->nom_annee}} </h2>
            <div  class="grid grid-cols-12 gap-6 mt-3">
              <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <div class="hidden md:block mx-auto text-slate-500"> {{$annee->periodes->count()}} periodes d'evaluations Enregistrés</div>
              </div>
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                  <thead>
                    <tr>
                      <th class="whitespace-nowrap">Cycle</th>
                      <th class="whitespace-nowrap">Periode</th>
                      <th class="text-center whitespace-nowrap">Date de Debut</th>
                      <th class="text-center whitespace-nowrap">Date de Fin</th>
                      <th class="text-center whitespace-nowrap">Nombre Examen</th>
                      <th class="text-center whitespace-nowrap">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( ($annee->periodes()->orderBy('cycle_academique_id')->get()) as $periode)
                      <tr class="intro-x">
                        <td class="mr-auto">
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

                        <td class="mr-auto">
                          <a href="{{ route('periode.show',[$periode->id])}}" class="flex">
                            <div class="self-center w-10 h-10 image-fit mr-2">
                              <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$periode->nom_periode])}}" title="{{ $periode->nom_periode}}" />
                            </div>
                            <div class="self-center ml-5 hover:text-primary hover:font-bold">
                              <div class="font-medium whitespace-nowrap">{{ $periode->nom_periode}}</div>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $annee->nom_annee }}</div>
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
            

          @endif


          
        </div>
      @else
      <x-loading />
      @endif

    </div>
    @endforeach
    

  </div>
      {{--
      <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Latest Uploads -->
        <div class="intro-y box col-span-12 lg:col-span-6">
          <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Latest Uploads</h2>
            <div class="dropdown ml-auto sm:hidden">
              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
              </a>
              <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                  <li>
                    <a href="javascript:;" class="dropdown-item">All Files</a>
                  </li>
                </ul>
              </div>
            </div>
            <button class="btn btn-outline-secondary hidden sm:flex">All Files</button>
          </div>
          <div class="p-5">
            <div class="flex items-center">
              <div class="file">
                <a href="" class="w-12 file__icon file__icon--directory"></a>
              </div>
              <div class="ml-4">
                <a class="font-medium" href="">Documentation</a>
                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
              </div>
              <div class="dropdown ml-auto">
                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                  <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                </a>
                <div class="dropdown-menu w-40">
                  <ul class="dropdown-content">
                    <li>
                      <a href="" class="dropdown-item">
                        <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                      </a>
                    </li>
                    <li>
                      <a href="" class="dropdown-item">
                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="flex items-center mt-5">
              <div class="file">
                <a href="" class="w-12 file__icon file__icon--file">
                  <div class="file__icon__file-name text-xs">MP3</div>
                </a>
              </div>
              <div class="ml-4">
                <a class="font-medium" href="">Celine Dion - Ashes</a>
                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
              </div>
              <div class="dropdown ml-auto">
                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                  <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                </a>
                <div class="dropdown-menu w-40">
                  <ul class="dropdown-content">
                    <li>
                      <a href="" class="dropdown-item">
                        <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                      </a>
                    </li>
                    <li>
                      <a href="" class="dropdown-item">
                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="flex items-center mt-5">
              <div class="file">
                <a href="" class="w-12 file__icon file__icon--empty-directory"></a>
              </div>
              <div class="ml-4">
                <a class="font-medium" href="">Resources</a>
                <div class="text-slate-500 text-xs mt-0.5">0 KB</div>
              </div>
              <div class="dropdown ml-auto">
                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                  <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                </a>
                <div class="dropdown-menu w-40">
                  <ul class="dropdown-content">
                    <li>
                      <a href="" class="dropdown-item">
                        <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                      </a>
                    </li>
                    <li>
                      <a href="" class="dropdown-item">
                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Latest Uploads -->
        <!-- BEGIN: Work In Progress -->
        <div class="intro-y box col-span-12 lg:col-span-6">
          <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
            <div class="dropdown ml-auto sm:hidden">
              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
              </a>
              <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                <ul class="dropdown-content">
                  <li>
                    <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                  </li>
                  <li>
                    <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                  </li>
                </ul>
              </div>
            </div>
            <ul
              class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
              role="tablist"
            >
              <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                <a
                  href="javascript:;"
                  class="nav-link py-5 active"
                  data-tw-target="#work-in-progress-new"
                  aria-controls="work-in-progress-new"
                  aria-selected="true"
                  role="tab"
                >
                  New
                </a>
              </li>
              <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                <a
                  href="javascript:;"
                  class="nav-link py-5"
                  data-tw-target="#work-in-progress-last-week"
                  aria-controls="work-in-progress-last-week"
                  aria-selected="false"
                  role="tab"
                >
                  Last Week
                </a>
              </li>
            </ul>
          </div>
          <div class="p-5">
            <div class="tab-content">
              <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                <div>
                  <div class="flex">
                    <div class="mr-auto">Pending Tasks</div>
                    <div>20%</div>
                  </div>
                  <div class="progress h-1 mt-2">
                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mt-5">
                  <div class="flex">
                    <div class="mr-auto">Completed Tasks</div>
                    <div>2 / 20</div>
                  </div>
                  <div class="progress h-1 mt-2">
                    <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mt-5">
                  <div class="flex">
                    <div class="mr-auto">Tasks In Progress</div>
                    <div>42</div>
                  </div>
                  <div class="progress h-1 mt-2">
                    <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Work In Progress -->
        <!-- BEGIN: Daily Sales -->
        <div class="intro-y box col-span-12 lg:col-span-6">
          <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
            <div class="dropdown ml-auto sm:hidden">
              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
              </a>
              <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                  <li>
                    <a href="javascript:;" class="dropdown-item">
                      <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <button class="btn btn-outline-secondary hidden sm:flex">
              <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
            </button>
          </div>
          <div class="p-5">
            <div class="relative flex items-center">
              <div class="w-12 h-12 flex-none image-fit">
                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
              </div>
              <div class="ml-4 mr-auto">
                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
              </div>
              <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
            </div>
            <div class="relative flex items-center mt-5">
              <div class="w-12 h-12 flex-none image-fit">
                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
              </div>
              <div class="ml-4 mr-auto">
                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
              </div>
              <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
            </div>
            <div class="relative flex items-center mt-5">
              <div class="w-12 h-12 flex-none image-fit">
                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
              </div>
              <div class="ml-4 mr-auto">
                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
              </div>
              <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
            </div>
          </div>
        </div>
        <!-- END: Daily Sales -->
        <!-- BEGIN: Latest Tasks -->
        <div class="intro-y box col-span-12 lg:col-span-6">
          <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
            <div class="dropdown ml-auto sm:hidden">
              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
              </a>
              <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                <ul class="dropdown-content">
                  <li>
                    <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                  </li>
                  <li>
                    <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                  </li>
                </ul>
              </div>
            </div>
            <ul
              class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
              role="tablist"
            >
              <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                <a
                  href="javascript:;"
                  class="nav-link py-5 active"
                  data-tw-target="#latest-tasks-new"
                  aria-controls="latest-tasks-new"
                  aria-selected="true"
                  role="tab"
                >
                  New
                </a>
              </li>
              <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                <a
                  href="javascript:;"
                  class="nav-link py-5"
                  data-tw-target="#latest-tasks-last-week"
                  aria-controls="latest-tasks-last-week"
                  aria-selected="false"
                  role="tab"
                >
                  Last Week
                </a>
              </li>
            </ul>
          </div>
          <div class="p-5">
            <div class="tab-content">
              <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                <div class="flex items-center">
                  <div class="border-l-2 border-primary dark:border-primary pl-4">
                    <a href="" class="font-medium">Create New Campaign</a>
                    <div class="text-slate-500">10:00 AM</div>
                  </div>
                  <div class="form-check form-switch ml-auto">
                    <input class="form-check-input" type="checkbox">
                  </div>
                </div>
                <div class="flex items-center mt-5">
                  <div class="border-l-2 border-primary dark:border-primary pl-4">
                    <a href="" class="font-medium">Meeting With Client</a>
                    <div class="text-slate-500">02:00 PM</div>
                  </div>
                  <div class="form-check form-switch ml-auto">
                    <input class="form-check-input" type="checkbox">
                  </div>
                </div>
                <div class="flex items-center mt-5">
                  <div class="border-l-2 border-primary dark:border-primary pl-4">
                    <a href="" class="font-medium">Create New Repository</a>
                    <div class="text-slate-500">04:00 PM</div>
                  </div>
                  <div class="form-check form-switch ml-auto">
                    <input class="form-check-input" type="checkbox">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Latest Tasks -->
        <!-- BEGIN: New Products -->
        <div class="intro-y box col-span-12">
          <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">New Products</h2>
            <button data-carousel="new-products" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
              <i data-feather="chevron-left" class="w-4 h-4"></i>
            </button>
            <button data-carousel="new-products" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
              <i data-feather="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>
          <div id="new-products" class="tiny-slider py-5">
            @foreach (array_slice($fakers, 0, 5) as $faker)
              <div class="px-5">
                <div class="flex flex-col lg:flex-row items-center pb-5">
                  <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                    <div class="sm:mr-5">
                      <div class="w-20 h-20 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                      </div>
                    </div>
                    <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                      <a href="" class="font-medium text-lg">{{ $faker['products'][0]['name'] }}</a>
                      <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['news'][0]['short_content'] }}</div>
                    </div>
                  </div>
                  <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                    <div class="text-center rounded-md w-20 py-3">
                      <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                      <div class="text-slate-500">Orders</div>
                    </div>
                    <div class="text-center rounded-md w-20 py-3">
                      <div class="font-medium text-primary text-xl">{{ $faker['totals'][1] }}k</div>
                      <div class="text-slate-500">Purchases</div>
                    </div>
                    <div class="text-center rounded-md w-20 py-3">
                      <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                      <div class="text-slate-500">Reviews</div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                  <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                    <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                    <div class="text-slate-500">Date of Release</div>
                  </div>
                  <div class="flex sm:ml-auto mt-5 sm:mt-0">
                    <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                    <button class="btn btn-secondary w-20 ml-2">Details</button>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <!-- END: New Products -->
        <!-- BEGIN: New Authors -->
        <div class="intro-y box col-span-12">
          <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">New Authors</h2>
            <button data-carousel="new-authors" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
              <i data-feather="chevron-left" class="w-4 h-4"></i>
            </button>
            <button data-carousel="new-authors" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
              <i data-feather="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>
          <div id="new-authors" class="tiny-slider py-5">
            @foreach (array_slice($fakers, 0, 5) as $faker)
              <div class="px-5">
                <div class="flex flex-col lg:flex-row items-center pb-5">
                  <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                    <div class="sm:mr-5">
                      <div class="w-20 h-20 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                      </div>
                    </div>
                    <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                      <a href="" class="font-medium text-lg">{{ $faker['users'][0]['name'] }}</a>
                      <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['jobs'][0] }}</div>
                    </div>
                  </div>
                  <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                    <div class="flex items-center">
                      <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                        <i class="w-3 h-3 fill-current" data-feather="facebook"></i>
                      </a>
                      {{ $faker['users'][0]['email'] }}
                    </div>
                    <div class="flex items-center mt-2">
                      <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                        <i class="w-3 h-3 fill-current" data-feather="twitter"></i>
                      </a>
                      {{ $faker['users'][0]['name'] }}
                    </div>
                  </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                  <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                    <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                    <div class="text-slate-500">Joined Date</div>
                  </div>
                  <div class="flex sm:ml-auto mt-5 sm:mt-0">
                    <button class="btn btn-secondary w-20 ml-auto">Message</button>
                    <button class="btn btn-secondary w-20 ml-2">Profile</button>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <!-- END: New Authors -->
      </div>
      --}}
</section>

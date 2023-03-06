<section>
      <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12 2xl:col-span-12">
              <div class="grid grid-cols-12 gap-6">
                  --<div class="col-span-12 mt-8">
                      <div class="intro-y flex items-center h-10">
                          <h2 class="text-lg font-medium truncate mr-5">{{$examen->nom_examen}}</h2>
                          <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
                            <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
                          </button>
                      </div>
                      <div class="grid grid-cols-12 gap-6 mt-5">
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="edit" class="report-box__icon text-primary"></i>
                                          <div class="ml-auto">
                                              <div class="report-box__indicator bg-success tooltip cursor-pointer" 
                                                title="Modifier les notes">
                                                  Modifier <i data-feather="edit" class="w-4 h-4 ml-0.5"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">{percent()}%</div>
                                      <div class="text-base text-slate-500 mt-1">des Notes Enregistré</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="archive" class="report-box__icon text-pending"></i>
                                          <div class="ml-auto">
                                              <a href="#liste-matiere-blanc" class="report-box__indicator bg-danger tooltip cursor-pointer" 
                                                title="Afficher les matieres">
                                                  Afficher <i data-feather="eye" class="w-4 h-4 ml-0.5"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">{{$examen->matieres->count()}} </div>
                                      <div class="text-base text-slate-500 mt-1">matieres</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="database" class="report-box__icon text-warning"></i>
                                          <div class="ml-auto">
                                              <div class="report-box__indicator bg-success tooltip cursor-pointer" 
                                                    title="Voir les etablissements">
                                                  Voir <i data-feather="eye" class="w-4 h-4 ml-0.5"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">{ecole_count()}</div>
                                      <div class="text-base text-slate-500 mt-1">Ecoles</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="user" class="report-box__icon text-success"></i>
                                          <div class="ml-auto">
                                              <a href="#" class="report-box__indicator bg-success tooltip cursor-pointer" 
                                              title="Ajouter des eleves">
                                                  Ajouter <i data-feather="plus" class="w-4 h-4 ml-0.5"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">{eleve_count()}</div>
                                      <div class="text-base text-slate-500 mt-1">Eleves</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="intro-y box col-span-12 sm:col-span-6 lg:col-span-8 mt-8">
                      <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                          <h2 class="font-medium text-base mr-auto">Liste des Matieres</h2>
                          <div class="dropdown ml-auto sm:hidden">
                              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                  <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                              </a>
                              <div class="dropdown-menu w-40">
                                  <ul class="dropdown-content">
                                      <li>
                                          <a href="javascript:;" class="dropdown-item" data-tw-toggle="modal" data-tw-target="#modal-import-matiere-examen-blanc" >Importer</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <button class="btn btn-outline-secondary hidden sm:flex" data-tw-toggle="modal" data-tw-target="#modal-import-matiere-examen-blanc" >Importer</button>
                      </div>
                      <div class="p-5">
                          <div class="tab-content">
                              <div id="liste-matiere-blanc" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                @forelse($examen->matieres as $matiere)
                                  <div class="flex items-center justify-between @if(!$loop->first)  mt-5  @endif  ">
                                      <div class="border-l-2 @if(!$matiere->active) border-danger dark:border-danger @else border-primary dark:border-primary @endif pl-4">
                                          <a href="#" class="font-medium ">{{$matiere->nom_matiere}}</a>
                                          <div class="text-slate-500">{{$matiere->nom_matiere_court}} - 
                                            <span 
                                              class="btn btn-sm @if(!$matiere->active) btn-rounded-danger @else btn-rounded-primary @endif w-24 mr-1 mb-2 tooltip cursor-pointer" 
                                              title="Coefficient {{$matiere->nom_matiere}}" >
                                              Coefficient : {{$matiere->coeficient}}
                                            </span> 
                                          </div>
                                      </div>
                                      
                                      <div class="flex justify-between">
                                        <div class="form-check form-switch ml-auto">
                                          <input class="form-check-input" wire:click="toggleActivityMatiere({{$matiere->id}})" @if($matiere->active) checked @endif type="checkbox">
                                        </div>
                                        <div>
                                          <button class="btn btn-sm btn-rounded-danger ml-2 tooltip cursor-pointer" title="supprimer La matiere" wire:click="deleteMatiere({{$matiere->id}})" ><x-icon class="w-4 h-4" name="x" /></button>
                                        </div>
                                      </div>
                                  </div>
                                @empty
                                <div class="p-5">
                                    <ul class="nav nav-boxed-tabs justify-center flex-col sm:flex-row" role="tablist">
                                        <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                                            <a href="javascript:;" class="nav-link text-center w-full sm:w-40 mb-2 sm:mb-0 sm:mx-2 py-2 px-0 active" data-tw-target="#top-products-laravel" aria-controls="top-products-laravel" aria-selected="true" role="tab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box block w-6 h-6 mb-2 mx-auto"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg> Aucune Matiere Enregistrée
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                @endforelse
                              </div>
                          </div>
                      </div>
                  </div>

                  <livewire:evaluation.examen-blanc.graphe.repartition-coefficient-matiere :examen="$examen" />
                  <div class="col-span-12 lg:col-span-8 mt-8">
                      <div class="intro-y block sm:flex items-center h-10">
                          <h2 class="text-lg font-medium truncate mr-5">Liste des Etablissements</h2>
                          <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                              
                              <a href="{{route('examen_blanc.import.eleve',$examen->id)}}" target="_blank" class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                  Ajouter des Eleves <x-icon class="w-4 h-4 cursor-pointer ml-2" name="link" />
                              </a>
                              
                          </div>
                      </div>
                      @if($examen->etablissements)
                      <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                          <table class="table table-report sm:mt-2">
                              <thead>
                                  <tr>
                                      <th class="whitespace-nowrap">Etablissement</th>
                                      <th class="whitespace-nowrap">Responsable</th>
                                      <th class="text-center whitespace-nowrap">Eleves Inscrits</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($examen->etablissements as $ecole)
                                      <tr class="intro-x">
                                          <td>
                                              <div href="" class="font-medium whitespace-nowrap">{{ $ecole->nom_etablissement_court}}</div>
                                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $ecole->nom_etablissement}}</div>
                                          </td>
                                          <td class="">
                                              <a href="#" class="font-medium whitespace-nowrap">{{$ecole['responsable']['nom']??''}}</a>
                                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                                  <span class="mr-2">
                                                      <x-icon class="w-4 h-4 inline mr-1" name="phone" />{{$ecole['responsable']['phone']??''}}  
                                                  </span>
                                                  <span class="ml-2">
                                                      <x-icon class="w-4 h-4 inline mr-1" name="mail" />  {{$ecole['responsable']['email']??''}}
                                                  </span>
                                              </div>
                                          </td>
                                          <td class="text-center font-medium">{{ $ecole->effectif}}</td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                      @else
                      <div class="p-8">
                          <ul class="nav nav-boxed-tabs justify-center flex-col sm:flex-row" role="tablist">
                              <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                                  <a href="javascript:;" class="nav-link text-center w-full sm:w-64 mb-2 sm:mb-0 sm:mx-2 py-2 px-0 active" data-tw-target="#top-products-laravel" aria-controls="top-products-laravel" aria-selected="true" role="tab">
                                      <x-icon  class="block w-24 h-24 mb-2 mx-auto cursor-pointer" name="x" outline />
                                      Aucune Ecole Enregistrée
                                  </a>
                              </li>
                          </ul>
                      </div>
                      @endif
                  </div>
                  <livewire:evaluation.examen-blanc.graphe.repartition-eleve :examen="$examen" /> 
                  <livewire:evaluation.examen-blanc.vue.liste-eleve :examen="$examen" />

                  <!-- BEGIN: Work In Progress -->
                  <div class="intro-y box col-span-12 lg:col-span-6 mt-8">
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
                  

                  <!-- BEGIN: General Report -->
                  <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex items-center">
                                  <div class="w-2/4 flex-none">
                                      <div class="text-lg font-medium truncate">Target Sales</div>
                                      <div class="text-slate-500 mt-1">300 Sales</div>
                                  </div>
                                  <div class="flex-none ml-auto relative">
                                      <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                      <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex">
                                  <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                  <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">320 Followers</div>
                              </div>
                              <div class="mt-4">
                                  <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex items-center">
                                  <div class="w-2/4 flex-none">
                                      <div class="text-lg font-medium truncate">New Products</div>
                                      <div class="text-slate-500 mt-1">1450 Products</div>
                                  </div>
                                  <div class="flex-none ml-auto relative">
                                      <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                      <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex">
                                  <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                  <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">180 Campaign</div>
                              </div>
                              <div class="mt-4">
                                  <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- END: General Report -->

                  <!-- BEGIN: General Statistic -->
                  <div class="intro-y box col-span-12">
                      <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                          <h2 class="font-medium text-base mr-auto">General Statistics</h2>
                          <div class="dropdown ml-auto sm:hidden">
                              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                  <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                              </a>
                              <div class="dropdown-menu w-40">
                                  <ul class="dropdown-content">
                                      <li>
                                          <a href="javascript:;" class="dropdown-item">
                                              <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <button class="btn btn-outline-secondary hidden sm:flex">
                              <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML
                          </button>
                      </div>
                      <div class="grid grid-cols-1 2xl:grid-cols-7 gap-6 p-5">
                          <div class="2xl:col-span-2">
                              <div class="grid grid-cols-2 gap-6">
                                  <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                      <div class="font-medium">Net Worth</div>
                                      <div class="flex items-center mt-1 sm:mt-0">
                                          <div class="mr-4 w-20 flex">
                                              USP: <span class="ml-3 font-medium text-success">+23%</span>
                                          </div>
                                          <div class="w-5/6 overflow-auto">
                                              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                      <div class="font-medium">Sales</div>
                                      <div class="flex items-center mt-1 sm:mt-0">
                                          <div class="mr-4 w-20 flex">
                                              USP: <span class="ml-3 font-medium text-danger">-5%</span>
                                          </div>
                                          <div class="w-5/6 overflow-auto">
                                              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                      <div class="font-medium">Profit</div>
                                      <div class="flex items-center mt-1 sm:mt-0">
                                          <div class="mr-4 w-20 flex">
                                              USP: <span class="ml-3 font-medium text-danger">-10%</span>
                                          </div>
                                          <div class="w-5/6 overflow-auto">
                                              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                      <div class="font-medium">Products</div>
                                      <div class="flex items-center mt-1 sm:mt-0">
                                          <div class="mr-4 w-20 flex">
                                              USP: <span class="ml-3 font-medium text-success">+55%</span>
                                          </div>
                                          <div class="w-5/6 overflow-auto">
                                              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="2xl:col-span-5 w-full">
                              <div class="flex justify-center mt-8">
                                  <div class="flex items-center mr-5">
                                      <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                      <span>Product Profit</span>
                                  </div>
                                  <div class="flex items-center">
                                      <div class="w-2 h-2 bg-slate-300 rounded-full mr-3"></div>
                                      <span>Author Sales</span>
                                  </div>
                              </div>
                              <div class="mt-8">
                                  <canvas id="stacked-bar-chart-1" height="130"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- END: General Statistic -->
              </div>
          </div>
      </div>


  <div id="modal-import-matiere-examen-blanc" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <x-icon name="x" class="w-8 h-8 text-slate-400" />
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Ajouter des matieres pour l'examen</h2>
        </div>
        <div class="modal-body bg-slate-100">
          <livewire:evaluation.examen-blanc.matiere.import-matiere :examen="$examen" />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-danger w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>

</section>

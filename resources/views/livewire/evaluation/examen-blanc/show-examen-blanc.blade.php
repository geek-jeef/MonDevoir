<section>
  <div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
      <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-8">
          <div class="intro-y flex h-10 items-center">
            <h2 class="mr-5 truncate text-lg font-medium">{{ $examen->nom_examen }}</h2>
            <button wire:click="$refresh" class="text-primary ml-auto flex items-center">
              <x-icon name="refresh" class="mr-3 h-4 w-4 hover:animate-spin" /> Actualiser
            </button>
          </div>
          <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <i data-feather="edit" class="report-box__icon text-primary"></i>
                    <div class="ml-auto">
                      <div class="report-box__indicator bg-success tooltip cursor-pointer" title="Modifier les notes">
                        Modifier <i data-feather="edit" class="ml-0.5 h-4 w-4"></i>
                      </div>
                    </div>
                  </div>
                  <div class="mt-6 text-3xl font-medium leading-8">{percent()}%</div>
                  <div class="mt-1 text-base text-slate-500">des Notes Enregistré</div>
                </div>
              </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <i data-feather="archive" class="report-box__icon text-pending"></i>
                    <div class="ml-auto">
                      <a href="#liste-matiere-blanc" class="report-box__indicator bg-danger tooltip cursor-pointer"
                        title="Afficher les matieres">
                        Afficher <i data-feather="eye" class="ml-0.5 h-4 w-4"></i>
                      </a>
                    </div>
                  </div>
                  <div class="mt-6 text-3xl font-medium leading-8">{{ $examen->matieres->count() }} </div>
                  <div class="mt-1 text-base text-slate-500">matieres</div>
                </div>
              </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <i data-feather="database" class="report-box__icon text-warning"></i>
                    <div class="ml-auto">
                      <div class="report-box__indicator bg-success tooltip cursor-pointer"
                        title="Voir les etablissements">
                        Voir <i data-feather="eye" class="ml-0.5 h-4 w-4"></i>
                      </div>
                    </div>
                  </div>
                  <div class="mt-6 text-3xl font-medium leading-8">{{ $examen->etablissements->count() }}</div>
                  <div class="mt-1 text-base text-slate-500">Ecoles</div>
                </div>
              </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <i data-feather="user" class="report-box__icon text-success"></i>
                    <div class="ml-auto">
                      <a href="#" class="report-box__indicator bg-success tooltip cursor-pointer"
                        title="Ajouter des eleves">
                        Ajouter <i data-feather="plus" class="ml-0.5 h-4 w-4"></i>
                      </a>
                    </div>
                  </div>
                  <div class="mt-6 text-3xl font-medium leading-8">{{ $examen->effectif() }}</div>
                  <div class="mt-1 text-base text-slate-500">Eleves</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="intro-y box col-span-12 mt-8 sm:col-span-6 lg:col-span-8">
          <div class="dark:border-darkmode-400 flex items-center border-b border-slate-200/60 px-5 py-5 sm:py-3">
            <h2 class="mr-auto text-base font-medium">Liste des Matieres</h2>
            <div class="dropdown ml-auto sm:hidden">
              <a class="dropdown-toggle block h-5 w-5" href="javascript:;" aria-expanded="false"
                data-tw-toggle="dropdown">
                <i data-feather="more-horizontal" class="h-5 w-5 text-slate-500"></i>
              </a>
              <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                  <li>
                    <a href="javascript:;" class="dropdown-item" data-tw-toggle="modal"
                      data-tw-target="#modal-import-matiere-examen-blanc">Importer</a>
                  </li>
                </ul>
              </div>
            </div>
            <button class="btn btn-outline-secondary hidden sm:flex" data-tw-toggle="modal"
              data-tw-target="#modal-import-matiere-examen-blanc">Importer</button>
          </div>
          <div class="p-5">
            <div class="tab-content">
              <div id="liste-matiere-blanc" class="tab-pane active" role="tabpanel"
                aria-labelledby="latest-tasks-new-tab">
                @forelse($examen->matieres as $matiere)
                  <div class="@if (!$loop->first) mt-5 @endif flex items-center justify-between">
                    <div
                      class="@if (!$matiere->active) border-danger dark:border-danger @else border-primary dark:border-primary @endif border-l-2 pl-4">
                      <a href="#" class="font-medium">{{ $matiere->nom_matiere }}</a>
                      <div class="text-slate-500">{{ $matiere->nom_matiere_court }} -
                        <span
                          class=" font-bold btn-sm @if (!$matiere->active) text-danger @else text-primary @endif tooltip mr-1 w-24 cursor-pointer"
                          title="Coefficient {{ $matiere->nom_matiere }}">
                          Coefficient : {{ $matiere->coeficient }}
                        </span>
                      </div>
                    </div>

                    <div class="flex justify-between">
                      <div>
                        <a href="{{route('examen_blanc.notes.matiere.edit',$matiere->id)}}" target="_blank" class="btn btn-sm btn-rounded-primary mr-2 cursor-pointer">
                          Modifier les notes
                          <x-icon class="h-4 w-4" name="pencil-alt" />
                        </a>
                      </div>
                      <div class="form-check form-switch ml-auto tooltip" title="active">
                        <input class="form-check-input" wire:click="toggleActivityMatiere({{ $matiere->id }})"
                          @if ($matiere->active) checked @endif type="checkbox">
                      </div>
                      <div>
                        <button class="btn btn-sm btn-rounded-danger tooltip ml-2 cursor-pointer"
                          title="supprimer La matiere" wire:click="deleteMatiere({{ $matiere->id }})">
                          <x-icon class="h-4 w-4" name="x" />
                        </button>
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="p-5">
                    <ul class="nav nav-boxed-tabs flex-col justify-center sm:flex-row" role="tablist">
                      <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                        <a href="javascript:;"
                          class="nav-link active mb-2 w-full py-2 px-0 text-center sm:mx-2 sm:mb-0 sm:w-40"
                          data-tw-target="#top-products-laravel" aria-controls="top-products-laravel"
                          aria-selected="true" role="tab">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-box mx-auto mb-2 block h-6 w-6">
                            <path
                              d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                          </svg> Aucune Matiere Enregistrée
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
        <div class="col-span-12 mt-8 lg:col-span-8">
          <div class="intro-y block h-10 items-center sm:flex">
            <h2 class="mr-5 truncate text-lg font-medium">Liste des Etablissements</h2>
            <div class="mt-3 flex items-center sm:ml-auto sm:mt-0">

              <a href="{{ route('examen_blanc.import.eleve', $examen->id) }}" target="_blank"
                class="btn box ml-3 flex items-center text-slate-600 dark:text-slate-300">
                Ajouter des Eleves
                <x-icon class="ml-2 h-4 w-4 cursor-pointer" name="link" />
              </a>

            </div>
          </div>
          @if ($examen->etablissements)
            <div class="intro-y mt-8 overflow-auto sm:mt-0 lg:overflow-visible">
              <table class="table-report table sm:mt-2">
                <thead>
                  <tr>
                    <th class="whitespace-nowrap">Etablissement</th>
                    <th class="whitespace-nowrap">Responsable</th>
                    <th class="whitespace-nowrap text-center">Eleves Inscrits</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($examen->etablissements as $ecole)
                    <tr class="intro-x">
                      <td>
                        <div href="" class="whitespace-nowrap font-medium">
                          {{ $ecole->nom_etablissement_court }}</div>
                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">{{ $ecole->nom_etablissement }}
                        </div>
                      </td>
                      <td class="">
                        <a href="#"
                          class="whitespace-nowrap font-medium">{{ $ecole['responsable']['nom'] ?? '' }}</a>
                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                          <span class="mr-2">
                            <x-icon class="mr-1 inline h-4 w-4" name="phone" />
                            {{ $ecole['responsable']['phone'] ?? '' }}
                          </span>
                          <span class="ml-2">
                            <x-icon class="mr-1 inline h-4 w-4" name="mail" />
                            {{ $ecole['responsable']['email'] ?? '' }}
                          </span>
                        </div>
                      </td>
                      <td class="text-center font-medium">{{ $ecole->effectif }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @else
            <div class="p-8">
              <ul class="nav nav-boxed-tabs flex-col justify-center sm:flex-row" role="tablist">
                <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                  <a href="javascript:;"
                    class="nav-link active mb-2 w-full py-2 px-0 text-center sm:mx-2 sm:mb-0 sm:w-64"
                    data-tw-target="#top-products-laravel" aria-controls="top-products-laravel" aria-selected="true"
                    role="tab">
                    <x-icon class="mx-auto mb-2 block h-24 w-24 cursor-pointer" name="x" outline />
                    Aucune Ecole Enregistrée
                  </a>
                </li>
              </ul>
            </div>
          @endif
        </div>

        <livewire:evaluation.examen-blanc.graphe.repartition-eleve :examen="$examen" />
        <livewire:evaluation.examen-blanc.vue.liste-eleve :examen="$examen" />
        <livewire:evaluation.examen-blanc.vue.onglet-progression :examen="$examen" />

        <!-- BEGIN: Work In Progress -->
        <div class="intro-y box col-span-12 mt-8 lg:col-span-12">
          <div class="dark:border-darkmode-400 flex items-center border-b border-slate-200/60 px-5 py-5 sm:py-0">
            <h2 class="mr-auto text-base font-medium">Work In Progress</h2>
            <div class="dropdown ml-auto sm:hidden">
              <a class="dropdown-toggle block h-5 w-5" href="javascript:;" aria-expanded="false"
                data-tw-toggle="dropdown">
                <i data-feather="more-horizontal" class="h-5 w-5 text-slate-500"></i>
              </a>
              <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                <ul class="dropdown-content">
                  <li>
                    <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab"
                      data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab"
                      aria-controls="work-in-progress-new" aria-selected="true">New</a>
                  </li>
                  <li>
                    <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab"
                      data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab"
                      aria-selected="false">Last Week</a>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="nav nav-link-tabs ml-auto hidden w-auto sm:flex" role="tablist">
              <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                <a href="javascript:;" class="nav-link active py-5" data-tw-target="#work-in-progress-new"
                  aria-controls="work-in-progress-new" aria-selected="true" role="tab">
                  New
                </a>
              </li>
              <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                <a href="javascript:;" class="nav-link py-5" data-tw-target="#work-in-progress-last-week"
                  aria-controls="work-in-progress-last-week" aria-selected="false" role="tab">
                  Last Week
                </a>
              </li>
            </ul>
          </div>
          <div class="p-5">
            <div class="tab-content">
              <div id="work-in-progress-new" class="tab-pane active" role="tabpanel"
                aria-labelledby="work-in-progress-new-tab">
                <div>
                  <div class="flex">
                    <div class="mr-auto">Pending Tasks</div>
                    <div>20%</div>
                  </div>
                  <div class="progress mt-2 h-1">
                    <div class="progress-bar bg-primary w-1/2" role="progressbar" aria-valuenow="0"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mt-5">
                  <div class="flex">
                    <div class="mr-auto">Completed Tasks</div>
                    <div>2 / 20</div>
                  </div>
                  <div class="progress mt-2 h-1">
                    <div class="progress-bar bg-primary w-1/4" role="progressbar" aria-valuenow="0"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="mt-5">
                  <div class="flex">
                    <div class="mr-auto">Tasks In Progress</div>
                    <div>42</div>
                  </div>
                  <div class="progress mt-2 h-1">
                    <div class="progress-bar bg-primary w-3/4" role="progressbar" aria-valuenow="0"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <a href="" class="btn btn-secondary mx-auto mt-5 block w-40">View More Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Work In Progress -->


        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8 grid grid-cols-12 gap-6">
          <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
            <div class="box zoom-in p-5">
              <div class="flex items-center">
                <div class="w-2/4 flex-none">
                  <div class="truncate text-lg font-medium">Target Sales</div>
                  <div class="mt-1 text-slate-500">300 Sales</div>
                </div>
                <div class="relative ml-auto flex-none">
                  <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                  <div class="absolute top-0 left-0 flex h-full w-full items-center justify-center font-medium">20%
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
            <div class="box zoom-in p-5">
              <div class="flex">
                <div class="mr-3 truncate text-lg font-medium">Social Media</div>
                <div
                  class="dark:bg-darkmode-400 ml-auto flex cursor-pointer items-center truncate rounded-full bg-slate-100 py-1 px-2 text-xs text-slate-500">
                  320 Followers</div>
              </div>
              <div class="mt-4">
                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
              </div>
            </div>
          </div>
          <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
            <div class="box zoom-in p-5">
              <div class="flex items-center">
                <div class="w-2/4 flex-none">
                  <div class="truncate text-lg font-medium">New Products</div>
                  <div class="mt-1 text-slate-500">1450 Products</div>
                </div>
                <div class="relative ml-auto flex-none">
                  <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                  <div class="absolute top-0 left-0 flex h-full w-full items-center justify-center font-medium">45%
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
            <div class="box zoom-in p-5">
              <div class="flex">
                <div class="mr-3 truncate text-lg font-medium">Posted Ads</div>
                <div
                  class="dark:bg-darkmode-400 ml-auto flex cursor-pointer items-center truncate rounded-full bg-slate-100 py-1 px-2 text-xs text-slate-500">
                  180 Campaign</div>
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
          <div class="dark:border-darkmode-400 flex items-center border-b border-slate-200/60 px-5 py-5 sm:py-3">
            <h2 class="mr-auto text-base font-medium">General Statistics</h2>
            <div class="dropdown ml-auto sm:hidden">
              <a class="dropdown-toggle block h-5 w-5" href="javascript:;" aria-expanded="false"
                data-tw-toggle="dropdown">
                <i data-feather="more-horizontal" class="h-5 w-5 text-slate-500"></i>
              </a>
              <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                  <li>
                    <a href="javascript:;" class="dropdown-item">
                      <i data-feather="file" class="mr-2 h-4 w-4"></i> Download XML
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <button class="btn btn-outline-secondary hidden sm:flex">
              <i data-feather="file" class="mr-2 h-4 w-4"></i> Download XML
            </button>
          </div>
          <div class="grid grid-cols-1 gap-6 p-5 2xl:grid-cols-7">
            <div class="2xl:col-span-2">
              <div class="grid grid-cols-2 gap-6">
                <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
                  <div class="font-medium">Net Worth</div>
                  <div class="mt-1 flex items-center sm:mt-0">
                    <div class="mr-4 flex w-20">
                      USP: <span class="text-success ml-3 font-medium">+23%</span>
                    </div>
                    <div class="w-5/6 overflow-auto">
                      <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                    </div>
                  </div>
                </div>
                <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
                  <div class="font-medium">Sales</div>
                  <div class="mt-1 flex items-center sm:mt-0">
                    <div class="mr-4 flex w-20">
                      USP: <span class="text-danger ml-3 font-medium">-5%</span>
                    </div>
                    <div class="w-5/6 overflow-auto">
                      <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                    </div>
                  </div>
                </div>
                <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
                  <div class="font-medium">Profit</div>
                  <div class="mt-1 flex items-center sm:mt-0">
                    <div class="mr-4 flex w-20">
                      USP: <span class="text-danger ml-3 font-medium">-10%</span>
                    </div>
                    <div class="w-5/6 overflow-auto">
                      <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                    </div>
                  </div>
                </div>
                <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
                  <div class="font-medium">Products</div>
                  <div class="mt-1 flex items-center sm:mt-0">
                    <div class="mr-4 flex w-20">
                      USP: <span class="text-success ml-3 font-medium">+55%</span>
                    </div>
                    <div class="w-5/6 overflow-auto">
                      <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full 2xl:col-span-5">
              <div class="mt-8 flex justify-center">
                <div class="mr-5 flex items-center">
                  <div class="bg-primary mr-3 h-2 w-2 rounded-full"></div>
                  <span>Product Profit</span>
                </div>
                <div class="flex items-center">
                  <div class="mr-3 h-2 w-2 rounded-full bg-slate-300"></div>
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


  <div id="modal-import-matiere-examen-blanc" class="modal" data-tw-backdrop="static" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <x-icon name="x" class="h-8 w-8 text-slate-400" />
        </a>
        <div class="modal-header">
          <h2 class="mr-auto text-base font-medium">Ajouter des matieres pour l'examen</h2>
        </div>
        <div class="modal-body bg-slate-100">
          <livewire:evaluation.examen-blanc.matiere.import-matiere :examen="$examen" />
        </div>
        <div class="modal-footer bottom-0 w-full">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-danger mr-1 w-20">Fermer</button>
        </div>
      </div>
    </div>
  </div>

</section>

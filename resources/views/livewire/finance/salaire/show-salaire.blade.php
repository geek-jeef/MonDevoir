<section>
  <div class="grid grid-cols-12 gap-6 mt-8">
    <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
      <h2 class="intro-y text-lg font-medium mr-auto mt-2">Salaires</h2>
      <!-- BEGIN: Inbox Menu -->
      <div class="intro-y box bg-primary p-5 mt-6">
        <button type="button" class="btn text-slate-600 dark:text-slate-300 w-full bg-white dark:bg-darkmode-300 dark:border-darkmode-300 mt-1">
          <x-icon class="w-4 h-4 mr-2" name="trending-up" /> Type Salaire
        </button>
        <div class="border-t border-white/10 dark:border-darkmode-400 mt-6 pt-6 text-white">
          <a href="javascript:;" wire:click="$set('selected_type_salaire',null)" class="flex items-center px-3 py-2 rounded-md {{ ($selected_type_salaire == null || $selected_type_salaire == ''  ) ? 'bg-white/10 dark:bg-darkmode-700 font-medium' : '' }} ">
            <x-icon class="w-4 h-4 mr-2" name="trending-up" /> Toutes
          </a>
          @foreach($financeSettings->types_salaire as $types_salaire  )
          <a href="javascript:;" wire:click="$set('selected_type_salaire',`{{$types_salaire}}`)" class="flex items-center px-3 py-2 rounded-md {{ ($types_salaire == $selected_type_salaire) ? 'bg-white/10 dark:bg-darkmode-700 font-medium' : '' }} whitespace-nowrap truncate tooltip" title="{{$types_salaire}}">
            <x-icon class="w-4 h-4 mr-2" name="trending-up" /> {{$types_salaire}}
          </a>
          @endforeach
          
        </div>
        <div class="border-t border-white/10 dark:border-darkmode-400 mt-4 pt-4 text-white">
          <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#formulaire-gestion-liste-salaire" class="flex items-center px-3 py-2 truncate rounded-md bg-white/10 dark:bg-darkmode-700 font-medium">
            <x-icon class="w-4 h-4 mr-2" name="plus" /> Editer la Liste 
          </a>
        </div>
      </div>
      <!-- END: Inbox Menu -->
    </div>

    <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
      <!-- BEGIN: Inbox Filter -->
      <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
        <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
          <x-icon class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" name="search" />

          <input type="text" wire:model.debounce.1500ms="recherche" class="form-control w-full sm:w-64 box px-10" placeholder="Recherche">

          {{--
          recherche avancée
          <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
            <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" name="chevron-down" />

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
        <div class="w-full sm:w-auto flex">
          <a href="javascript:;" class="btn btn-outline-primary relative justify-start rounded-full pr-12 mr-2" data-tw-toggle="modal" data-tw-target="#formulaire-creation-salaire"> Enregistrer Une Salaire
            <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
              <x-icon name="plus" class="w-6 h-6" solid />
            </span>
          </a>
          <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
              <span class="w-5 h-5 flex items-center justify-center">
                <x-icon name="plus" class="w-4 h-4" />
              </span>
            </button>
            <div class="dropdown-menu w-40">
              <ul class="dropdown-content">
                <li>
                  <a href="javascript:;" class="dropdown-item">
                    <x-icon name="share" class="w-4 h-4 mr-2" /> Exporter
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="dropdown-item">
                    <x-icon name="printer" class="w-4 h-4 mr-2" /> Imprimer
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- END: Inbox Filter -->

      <!-- BEGIN: Inbox Content -->
      <div class="intro-y inbox box mt-5">
        <div class="p-5 flex flex-col-reverse sm:flex-row text-slate-500 border-b border-slate-200/60">
          <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-slate-200/60 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
            {{--<input class="form-check-input"  type="checkbox">
            <div class="dropdown ml-1" data-tw-placement="bottom-start">
              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-feather="chevron-down" class="w-5 h-5"></i>
              </a>
              <div class="dropdown-menu w-32">
                <ul class="dropdown-content">
                  <li>
                    <a href="javascript:;" class="dropdown-item">All</a>
                  </li>
                  <li>
                    <a href="javascript:;" class="dropdown-item">None</a>
                  </li>
                  <li>
                    <a href="javascript:;" class="dropdown-item">Read</a>
                  </li>
                  <li>
                    <a href="javascript:;" class="dropdown-item">Unread</a>
                  </li>
                  <li>
                    <a href="javascript:;" class="dropdown-item">Starred</a>
                  </li>
                  <li>
                    <a href="javascript:;" class="dropdown-item">Unstarred</a>
                  </li>
                </ul>
              </div>
            </div>
            --}}
            <a href="javascript:;" wire:click="$refresh" class="w-5 h-5 ml-5 flex items-center justify-center">
              <x-icon name="refresh" class="hover:animate-spin w-4 h-4" />
            </a>
            {{--<a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
              <i class="w-4 h-4" data-feather="more-horizontal"></i>
            </a>--}}
          </div>
          <div class="flex items-center sm:ml-auto">
            <div class="">{{ $salaires->links('components.pagination.custom-indicator') }}</div>
            {{--<a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
              <i class="w-4 h-4" data-feather="chevron-left"></i>
            </a>
            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
              <i class="w-4 h-4" data-feather="chevron-right"></i>
            </a>
            <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
              <i class="w-4 h-4" data-feather="settings"></i>
            </a>
            --}}
          </div>
        </div>
        <div class="overflow-x-auto sm:overflow-x-visible">
          @foreach ($salaires as $salaire)
            <div class="intro-y">
              <div class="inbox__item inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex px-5 py-3">
                  <div class="w-72 flex-none flex items-center mr-5">

                    <input class="form-check-input flex-none" type="checkbox" >
                    {{--<a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400">
                      <i class="w-4 h-4" data-feather="star"></i>
                    </a>
                    <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400">
                      <i class="w-4 h-4" data-feather="bookmark"></i>
                    </a>
                    --}}
                    <div class="w-6 h-6 flex-none image-fit relative ml-5">
                      <span class="w-6 h-6 absolute flex justify-center items-center bg-success text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                        <x-icon name="trending-up" class="w-4 h-4" solid />
                      </span>
                    </div>
                    <div class="inbox__item--sender truncate ml-3">{{ $salaire->type }}</div>
                  </div>
                  <div class="w-64 sm:w-auto truncate">
                    <span class="inbox__item--highlight font-bold mr-2"> {{ $salaire->montant }} FCFA </span>
                    <div> {{ $salaire->description }} </div>
                  </div>
                  <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">{{date('d/m/Y', strtotime($salaire->created_at))}}</div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-slate-500">
          {{ $salaires->links() }}
          <select wire:model="per_page" class="w-20 form-select box mt-3 sm:mt-0">
          @foreach([10,20,30,50,100] as $nb)
            <option {{ ($per_page == $nb )? 'selected' : ''}} >{{$nb}}</option>
          @endforeach
          </select>
          {{--<div>4.41 GB (25%) of 17 GB used Manage</div>
          <div class="sm:ml-auto mt-2 sm:mt-0">Last account activity: 36 minutes ago</div>--}}
        </div>
      </div>
      <!-- END: Inbox Content -->
    </div>
    
  </div>


  <div id="formulaire-gestion-liste-salaire" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-slate-100">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Liste Salaire</h2>
        </div>
        <div class="modal-body">
          <livewire:forms.salaire.create-salaire-type-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  <div id="formulaire-creation-salaire" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Enregistrer une Salaire</h2>
        </div>
        <div class="modal-body">
          <livewire:forms.salaire.create-salaire-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>
</section>
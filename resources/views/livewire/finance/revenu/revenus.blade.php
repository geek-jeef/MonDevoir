<section>
  <div class="grid grid-cols-12 gap-6 mt-8 print:shadow-none print:m-0">
    <div class="col-span-12 lg:col-span-3 2xl:col-span-2 print:hidden">
      <h2 class="intro-y text-lg font-medium mr-auto mt-2">Revenus</h2>
      <!-- BEGIN: Inbox Menu -->
      <div class="intro-y box bg-primary p-5 mt-6">
        <button type="button" class="btn text-slate-600 dark:text-slate-300 w-full bg-white dark:bg-darkmode-300 dark:border-darkmode-300 mt-1">
          <x-icon class="w-4 h-4 mr-2" name="trending-up" /> Type Revenu
        </button>
        <div class="border-t border-white/10 dark:border-darkmode-400 mt-6 pt-6 text-white">
          <a href="javascript:;" wire:click="$set('filtre_type',@js([]))" class="flex items-center px-3 py-2 rounded-md {{ ($filtre_type == null || $filtre_type == '' || $filtre_type == [] || in_array('Toutes', $filtre_type) ) ? 'bg-white/10 dark:bg-darkmode-700 font-medium' : '' }} ">
            <x-icon class="w-4 h-4 mr-2" name="trending-up" /> Toutes
          </a>
          @foreach($financeSettings->types_revenu as $types_revenu  )
          <a href="javascript:;" wire:click="$set('filtre_type',@js([$types_revenu]))" class="flex items-center px-3 py-2 rounded-md {{ in_array($types_revenu, $filtre_type) ? 'bg-white/10 dark:bg-darkmode-700 font-medium' : '' }} whitespace-nowrap truncate tooltip" title="{{$types_revenu}}">
            <x-icon class="w-4 h-4 mr-2" name="trending-up" /> {{$types_revenu}}
          </a>
          @endforeach
        </div>
        <div class="border-t border-white/10 dark:border-darkmode-400 mt-4 pt-4 text-white">
          <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#formulaire-gestion-liste-revenu" class="flex items-center px-3 py-2 truncate rounded-md bg-white/10 dark:bg-darkmode-700 font-medium">
            <x-icon class="w-4 h-4 mr-2" name="plus" /> Editer la Liste 
          </a>
        </div>
      </div>
      <!-- END: Inbox Menu -->
    </div>

    <div class="col-span-12 lg:col-span-9 2xl:col-span-10 print:col-span-12">
      <!-- BEGIN: Inbox Filter -->
      <div class="intro-y flex flex-col-reverse sm:flex-row items-center print:hidden">
        <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
          <x-icon class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" name="search" />
          <input type="text" wire:model.debounce.1500ms="recherche" class="form-control w-full sm:w-64 box px-10" placeholder="Recherche">
          <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
            <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" name="chevron-down" />
            <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
              <div class="dropdown-content">
                <form class="grid grid-cols-12 gap-4 gap-y-3 p-3" wire:submit.prevent="filtrer">
                  <div class="col-span-6">
                    <label  class="form-label text-xs">De (Date)</label>
                    <input type="date" wire:model.defer="filtre_date_from" class="form-control flex-1" >
                  </div>
                  <div class="col-span-6">
                    <label  class="form-label text-xs "> <span class="uppercase"> ?? </span> (Date)</label>
                    <input type="date" wire:model.defer="filtre_date_to" class="form-control flex-1" >
                  </div>
                  <div class="col-span-12">
                    {{--
                    <x-select
                      label="Choisir Un Membre du Personnel"
                      wire:model.defer="filtre_type"
                      placeholder="Membre du Personnel"
                      :async-data="route('api.personnels.index')"
                      :template="[
                          'name'   => 'user-option',
                          'config' => ['src' => 'profile_image']
                      ]"
                      option-label="nom_complet"
                      option-value="id"
                      option-description="phone"
                      multiselect
                    />--}}

                    <x-select label="Choisir des Types de Revenu" multiselect
                      wire:model.defer="filtre_type">
                      <x-select.option label="Toutes" value="Toutes" />
                      @foreach($financeSettings->types_revenu as $types_revenu  )
                        <x-select.option label="{{$types_revenu}}" value="{{$types_revenu}}" />
                      @endforeach
                    </x-select>
                  </div>

                  <div class="col-span-12">
                    <x-select label="Element ?? Afficher" wire:model.defer="filtre_annulation">
                      <x-select.option label="Tout" value="" />
                      <x-select.option label="Annul?? Seulement" value="Annul?? Seulement" />
                      <x-select.option label="Valide Uniquement" value="Valide Uniquement" />
                    </x-select>
                  </div>


                  
                  <div class="col-span-12 flex items-center mt-3">
                    <button type="submit" class="btn btn-primary w-32 ml-2">Filtrer</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-auto flex">
          <a href="javascript:;" class="btn btn-outline-primary relative justify-start rounded-full pr-12 mr-2" data-tw-toggle="modal" data-tw-target="#formulaire-creation-revenu"> Enregistrer Un Revenu
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
            <div class="dropdown-menu w-40 print:hidden">
              <ul class="dropdown-content print:hidden">
                
                <li>
                  <a href="javascript:;" onclick="window.print()" class="dropdown-item">
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
      <div class="intro-y inbox box mt-5 print:shadow-none print:m-0 print:p-5">
        <header class="grid grid-cols-12 gap-3 pt-4 px-4 hidden print:grid print:p-0">
          <div class="col-span-4  place-self-center">
            <div class="flex justify-center">
              <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-12 w-auto">
            </div>
          </div>
          <div class="col-span-8 flex-col justify-center">
              <div>
                <div class="flex justify-center">
                  <span class="whitespace-nowrap text-base font-semibold" data-nom_ecole >{{$parametres_generaux->nom_ecole}}</span>
                </div>
                <div class="text-center text-xs">
                  <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
                </div>
                <div class=" flex justify-center">
                  <div class="text-center text-xs">
                    <span class="whitespace-nowrap mx-2" data-postal >{{$parametres_generaux->poste}} - {{$parametres_generaux->ville}}</span>
                    <span class="whitespace-nowrap mx-2" data-phones > Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }} </span>
                    <span class="whitespace-nowrap mx-2" data-mail >Email: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a></span>
                  </div>
                </div>
              </div>
          </div>
        </header> 

        <div class="p-5 text-slate-500 border-b border-slate-200/60 print:p-0 print:py-2">
          <div class="flex flex-col-reverse sm:flex-row">
            <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-slate-200/60 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
              <a href="javascript:;" wire:click="$refresh" class="w-5 h-5 ml-5 flex items-center justify-center print:hidden">
                <x-icon name="refresh" class="hover:animate-spin w-4 h-4" />
              </a>
              <h2 class="mx-2 font-bold text-primary text-base">Liste des Revenus</h2>
            </div>
            <div class="flex items-center sm:ml-auto">
              <div class="text-center">
                <div class="text-center flex items-center justify-center">
                  {{$revenus->links('components.pagination.custom-indicator')}}
                </div>
                @if( ($filtre_date_from) || ($filtre_date_to) )
                  <div class="text-center">
                    @if($filtre_date_from)
                      <span class="mx-1">Du <span class="mx-1 font-bold text-primary">{{date('d/m/Y', strtotime($filtre_date_from))}}</span></span>
                    @endif
                    @if($filtre_date_to)
                      <span class="mx-1">Jusqu'au <span class="mx-1 font-bold text-primary">{{date('d/m/Y', strtotime($filtre_date_to))}}</span></span>
                    @endif
                  </div>
                @endif
              </div>
              <div></div>
            </div>
          </div>
          @if($filtre_type)
            {{--<div class="flex flex-col-reverse sm:flex-row py-1 gap-2">
              @foreach($filtre_type as $benef_id)
                @php
                  $benef = App\Models\Personnel::find($benef_id) ;
                @endphp
                @if($benef)
                <div class="flex border rounded-full pr-4 mr-2">
                  <div class="w-full flex flex-col lg:flex-row items-center">
                    <div class="w-10 h-10 image-fit">
                      <img alt="" class="rounded-full zoom-in" src="{{ route('avatar',[$benef->nom_complet])}}">
                    </div>
                    <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                      <a href="javascript:;" onclick=" var ask = window.confirm('Afficher le Profil de  {{ $benef->nom_complet}} ?');if (ask) { window.location.href = '{{route('personnel.show',[$benef->id])}}';};" class="font-medium">{{ $benef->nom_complet }}</a>
                      <div class="text-slate-500 text-xs mt-0.5">{{ $benef->designation }}</div>
                    </div>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
            --}}
          @endif
        </div>
        <div class="overflow-x-auto sm:overflow-x-visible print:overflow-x-visible print:m-0 print:p-0 print:w-full">
          @forelse ($revenus as $revenu)
            <div class="intro-y print:w-full" style="page-break-inside: avoid ;">
              <div class="inbox__item inline-block sm:block 
              @if($revenu->trashed()) 
                text-white bg-danger print:bg-white print:text-danger
              @else  
                text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 
              @endif
              border-b border-slate-200/60 dark:border-darkmode-400 print:w-full">
                <div class="flex px-5 py-3 print:w-full print:px-0">
                  <div class="w-72 flex-none flex items-center mr-5 print:w-[30%]">
                    <input class="form-check-input flex-none print:hidden" type="checkbox" >
                    <div class="w-10 h-10 flex-none image-fit relative ml-5">
                      <div class="w-10 h-10 absolute flex justify-center items-center text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                        <div class="w-10 h-10 image-fit zoom-in rounded-full bg-success flex justify-center items-center print:bg-white print:text-success print:border">
                          <x-icon name="trending-up" class="w-8 h-8" solid />
                        </div>
                      </div>
                    </div>
                    <div class="inbox__item--sender truncate ml-3">
                      <a href="javascript:;" class="font-medium whitespace-nowrap font-medium">{{ $revenu->type }}</a>
                      <div class="text-xs whitespace-nowrap mt-0.5"></div>
                    </div>
                  </div>
                  <div class="w-64 truncate items-center print:w-[40%]">
                    <span class="inbox__item--highlight font-bold mr-2"> {{ $revenu->montant }} FCFA </span>
                    <div> {{ $revenu->description }} </div>
                  </div>

                  <div class="inbox__item--time whitespace-nowrap items-center pl-10 print:w-[30%]">
                    {{date('d/m/Y', strtotime($revenu->created_at))}}
                    @if($revenu->trashed())
                    <div class="text-xs mt-0.5 hidden print:block">
                      Annul?? le  {{ date('d/m/Y ?? H:m:i', strtotime($revenu->deleted_at))}}
                    </div>
                    @endif
                  </div>

                  <div class="table-report__action w-56 ml-auto items-center print:hidden">
                    <div class="justify-center items-center">
                      @if($revenu->trashed())
                        <a class="flex items-center"
                          onclick="
                            window.$wireui.confirmDialog({
                              title: `Retablir l'enregistrement ?`,
                              description: `Revenu de {{ $revenu->montant }} FCFA pour {{ $revenu->type }} ?`,
                              icon: 'question',
                              accept: {
                                  label: 'Oui, retablir',
                                  execute: () => { @this.retablirRevenu({{ $revenu->id }}) ;  } ,
                              },
                              reject: {
                                label: 'Non',
                              }
                          }) ;" href="javascript:;">
                          <x-icon name="rewind" class="w-6 h-6 mr-1" /> Restaurer
                        </a>
                        <div class="text-xs whitespace-nowrap mt-0.5">
                          Annul?? le  {{ date('d/m/Y ?? H:m:i', strtotime($revenu->deleted_at))}}
                        </div>
                      @else
                        <a class="flex items-center text-danger" 
                          onclick="
                            window.$wireui.confirmDialog({
                              title: `Annuler l'enregistrement ?`,
                              description: `Revenu de {{ $revenu->montant }} FCFA pour {{ $revenu->type }} ?`,
                              icon: 'question',
                              accept: {
                                  label: 'Oui, annuler',
                                  execute: () => { @this.annulerRevenu({{ $revenu->id }}) ; } ,
                              },
                              reject: {
                                label: 'Non',
                              }
                          }) ;" href="javascript:;">
                          <x-icon name="trash" class="w-6 h-6 mr-1"/> Annuler
                        </a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <x-empty-state  />
          @endforelse
        </div>
        <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-slate-500 justify-between">
          {{ $revenus->links() }}
          <select wire:model="per_page" class="w-20 form-select box mt-3 sm:mt-0 print:hidden">
            @foreach([10,20,30,50,100,200,1000] as $nb)
              <option {{ ($per_page == $nb )? 'selected' : ''}} >{{$nb}}</option>
            @endforeach
          </select>
        </div>
        <div class="absolute right-0 top-0 p-2 font-bold text-xs hidden print:block"> {{ \Hp::annee()->nom_annee }} </div>
        <div class="absolute left-0 bottom-0 p-2 font-bold text-xs hidden print:block"> {{ $parametres_generaux->nom_ecole }} </div>
        <div class="absolute right-0 bottom-0 p-2 font-bold text-xs hidden print:block"> {{ now() }} </div>
      </div>
      <!-- END: Inbox Content -->
    </div>
  </div>
  <div id="formulaire-gestion-liste-revenu" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-slate-100">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Liste Revenu</h2>
        </div>
        <div class="modal-body">
          <livewire:forms.revenu.create-revenu-type-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  <div id="formulaire-creation-revenu" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Enregistrer un Revenu</h2>
        </div>
        <div class="modal-body">
          <livewire:forms.revenu.create-revenu-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>
</section>

<div>
  <div class="flex items-center justify-between mt-8">
    <h2 class="intro-y text-lg font-medium mr-auto">Bulletin de l'examen : <span class="text-primary">{{$examen->nom_examen}} ({{$examen->annee->nom_annee}})</span>
    </h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-3">
    <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
      <h2 class="intro-y text-lg font-medium mr-auto mt-2">Bulletins</h2>
      <div class="intro-y box bg-primary p-5 mt-6">

        <button type="button" class="btn text-slate-600 dark:text-slate-300 w-full bg-white dark:bg-darkmode-300 dark:border-darkmode-300 mt-1">
          <x-icon class="w-4 h-4 mr-2" name="pencil-alt" /> Classes
        </button>
        <div class="border-t border-white/10 dark:border-darkmode-400 mt-6 pt-6 text-white">
          @foreach($listeClasses as $niv)
            @if($niv->id == $classe->id)
              <a href="javascript:;" wire:click="$refresh" class="flex items-center hover:shadow-md hover:shadow-white zoom-in  px-3 py-2 rounded-md bg-white/10 dark:bg-darkmode-700 font-medium">
                <x-icon class="w-4 h-4 mr-2" name="sparkles" /> {{$classe->nom_classe}}
              </a>
            @else
              <a href="{{route('bulletin.examen',[$examen->id,$niv->id])}}" class="flex items-center hover:shadow-md hover:shadow-white zoom-in  px-3 py-2 rounded-md">
                <x-icon class="w-4 h-4 mr-2" name="sparkles" /> {{$niv->nom_classe}}
              </a>
            @endif
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
      <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
        <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
          <x-icon class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" name="search" />
          <input type="text" wire:model.debounce.1500ms="recherche" class="form-control w-full sm:w-64 box px-10" placeholder="Recherche">
          {{--<div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
            <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" name="chevron-down" />
            <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
              <div class="dropdown-content">
                <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                  <div class="col-span-6">
                    <label for="input-filter-1" class="form-label text-xs">File Name</label>
                    <input id="input-filter-1" type="text" class="form-control flex-1" placeholder="Type the file name">
                  </div>
                  <div class="col-span-6">
                    <label for="input-filter-2" class="form-label text-xs">Shared With</label>
                    <input id="input-filter-2" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                  </div>
                  <div class="col-span-6">
                    <label for="input-filter-3" class="form-label text-xs">Created At</label>
                    <input id="input-filter-3" type="text" class="form-control flex-1" placeholder="Important Meeting">
                  </div>
                  <div class="col-span-6">
                    <label for="input-filter-4" class="form-label text-xs">Size</label>
                    <select id="input-filter-4" class="form-select flex-1">
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
          </div>--}}
        </div>
        <div class="w-full sm:w-auto flex">
          <div class="dropdown mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center bg-primary text-white" aria-expanded="false" data-tw-toggle="dropdown">
              @if($selected_salle) 
                {{$selected_salle['nom_salle']}} 
              @else 
                Choisir un salle 
              @endif
              <x-icon name="chevron-down" class="w-4 h-4 ml-2" />
            </button>
            <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content bg-primary text-white">
                @foreach($classe->salles as $salle)
                <li>
                  <a href="javascript:;" wire:click="$set('selected_salle', {{$salle}})" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate">{{$salle->nom_salle}}</span>
                  </a>
                </li>
                @endforeach
                <li>
                  <a href="javascript:;" wire:click="$set('selected_salle', null)" class="dropdown-item">
                    <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                    <span class="truncate"> Afficher Tout </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          {{--<button class="btn btn-primary shadow-md mr-2">Upload New Files</button>--}}
          @if($this->dataClasseCorrect())
          <div class="dropdown">
            <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
               <x-icon  class="w-4 h-4" name="printer" />
            </button>
            <div class="dropdown-menu w-52">
              <ul class="dropdown-content">
                <li>
                  <a href="javascript:;" wire:click="printBulletinAll()" class="dropdown-item">
                    <x-icon name="document" class="w-4 h-4 mr-2" />
                    <span class="truncate ">Imprimer Tout</span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" wire:click="printBulletinSelection()" class="dropdown-item">
                    <x-icon name="document" class="w-4 h-4 mr-2" />
                    <span class="truncate ">Imprimer la Selection</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          @endif
        </div>
      </div>


      @if(!$this->dataClasseCorrect())
      <div class="alert alert-primary show flex justify-between  mt-3 mb-2" role="alert">
        <div class="flex items-center">
          <x-icon name="exclamation-circle" class="w-6 h-6 mr-2" /> De Nouvelles Données Sont Disponibles!
        </div>
        <div>
          <a href="javascript:;" wire:click="MAJ_Bulletin" class="btn border-white bg-white/10 hover:shadow-md hover:shadow-white zoom-in"> Générer Les Bulletins</a>
        </div>
      </div>
      @endif


      @if($bulletins)
      <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
          @php
            $uniqueTrack = uniqid('bulletion-selector-');
          @endphp
          @foreach ($bulletins as $bulletin)
            <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2" wire:key="bulletin-widget-{{$bulletin->id}}">
              <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                <div class="absolute left-0 top-0 mt-3 ml-3">
                  <input wire:key="{{$uniqueTrack.$bulletin->id}}" class="form-check-input border border-slate-500" onclick="@this.toggleBulletinSelection({{$bulletin->id}});" type="checkbox" {{ ($this->isSelected($bulletin->id)) ? 'checked' : '' }}>
                </div>
                {{--@if ($faker['files'][0]['type'] == 'Empty Folder')
                  <a href="javascript:;" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a>
                @elseif ($faker['files'][0]['type'] == 'Folder')
                  <a href="javascript:;" class="w-3/5 file__icon file__icon--directory mx-auto"></a>
                @elseif ($faker['files'][0]['type'] == 'Image')
                  
                @else
                  
                @endif
                <a href="javascript:;" class="w-3/5 file__icon file__icon--image mx-auto">
                  <div class="file__icon--image__preview image-fit"> 
                    <img alt="" src="{{ route('qr',[$bulletin->encoded_string]) }}">
                  </div>
                </a>
                
                                --}}

                <a href="javascript:;" class="w-3/5 file__icon file__icon--file mx-auto">
                  <div class="file__icon__file-name">PDF</div>
                </a>
                <a href="javascript:;" class="block font-medium mt-4 text-center truncate">{{$bulletin->eleve->nom_complet}}</a>
                <div class="text-slate-500 text-xs text-center mt-0.5">{{$bulletin->salle->nom_salle}}</div>
                <div class="absolute top-0 right-0 mr-2 mt-3 dropdown ml-auto">
                  <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                    <x-icon name="dots-vertical" class="w-5 h-5 text-slate-500" />
                  </a>
                  <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                      <li>
                        <a href="{{route('bulletin.show',[$bulletin->id])}}" class="dropdown-item">
                          <x-icon name="eye" class="w-4 h-4 mr-2" /> Afficher
                        </a>
                      </li>
                      {{--<li>
                        <a href="javascript:;" class="dropdown-item">
                          <x-icon name="printer" class="w-4 h-4 mr-2" /> Imprimer
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;" class="dropdown-item">
                          <x-icon name="download" class="w-4 h-4 mr-2" /> Télécharger
                        </a>
                      </li>
                      --}}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
      </div>
      <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center justify-between mt-8">
        <div class="flex gap-3">
          {{$bulletins->links()}}
        </div>
        <select wire:model="per_page" class="w-20 form-select box mt-3 sm:mt-0">
          @foreach([12,18,24,36,48,60,120] as $nb)
            <option {{ ($per_page == $nb )? 'selected' : ''}} >{{$nb}}</option>
          @endforeach
        </select>
      </div>
      @else
      <div class="mt-6">
        <x-empty-state message="Aucun Bulletin à Afficher" details="Générez les Bulletins si de Nouvelles Données sont Disponibles" />
      </div>
      @endif

      {{--<div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-6">
        <nav class="w-full sm:w-auto sm:mr-auto">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#">
                <x-icon class="w-4 h-4" name="chevron-double-left" />
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">
                <x-icon class="w-4 h-4" name="chevron-left" />
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">...</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">...</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">
                <x-icon class="w-4 h-4" name="chevron-right" />
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">
                <x-icon class="w-4 h-4" name="chevron-double-right" />
              </a>
            </li>
          </ul>
        </nav>
        <select class="w-20 form-select box mt-3 sm:mt-0">
          <option>10</option>
          <option>25</option>
          <option>35</option>
          <option>50</option>
        </select>
      </div>--}}
      <!-- END: Pagination -->
    </div>
  </div>
</div>
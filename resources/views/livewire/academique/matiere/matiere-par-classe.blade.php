<div wire:init="setLoadingState()">
  @if($readyToLoad)
    <div class="grid grid-cols-12 gap-6 print:m-0 print:p-0">
      <div class=" col-span-12 flex flex-wrap sm:flex-nowrap items-center print:hidden ">
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
          <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
            <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
          </button>
        </div>
        <div class="hidden md:block mx-auto text-slate-500">{{count($matieres)}} Matieres enregistées pour la classe de {{$classe->nom_court}}</div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0 flex gap-2 print:hidden">
          <a
          class="btn btn-outline-primary relative justify-start rounded-full pr-12 " 
          wire:click="$emitTo('forms.matiere.create-matiere-form', 'create-matiere-for-classe' , {{$classe->id}} )"> 
            Enregistrer Une Matiere
            <span class="hover:animate-ping w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
              <x-icon name="plus" class=" w-6 h-6" solid />
            </span>
          </a>
          <div class="dropdown print:hidden">
            <button class="dropdown-toggle btn btn-primary px-2 " aria-expanded="false" data-tw-toggle="dropdown">
              <span class="w-5 h-5 flex items-center justify-center">
               <x-icon class="w-4 h-4" name="share" /> 
              </span>
            </button>
            <div class="dropdown-menu w-40 print:hidden">
              <ul class="dropdown-content print:hidden">
                <li>
                  <a  onclick="window.print()" href="javascript:;" class="dropdown-item">
                    <x-icon name="printer" class="w-4 h-4 mr-2" /> Imprimer
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=" col-span-12 overflow-auto lg:overflow-visible print:overflow-visible print:m-0 print:p-4 print:w-full">
        @php
          $titre = "Liste des Matieres - {$classe->nom_academique} ";
        @endphp
        <x-print.page-header :titre="$titre" />        
        <table class="table table-report -mt-2 print:my-2 print:table-bordered print:table-striped print:border-spacing-0">
          <thead>
            <tr>
              <th class="text-center whitespace-nowrap">id</th>
              <th class="whitespace-nowrap">Nomination</th>
              <th class="text-center whitespace-nowrap">Code</th>
              <th class="text-center whitespace-nowrap">Coeficient</th>
              <th class="text-center whitespace-nowrap">Active</th>
              <th class="text-center whitespace-nowrap">Exclusion des Résultats</th>
              <th class="text-center whitespace-nowrap print:hidden ">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($matieres as $matiere)
              <tr class="print:shadow-none print:border-b" style="page-break-inside:avoid;">
                <td >{{ $matiere->id }}</td>
                <td >
                  <a href="javascript:;" class="flex">
                    <div class="self-center w-10 h-10 image-fit mr-2">
                      <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[ \Hp::avatar($matiere->nom_matiere_court)])}}" title="{{ $classe->nom_court}}" />
                    </div>
                    <div class="self-center ml-5 hover:text-primary hover:font-bold">
                      <div class="font-medium whitespace-nowrap hover:text-primary hover:font-bold">{{ $matiere->nom_matiere}}</div>
                      <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $matiere->nom_matiere_court}}</div>
                    </div>
                  </a>
                </td>
                <td class="text-center whitespace-nowrap" >{{ $matiere->code }}</td>
                <td class="text-center whitespace-nowrap" >{{ $matiere->coeficient }}</td>
                {{--
                  <td class="text-center whitespace-nowrap" >{{ $matiere->getType() }}</td>
                  <td class="whitespace-nowrap">
                    <div class="flex">
                      <div class="w-10 h-10 image-fit zoom-in mr-2">
                        <img alt="" data-action="zoom" class="tooltip rounded-full" src="{{ route('avatar',[$matiere->enseignant()]) }}" title="{{ $matiere->enseignant() }}"> 
                      </div>
                      <div class="whitespace-nowrap self-center">
                        {{$matiere->enseignant()}}
                      </div>
                    </div>
                  </td>
                --}}
                <td class="w-40">
                  <div class="flex items-center justify-center {{ $matiere->active ? 'text-success' : 'text-danger' }}">
                    <x-icon name="{{ $matiere->active ? 'check' : 'x' }}" class="w-4 h-4 mr-2" /> {{ $matiere->active ? 'Active' : 'Inactive' }}
                  </div>
                </td>
                <td class="w-40">
                  <div class="flex items-center justify-center {{ $matiere->exclure_des_resultats ? 'text-danger' : 'text-success' }}">
                    <x-icon name="{{ $matiere->exclure_des_resultats ? 'x' : 'check' }}" class="w-4 h-4 mr-2" /> {{ $matiere->exclure_des_resultats ? 'Oui' : 'Non' }}
                  </div>
                </td>
                <td class="table-report__action w-56 print:hidden ">
                  <div class="flex justify-center items-center">
                    <a class="flex items-center mr-3" href="javascript:;" wire:click="$emitTo('academique.matiere.show-matiere', 'show-matiere-id' , {{$matiere->id}} )">
                      <x-icon name="eye" class="w-4 h-4 mr-1" /> Afficher
                    </a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <x-print.page-footer />
      </div>
    </div>
  @else
    <x-loading />
  @endif
</div>
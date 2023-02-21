<div>
  <div class="grid grid-cols-12 gap-6 print:m-0 print:p-0">
    <div class=" col-span-12 flex flex-wrap sm:flex-nowrap items-center print:hidden ">
      <div class="font-bold text-lg whitespace-nowrap">Classe de : {{$classe->nom_court}} </div>
      <div class="hidden md:block mx-auto text-slate-500">{{count($salles)}} Salles enregistées</div>
      <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0 flex gap-2 print:hidden">
        <a class="btn btn-outline-primary relative justify-start rounded-full pr-12 " 
           wire:click="$emitTo('forms.section.create-salle-form', 'create-salle-for-classe' , {{$classe->id}} )"> 
          Enregistrer Une Salle
          <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
            <x-icon name="plus" class="w-6 h-6" solid />
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
        $titre = "Liste des Salles - {$classe->nom_academique} ";
      @endphp
      <x-print.page-header :titre="$titre" />
      <table class="table table-report -mt-2  print:my-2 print:table-bordered print:table-striped print:border-spacing-0">
        <thead>
          <tr>
            <th class="text-center whitespace-nowrap">id</th>
            <th class="whitespace-nowrap">Nomination</th>
            <th class="text-center whitespace-nowrap">Titulaire</th>
            <th class="text-center whitespace-nowrap">Effectif/ Capacité</th>
            <th class="text-center whitespace-nowrap">Active</th>
            <th class="text-center whitespace-nowrap print:hidden ">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($salles as $salle)
            <tr class=" print:shadow-none print:border-b" style="page-break-inside:avoid;">
              <td >{{ $salle->id }}</td>
              <td>
                <div class="flex">
                  <div class="w-10 h-10 image-fit zoom-in mr-2">
                    <img alt="" data-action="zoom" class="tooltip rounded-full" src="{{ route('avatar',[$salle->nom_salle]) }}" title="{{ $salle->nom_salle }}"> 
                  </div>
                  <div class="whitespace-nowrap self-center">
                    <a href="javascript:;" class="font-medium whitespace-nowrap hover:font-bold hover:text-primary">{{ $salle->nom_salle}} </a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5 hover:font-bold ">{{ $salle->info_salle }}</div>
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
              <td class="table-report__action w-56 print:hidden ">
                <div class="flex justify-center items-center">
                  <a class="flex items-center mr-3" href="javascript:;" 
                    onclick="
                      window.$wireui.confirmDialog({
                        title:`Confirmation`,
                        description: `Afficher La salle {{ $salle->nom_salle}}?` ,
                        icon: 'question',
                        accept: {
                            label: 'Oui, Afficher',
                            execute: () => {window.location.href = '{{route('academique.salle.show',[$salle->id])}}';}
                        },
                        reject: {
                            label: 'Non',
                        }
                      });"
                    >
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
</div>
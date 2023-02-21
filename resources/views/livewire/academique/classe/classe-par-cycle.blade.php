<div>
  <div class="grid grid-cols-12 gap-6 mt-5 print:m-0 print:p-0 print:shadow-none">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 print:hidden">
      <div class="hidden md:block mx-auto text-slate-500">{{count($classes)}} Classes enregistées</div>

      <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0 print:hidden">
        <div class="dropdown">
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
    <div class="col-span-12 overflow-auto lg:overflow-visible print:overflow-visible print:m-0 print:p-4 print:w-full">
      @php
        $titre = "Liste des Classes - {$cycle->nom_academique} ";
      @endphp
      <x-print.page-header :titre="$titre" />
      <table class="table table-report -mt-2 print:my-2 print:table-bordered print:table-striped print:border-spacing-0">
        <thead>
          <tr>
            <th class="whitespace-nowrap">Classes</th>
            <th class="text-center whitespace-nowrap">Nbre de Salle</th>
            <th class="text-center whitespace-nowrap">Effectif Cumulé</th>
            <th class="text-center whitespace-nowrap">Active</th>
            <th class="text-center whitespace-nowrap">Inscription</th>
            <th class="text-center whitespace-nowrap print:hidden">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($classes as $classe)
            <tr class="intro-x print:shadow-none print:border-b">
              <td class="mr-auto">
                <a href="{{ route('academique.classe.show',[$classe->id])}}" class="flex">
                  <div class="self-center w-10 h-10 image-fit mr-2">
                    <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$classe->nom_court])}}" title="{{ $classe->nom_court}}" />
                  </div>
                  <div class="self-center ml-5 hover:text-primary hover:font-bold">
                    <div class="font-medium whitespace-nowrap hover:text-primary hover:font-bold">{{ $classe->nom_classe}} @if($classe->serie) <span class="px-2 py-1 rounded-full bg-primary text-white mr-1">Serie: {{$classe->serie}}</span> @endif </div>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $classe->nom_court }}</div>
                  </div>
                </a>
              </td>

              <td class="text-center">{{$classe->salles->count()}}</td>
              <td class="text-center">{{$classe->effectif()}}</td>
              <td class="w-40">
                <div class="flex items-center justify-center {{ $classe->active ? 'text-success' : 'text-danger' }}">
                  <x-icon name="{{($classe->active)?'check':'x'}}" class="w-4 h-4 mr-2" /> {{ $classe->active ? 'active' : 'inactive' }}
                </div>
              </td>
              <td class="w-40">
                <div class="flex items-center justify-center {{ $classe->ouvert_pour_inscription ? 'text-success' : 'text-danger' }}">
                  <x-icon name="{{($classe->ouvert_pour_inscription)?'lock-open':'lock-closed'}}" class="w-4 h-4 mr-2" /> {{ $classe->ouvert_pour_inscription ? 'Ouvert' : 'fermé' }}
                </div>
              </td>
              <td class="table-report__action w-56 print:hidden">
                <div class="flex justify-center items-center">
                  <a class="flex items-center mr-3"  href="javascript:;"
                    onclick="
                      window.$wireui.confirmDialog({
                        title:`Confirmation`,
                        description: `Afficher La Classe {{ $classe->nom_classe}}  ?` ,
                        icon: 'question',
                        accept: {
                            label: 'Oui, Afficher',
                            execute: () => {window.location.href = '{{route('academique.classe.show',[$classe->id])}}';}
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
<section>
  <div class="intro-y flex items-center mt-8 print:hidden">
    <h2 class="text-lg font-medium mr-auto">Parametres des Payements</h2>
    <div class="flex items-center gap-2 sm:ml-auto mt-3 sm:mt-0">
      <a href="javascript:;" class="btn btn-outline-primary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-systeme-ecolage"> Enregistrer Un Systeme Pour L'Ecolage
        <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
        <x-icon name="plus" class="w-6 h-6" solid />
        </span>
      </a>
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

  <style type="text/css">
      @media print {
        #liste_table th, .table td {
            border-width: 1px;
            border-color : black;
        }
        #liste_table th {
            border-bottom-width: 2px;
            padding-left: 0.25rem;
            padding-right: 0.25rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-weight: unset;
        }
        #liste_table td {
            border-bottom-width: 1px;
            padding-left: 0.25rem;
            padding-right: 0.25rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }
        
        #liste_table {
          border-spacing: 0 0px;
          border-collapse: collapse;
        }
      }
  </style>
  
  <div class="grid grid-cols-12 gap-6 mt-5 print:m-0 print:p-0">
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible print:p-5">
      <x-print.page-header titre="Liste des Systemes de Payement" />
      <table id="liste_table" class="table table-report table-striped -mt-2 print:mt-2">
        <thead>
          <tr>
            <th class="whitespace-nowrap">#</th>
            <th class="whitespace-nowrap">Titre</th>
            <th class="text-center whitespace-nowrap">Ecolage</th>
            <th class="text-center whitespace-nowrap">Frais D'inscription</th>
            <th class="text-center whitespace-nowrap">Année</th>
            <th class="text-center whitespace-nowrap  print:hidden ">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($systemes as $systeme)
            <tr class="" style="page-break-inside: avoid;">
              <td>
                {{$loop->iteration}}
              </td>
              <td>
                <a href="javascript:;" class="font-medium whitespace-nowrap">{{ $systeme->titre}}</a>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $systeme->description }}</div>
              </td>
              <td class="text-center">{{ $systeme->montant }}</td>
              <td class="text-center">{{ $systeme->inscription }}</td>
              <td class="text-center">{{ $systeme->annee->nom_annee }}</td>

              <td class="table-report__action w-56  print:hidden ">
                <div class="flex justify-center items-center">
                  <a class="flex items-center text-primary" href="javascript:;" wire:click="$emitTo('payement.systeme.show-systeme', 'show-systeme-id' , {{$systeme->id}} )">
                    <x-icon name="eye" class="w-4 h-4 mr-1"  /> Afficher
                  </a>
                </div>
              </td>
            </tr>
          @empty
            <div class="text-center w-full">
              <x-empty-state message="Aucun Systeme de Payement Enregistré" />
            </div>
          @endforelse
        </tbody>
      </table>
      <x-print.page-footer />
    </div>
  </div>

  <div id="formulaire-creation-systeme-ecolage" class="modal modal-slide-over  print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Enregistrer Un Systeme de Payement</h2>
        </div>
        <div class="modal-body">
          <livewire:forms.payement.create-systeme-payement-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-show-systeme-ecolage" class="modal  print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <x-icon name="x" class="w-8 h-8 text-slate-400" />
        </a>
        <!--div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Matiere</h2>
        </div-->
        <div class="modal-body bg-slate-100">
          <livewire:payement.systeme.show-systeme />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>
</section>
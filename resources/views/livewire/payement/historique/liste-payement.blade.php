<section>

  <div class="intro-y flex flex-col sm:flex-row items-center justify-between mt-8 print:hidden">
    <h2 class="text-lg font-medium">Historique Payement</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>

  <div class="grid grid-cols-12 gap-6 mt-5 print:shadow-none print:m-0 print:p-0">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-end justify-between mt-2 print:hidden">
      <div class="mr-2">
        <livewire:widget.picker.cycle-classe-salle-picker eventToFired="TrierElevePourListePayement" wire:key="unique-selector-for-liste-payement" />
      </div>
      <div class="text-center">
        <div class="text-center flex items-center justify-center">
          {{$enregistrements->links('components.pagination.custom-indicator')}}
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
        @if(!$filtre_type)
        @elseif($filtre_type == 'inscription')
        <div class="text-center">
          Frais D'Inscription Uniquement
        </div>
        @elseif($filtre_type == 'ecolage')
        <div class="text-center">
          Frais D'Ecolage Uniquement
        </div>
        @elseif($filtre_type == 'annuler')
        <div class="text-center text-danger">
          Payement Annulé Uniquement
        </div>
        @endif
      </div>

      <div class="w-full flex sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0 print:hidden">
        <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0 print:hidden">
          <x-icon class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" name="search" />
          <input type="text" class="form-control w-full sm:w-64 box px-10" wire:model.debounce.1000ms="recherche" placeholder="Recherche...">
          <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center print:hidden" data-tw-placement="bottom-start">
            <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500 print:hidden" role="button" aria-expanded="false" data-tw-toggle="dropdown" name="chevron-down" />
            <div class="inbox-filter__dropdown-menu dropdown-menu pt-2 print:hidden">
              <div class="dropdown-content print:hidden">
                <form class="grid grid-cols-12 gap-4 gap-y-3 p-3" wire:submit.prevent="filtrer">
                  <div class="col-span-6">
                    <label  class="form-label text-xs">De (Date)</label>
                    <input type="date" wire:model.defer="filtre_date_from" class="form-control flex-1" >
                  </div>
                  <div class="col-span-6">
                    <label  class="form-label text-xs "> <span class="uppercase"> à </span> (Date)</label>
                    <input type="date" wire:model.defer="filtre_date_to" class="form-control flex-1" >
                  </div>

                  <div class="col-span-12">
                    <label  class="form-label text-xs">Type de Payement</label>
                    <select class="form-select flex-1" wire:model.defer="filtre_type">
                      <option value="">Tout</option>
                      <option value="inscription">Inscription Seulement</option>
                      <option value="ecolage">Ecolage Seulement</option>
                      <option value="annuler">Payement Annulé</option>
                    </select>
                  </div>
                  <div class="col-span-12 flex items-center mt-3">
                    <button type="submit" class="btn btn-primary w-32 ml-2">Filtrer</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="dropdown ml-2 print:hidden">
          <button class="dropdown-toggle btn px-2 btn-primary" aria-expanded="false" data-tw-toggle="dropdown">
            <span class="w-5 h-5 flex items-center justify-center">
              <x-icon class="w-4 h-4" name="plus" />
            </span>
          </button>
          <div class="dropdown-menu w-40 print:hidden">
            <ul class="dropdown-content bg-primary text-white print:hidden">
              <li>
                <a href="javascript:;" onclick="window.print();" class="dropdown-item">
                  <x-icon name="printer" class="w-4 h-4 mr-2" /> Imprimer
                </a>
              </li>
              <li>
                <a href="javascript:;" wire:click="exportExcel" class="dropdown-item">
                  <x-icon name="document-report" class="w-4 h-4 mr-2" /> Export to Excel
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- BEGIN: Data List -->
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
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible print:p-5">
      <x-print.page-header titre="Liste des Payements" />
      <div class="mt-2 hidden print:block">
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
        @if(!$filtre_type)
        @elseif($filtre_type == 'inscription')
        <div class="text-center">
          Frais D'Inscription Uniquement
        </div>
        @elseif($filtre_type == 'ecolage')
        <div class="text-center">
          Frais D'Ecolage Uniquement
        </div>
        @elseif($filtre_type == 'annuler')
        <div class="text-center text-danger">
          Payement Annulé Uniquement
        </div>
        @endif
      </div>
      <table id="liste_table" class="table table-report table-striped -mt-2 print:mt-2">
        <thead>
          <tr>
            <th class="whitespace-nowrap">ID</th>
            <th class="whitespace-nowrap">Eleve</th>
            <th class="text-center whitespace-nowrap">Payement</th>
            <th class="text-center whitespace-nowrap">Reste à Payer</th>
            <th class="text-center whitespace-nowrap">Compte Soldé</th>
            <th class="text-center whitespace-nowrap">Date</th>
            <th class="text-center whitespace-nowrap print:hidden ">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($enregistrements as $enregistrement)
            <tr class="print:shadow-none print:border-spacing-0 ">
              <td>
                <div class="font-medium whitespace-nowrap">{{substr(str_repeat(0, 4).$enregistrement->id,-4)}}</div>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">ref:{{ $enregistrement->ref_no }}</div>
              </td>
              <td>
                <div class="flex gap-2">
                  <div class="w-10 h-10 image-fit">
                    <img alt="" title="Sexe {{$enregistrement->eleve->genre}}" data-action="zoom" class="rounded-full" src="{{$enregistrement->eleve->image}}">
                  </div>
                  <div>
                    <a title="voir le Profil" target="_blank" class="font-medium whitespace-nowrap hover:underline hover:font-bold {{($enregistrement->eleve->genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}}" href="{{route('eleve.show',[$enregistrement->eleve->id])}}" >{{$enregistrement->eleve->nom_complet}}</a>
                    <div class="text-slate-500 text-xs whitespace-nowrap"> {{$enregistrement->eleve->inscription_courante->salle->nom_salle}} | {{$enregistrement->eleve->inscription_courante->salle->classe->cycle->nom_cycle}}</div>
                  </div>
                </div> 
              </td>

              <td>
                <div class="font-bold text-primary whitespace-nowrap">{{ $enregistrement->montant_paye }} FCFA</div>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"> {{ (($enregistrement->data['pour_inscription'])?? false) ? 'Pour Inscription' : 'Pour Ecolage' }} </div>
              </td>

              <td>
                <div class="font-bold text-primary whitespace-nowrap">{{ $enregistrement->balance }} FCFA</div>
              </td>

              <td class="">
                @if($enregistrement->complete)
                  <div class="flex items-center justify-center text-success">
                    <x-icon name="check" class="w-4 h-4 mr-2" /> Oui
                  </div>
                @else
                  <div class="flex items-center justify-center text-danger">
                    <x-icon name="x" class="w-4 h-4 mr-2" /> Non
                  </div>
                @endif
              </td>

              <td>
                <div class="font-bold whitespace-nowrap">{{ $enregistrement->date }}</div>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">à {{$enregistrement->heure}} </div>
              </td>

              <td class="table-report__action w-56 print:hidden">
                <div class="flex justify-center items-center">
                  @if(!$enregistrement->trashed())

                    @php
                      $recu = App\Models\Recu::where('enregistrement_payement_id',$enregistrement->id)->orderByDesc('created_at')->first();
                    @endphp
                    @if($recu)
                    <a title="Afficher le Recu" class="flex items-center mr-3 hover:underline hover:font-bold hover:text-primary" href="{{route('payement.recu.show',[$recu->id])}}" target="_blank">
                      <x-icon name="calculator" class="w-4 h-4 mr-1" /> Recu
                    </a>
                    @endif
                    <a class="flex items-center text-danger hover:underline hover:font-bold" href="javascript:;"
                      onclick="
                        window.$wireui.confirmDialog({
                          title:`Confirmation`,
                          description: `Supprimer le payement de {{ $enregistrement->montant_paye }} FCFA pour {{$enregistrement->eleve->nom_complet}} ?` ,
                          icon: 'warning',
                          accept: {
                              label: 'Oui, Supprimer',
                              execute: () => {@this.deleteEnregistrement({{$enregistrement->id}});}
                          },
                          reject: {
                              label: 'Non',
                          }
                        });"
                      >
                      <x-icon name="trash" class="w-4 h-4 mr-1" /> Annuler
                    </a>
                  @else
                    <a class="flex items-center text-success hover:underline hover:font-bold" href="javascript:;"
                      onclick="
                        window.$wireui.confirmDialog({
                          title:`Confirmation`,
                          description: `Restaurer le payement de {{ $enregistrement->montant_paye }} FCFA pour {{$enregistrement->eleve->nom_complet}} ?` ,
                          icon: 'warning',
                          accept: {
                              label: 'Oui, Restaurer',
                              execute: () => {@this.restoreEnregistrement({{$enregistrement->id}});}
                          },
                          reject: {
                              label: 'Non',
                          }
                        });">
                      <x-icon name="trash" class="w-4 h-4 mr-1" /> Retablir
                    </a>
                  @endif



                  

                  
                </div>
              </td>
            </tr>
          @empty
            empty
          @endforelse
        </tbody>
      </table>
      <div class="text-center flex items-center justify-center hidden print:flex mt-2">
          {{$enregistrements->links('components.pagination.custom-indicator')}}
      </div>
      <x-print.page-footer />
    </div>
    <!-- END: Data List -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center justify-between print:hidden">
      {{ $enregistrements->links() }}
      <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
        @foreach([20,40,75,100,200,300,500,1000] as $nb)
          <option {{ ($perPage == $nb )? 'selected' : ''}} >{{$nb}}</option>
        @endforeach
      </select>
    </div>
  </div>
</section>

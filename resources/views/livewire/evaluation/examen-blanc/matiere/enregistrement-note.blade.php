<section>
  <style wire:ignore type="text/css">
    @media print {
      .table th {
          border-bottom-width: 2px;
          padding-left: 0.25rem;
          padding-right: 0.25rem;
          padding-top: 0.25rem;
          padding-bottom: 0.25rem;
          font-weight: unset;
      }
      .table td {
          border-bottom-width: 1px;
          padding-left: 0.25rem;
          padding-right: 0.25rem;
          padding-top: 0.25rem;
          padding-bottom: 0.25rem;
      }
      
      .table th, .table td {
          border-color : black;
      }
    }
        
    .fileUploadInput {
      display: grid;
      /*grid-gap: 5px;*/
      position: relative;
      z-index: 1;
    }
    .fileUploadInput label {
        display: flex;
        align-items: center;
        transition: .4s ease;
        font-family: arial, sans-serif;
        font-size: .75em;
    }

    .fileUploadInput input {
        position: relative;
        z-index: 1;
        padding: 0 5px;
        width: 100%;
        height: 38px;
        border: 1px solid rgb(var(--color-primary)/var(--tw-bg-opacity));
        border-radius: 3px;
        font-family: arial, sans-serif;
        font-size: 1rem;
        font-weight: regular; 
      }
      .fileUploadInput input[type="file"] {
          padding: 0 5px; 
      }
      .fileUploadInput input[type="file"]::-webkit-file-upload-button {
            visibility: hidden;
            margin-left: 10px;
            padding: 0;
            height: 38px;
            width: 0px;
      }

      .fileUploadInput button {
        position: absolute;
        right: 0;
        bottom: 0;
        height: 38px;
        width: 38px;
        line-height: 0;
        user-select: none;
        color: white;
        background-color: rgb(var(--color-primary)/var(--tw-bg-opacity));
        border-radius: 0 3px 3px 0;
        font-family: arial, sans-serif;
        font-size: 1rem;
        font-weight: 800;
      }

      @-moz-document url-prefix() {
        .fileUploadInput button {
          display: none; 
        } 
      }

  </style>
  <div class="intro-y mt-8 flex items-center justify-between print:hidden">
    <h2 class="mr-auto text-lg font-medium">{{$titre}}</h2>
    <button wire:click="$refresh" class="text-primary ml-auto flex items-center">
      <x-icon name="refresh" class="mr-3 h-4 w-4 hover:animate-spin" /> Actualiser
    </button>
  </div>

  <div class="intro-y box mt-5 px-5 pt-5 print:hidden">
    <div class="dark:border-darkmode-400 -mx-5 flex flex-col border-b border-slate-200/60 pb-5 lg:flex-row">
      <div class="flex flex-1 items-center justify-center px-5 lg:justify-start">
        <div class="image-fit relative h-20 w-20 flex-none sm:h-24 sm:w-24 lg:h-32 lg:w-32">
          <img alt="" class="zoom-in" data-action="zoom" src="{{ route('avatar', $matiere->nom_matiere) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 truncate text-lg font-medium sm:w-40 sm:whitespace-normal">{{ $matiere->nom_matiere_court }}
          </div>
          <div class="text-slate-500">Matiere d'examen</div>
        </div>
      </div>
      <div
        class="dark:border-darkmode-400 mt-6 flex-1 border-l border-r border-t border-slate-200/60 px-5 pt-5 lg:mt-0 lg:border-t-0 lg:pt-0">
        <div class="text-center font-medium lg:mt-3 lg:text-left">Details</div>
        <div class="mt-4 flex flex-col items-center justify-center lg:items-start">
          <div class="flex items-center truncate sm:whitespace-normal">
            <x-icon name="book-open" class="mr-2 h-4 w-4" /> {{ $matiere->nom_matiere }}
          </div>
          <div class="mt-3 flex items-center truncate sm:whitespace-normal">
            <x-icon name="calculator" class="mr-2 h-4 w-4" />
            <span
              class="btn-sm @if (!$matiere->active) text-danger @else text-primary @endif tooltip mr-1 w-24 cursor-pointer font-bold"
              title="Coefficient {{ $matiere->nom_matiere }}"> Coefficient : {{ $matiere->coeficient }}
            </span>
          </div>
          
        </div>
      </div>
      <div
        class="dark:border-darkmode-400 mt-6 flex flex-1 items-center justify-around gap-6 border-t border-slate-200/60 px-5 pt-5 lg:mt-0 lg:border-0 lg:pt-0">
        <div class="w-20 rounded-md py-3 text-center">
          <div class="text-primary text-xl font-medium">{{$matiere->noteRempli()}}</div>
          <div class="text-slate-500">Notes Enregistrées</div>
        </div>
        <div class="w-20 rounded-md py-3 text-center">
          <div class="text-primary text-xl font-medium">{{ $examen->effectif() }}</div>
          <div class="text-slate-500">Eleves</div>
        </div>
      </div>
    </div>
    <ul class="nav nav-link-tabs flex-col justify-center text-center sm:flex-row lg:justify-start" role="tablist">
      <li id="notes-tab" class="nav-item" role="presentation">
        <a href="javascript:;" class="nav-link active flex items-center py-4" data-tw-target="#notes"
          aria-controls="notes" aria-selected="true" role="tab">
          <x-icon class="mr-2 h-4 w-4" name="pencil-alt"/> Notes
        </a>
      </li>
      <li id="Information-tab" class="nav-item" role="presentation">
        <a href="javascript:;" class="nav-link flex items-center py-4" data-tw-target="#Information"
          aria-controls="Information" aria-selected="false" role="tab">
          <x-icon class="mr-2 h-4 w-4" name="information-circle" /> Information
        </a>
    </ul>
  </div>
  <x-errors class="mt-3 print:hidden"/>
  <div class="tab-content mt-5 print:m-0 print:p-0 print:shadow-none">
    <div id="notes" class="tab-pane active print:m-0 print:border-0 print:p-0 print:shadow-none" role="tabpanel"
      aria-labelledby="notes-tab">
      <div>
        <div class="box p-5 mt-5 print:m-0 print:p-0 print:shadow-none">
          <div class="flex flex-col sm:flex-row justify-between gap-6 sm:items-end xl:items-start print:hidden">
            <div class="xl:flex self-end" >
              <h2 class="font-bold text-primary text-xl"> {{$matiere->nom_matiere}} </h2>
            </div>
            <div class="self-end flex">
              <form wire:submit.prevent="scopeEtablissement" class="grid grid-cols-12">
                <div class="col-span-10">
                  <x-select class="mb-0" placeholder="Etablissements à Afficher" wire:model="filtre_etablissement">
                    @foreach($examen->etablissements as $ecole)
                      <x-select.option label="{{$ecole->nom_etablissement_court}}" value="{{$ecole->id}}" description="{{$ecole->nom_etablissement}}" />
                    @endforeach
                    <x-select.option label="Toutes les Ecoles" value="0" description="Afficher des eleves de toutes les ecoles" />
                  </x-select>
                </div>
                <div class="col-span-2 self-end">
                  <button wire:target="filtre_etablissement" wire:loading.attr="disabled" class="btn btn-primary ml-2">OK</button>
                </div>
              </form>
            </div>
            <div class="self-end print:hidden">
              <form action="#" wire:submit.prevent="importFromExcel" class="flex gap-2">
                <div class="self-end flex">
                  <div class="mr-2">
                    <div class="fileUploadInput">
                      <label>✨ Choisir un fichier | XLSX, CSV, TSV, ODS | &lt; 4.00MB</label>
                      <input wire:model.defer="fichier_excel" class="btn btn-primary-soft" type="file"/>
                      <button>+</button>
                    </div>
                  </div>
                  <button wire:target="fichier_excel" wire:loading.attr="disabled" class="btn btn-primary self-end" type="submit" >
                    <x-icon name="upload" class="w-4 h-4 mr-2" /> Importer</button>
                </div>
              </form>
            </div>
            <div class="flex mt-5 gap-6 sm:mt-0 self-end print:hidden">
              <div class="dropdown self-end">
                <button class="dropdown-toggle btn btn-primary px-2 " aria-expanded="false" data-tw-toggle="dropdown">
                  <span class=" flex items-center justify-center">
                   <x-icon class="w-4 h-4 mr-2" name="share" /> Exporter
                  </span>
                </button>
                <div class="dropdown-menu w-40 print:hidden">
                  <ul class="dropdown-content print:hidden">
                    <li>
                      <a href="javascript:;" wire:click="exportExcel()" class="dropdown-item">
                        <x-icon name="document-report" class="w-4 h-4 mr-2" /> Excel
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="print:m-4 print:border-0">
            <x-print.page-header :titre="$titre" />
            <table class="mt-5 table table-striped table-bordered table-report--tabulator print:mt-3">
              <thead class="bg-primary text-white font-bold print:bg-slate-100 print:text-black">
                <tr>
                  <th class="whitespace-nowrap">ID</th>
                  <th class="text-center whitespace-nowrap">Ecole de Provenance</th>
                  <th class="text-center whitespace-nowrap">Nom Elève</th>
                  <th class="text-center whitespace-nowrap">Note</th>
                  <th class="text-center whitespace-nowrap hidden print:table-cell">Observations</th>
                </tr>
              </thead>
              <tbody class="font-medium">
                @foreach ($candidats as $eleve)
                  @php
                    $data = [ 'notable_id' => $matiere->id,
                              'notable_type' => $matiere::class,
                              'eleve_id' => $eleve->id,
                              'matiere_id' => $matiere->id,
                              'annee_academique_id' => $examen->annee_academique_id,
                              ] ;
                    $note = App\Models\ExamenBlanc\Note::firstOrCreate($data) ;
                  @endphp
                  <tr class="" style="page-break-inside: avoid;">
                    <td class="text-center">{{$eleve->id}}</td>
                    <td class="text-center">
                      <div>
                        <div class="font-medium whitespace-nowrap">{{$eleve->etablissement->nom_etablissement_court}} - {{$eleve->data['salle']??''}} </div>
                        <div class="text-slate-500 text-xs whitespace-nowrap">{{$eleve->etablissement->nom_etablissement}}</div>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="inline-flex gap-2">
                        <div class="font-medium whitespace-nowrap @if($eleve->genre == "Masculin")  text-blue-700 dark:text-blue-500  @else text-pink-700 dark:text-pink-500 @endif ">
                          {{$eleve->nom}}
                        </div>
                        <div class="text-slate-500 whitespace-nowrap">
                          {{$eleve->prenoms}}
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      <livewire:evaluation.note.widget-note :note="$note" wire:key="note-blanc-{{$note->id}}" />
                    </td>
                    <td class="text-center hidden print:table-cell"></td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            <div class="mt-6 flex gap-6 print:hidden">
              <div class="">
                <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
                  @foreach([20,40,60,100,140,200,250,500] as $nb)
                    <option {{ ($perPage == $nb )? 'selected' : ''}} >{{$nb}}</option>
                  @endforeach
                </select>
              </div>
              <div class="flex-grow">
                {{ $candidats->links() }}
              </div>
            </div>
            
            <x-print.page-footer />
          </div>
        </div>
      </div>
    </div>
    <div id="Information" class="tab-pane print:m-0 print:hidden print:p-0 print:shadow-none" role="tabpanel"
      aria-labelledby="Information-tab">

      <div class="intro-y box mt-5">
        <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
          <h2 class="font-medium text-base mr-auto"> Information</h2>

        </div>
        <div class="p-5">
          <form wire:submit.prevent="save" >
            <x-errors class="mt-3"/>
            <div class="mt-3">
              <x-input label="Nom de la Matiere" wire:model.defer="matiere.nom_matiere" required />
            </div>
            <div class="mt-3">
              <x-input label="Nom de la Matiere (court)" wire:model.defer="matiere.nom_matiere_court" required />
            </div>
            <div class="mt-3">
              <x-input label="Coefficient" wire:model.defer="matiere.coeficient" type="number" required />
            </div>
            <div class="mt-3">
              <button class="btn btn-primary" type="submit">Enregister</button>
            </div>
          </form>
        </div>
      </div>
    
      <div class="intro-y box mt-5 border-2 border-danger  dark:border-danger">
        <div class="flex items-center p-5 border-b border-danger/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto"> Supprimer la matiere</h2>
        </div>
        <div class="p-5">
            <div class="text-sm ">
              Supprimer la matiere et les notes Associées
            </div>
            <div class="mt-5">
                <button wire:loading.attr="disabled" class="btn btn-danger" 
                  onclick="
                    window.$wireui.confirmDialog({
                      title:`Confirmation`,
                      description: `Supprimer la Matiere : @js($matiere->nom_matiere) ?` ,
                      icon: 'warning',
                      accept: {
                          label: 'Oui, Supprimer',
                          execute: () => {  @this.deleteMatiere() ;}
                        },
                      reject: {
                        label: 'Non',
                      }
                    });"
                  >
                    Supprimer La Matiere
                </button>
            </div>
        </div>
      </div>
    </div>

  </div>
</section>

<div>
  <div class="box p-5 mt-5 print:m-0 print:p-0 print:shadow-none">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start print:hidden">
      <div class="xl:flex sm:mr-auto" >
        <h2 class="font-bold text-primary text-xl"> {{$notable->nom_notable}} </h2>
      </div>
      <div class="flex mt-5 sm:mt-0 print:hidden">
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
    </style>
    <div class="print:m-4 print:border-0">
      <x-print.page-header :titre="$titre" />
      <table class="mt-5 table table-striped table-bordered table-report--tabulator print:mt-3">
        <thead class="bg-primary text-white font-bold print:bg-slate-100 print:text-black">
          <tr>
            <th class="whitespace-nowrap">ID</th>
            <th class="text-center whitespace-nowrap">Nom Elève</th>
            <th class="text-center whitespace-nowrap">Note</th>
            <th class="text-center whitespace-nowrap hidden print:table-cell">Observations</th>
          </tr>
        </thead>
        <tbody class="font-medium">
          @foreach ($eleves as $eleve)
            @php
              $data = [ 'notable_id' => $notable->id,
                        'notable_type' => $notable::class,
                        'eleve_id' => $eleve->id,
                        'matiere_id' => $notable->matiere_id,
                        'annee_academique_id' => $notable->annee_academique_id,
                        ] ;
              $note = App\Models\Note::firstOrCreate($data) ;
            @endphp
            <tr class="" style="page-break-inside: avoid;">
              <td class="text-center">{{$eleve->id}}</td>
              <td class="text-center">{{ $eleve->nom_complet}}</td>
              <td class="text-center">
                <livewire:evaluation.note.widget-note :note="$note" wire:key="note-{{$note->id}}" />
              </td>
              <td class="text-center hidden print:table-cell"></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <x-print.page-footer />
    </div>
  </div>
</div>
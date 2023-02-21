<div class="print:p-4">
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
  <x-print.page-header />
  <div class="intro-y items-center mt-8 print:mt-2">
    <h2 class="text-lg font-medium mr-auto print:hidden">Resultat</h2>
    <div class="box p-2 print:shadow-none print:p-0">
      <table class="table table-report table-report--bordered table-bordered table-striped print:font-bold">
        <tbody>
          <tr>
            <td class="w-0 whitespace-nowrap">Examen</td>
            <td class="">{{$examen->nom_examen}} <span class="hidden print:inline mx-2">-  {{$classe->annee->nom_annee}} </span> </td>
          </tr>
          <tr>
            <td class="w-0 whitespace-nowrap">Classe</td>
            <td class="">{{$classe->nom_classe}} @if($selected_salle) | {{$selected_salle['nom_salle']}} @endif</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  @if(!$resultat_exist)
    <div class="alert alert-danger show mb-2 print:hidden" role="alert">
      <div class="flex items-center">
          <div class="font-medium text-lg">Calculer les moyennes en Cliquant sur le bouton ci-dessous</div>
          <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
            <x-icon name="x" class="w-4 h-4"/>
          </button>
      </div>
      <div class="mt-3">
        <a href="javascript:;" wire:click="calculResultatClasse" class="btn btn-outline-secondary text-white" > Faire le calcul des moyennes </a>
      </div>
    </div>
  @endif
  <div class="intro-y box tab-content mt-5 p-5 print:shadow-none print:m-0 print:p-0">
    <div class="grid grid-cols-12 gap-6">
      <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 print:hidden">
        <div class="hidden md:block mx-auto text-slate-500  print:hidden">  </div>
        <div class="w-full flex sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0 print:hidden">
          <button wire:click="$refresh" class="flex items-center text-primary  mr-2">
            <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
          </button>
          <div class="dropdown print:hidden mr-2" style="position: relative;">
            <button class="dropdown-toggle btn box flex items-center bg-primary text-white" aria-expanded="false" data-tw-toggle="dropdown">

              @if($selected_salle) 
                {{$selected_salle['nom_salle']}} 
              @else 
                Choisir un salle 
              @endif

              <x-icon name="chevron-down" class="w-4 h-4 ml-2" />

            </button>
            <div class="dropdown-menu w-40 print:hidden" id="" data-popper-placement="bottom-end">
              <ul class="dropdown-content bg-primary text-white print:hidden">
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
      <div class=".intro-y col-span-12 .overflow-auto .lg:overflow-visible">      
        <table class="table table-bordered table-striped -mt-2 print:mt-2">
          <thead>
            <tr>
              <th class="whitespace-nowrap">ID</th>
              <th class="whitespace-nowrap">Nom Eleve</th>
              <th class=" whitespace-nowrap {{$selected_salle? 'hidden' :''}} ">Salle</th>
              <th class="text-center whitespace-nowrap">Moyenne Sur 20 <span class="text-danger">*</span></th>

              <th class="text-center whitespace-nowrap {{$selected_salle? 'hidden' :''}} ">Rang (Classe)</th>
              <th class="text-center whitespace-nowrap">Rang (Salle)</th>
              <th class="text-center whitespace-nowrap">Observations</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($resultats as $resultat)
            <tr class="" style="page-break-inside: avoid;">
              <td class="text-center whitespace-nowrap">{{$resultat->id}}</td>
              <td class=" whitespace-nowrap">
                <a href="javascript:;" class="font-medium whitespace-nowrap">{{ $resultat->eleve->nom_complet}}</a>
              </td>
              <td class="whitespace-nowrap {{$selected_salle? 'hidden' :''}} ">{{$resultat->salle->nom_salle}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->moyenne}}</td>

              <td class="text-center whitespace-nowrap {{$selected_salle? 'hidden' :''}}">{{$resultat->rang_classe}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->rang_salle}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->observations}}</td>
              </td>
            </tr>
            @endforeach
                        
          </tbody>
        </table>
        <div class="text-small w-full text-center"> <span class="text-danger">*</span>  les moyennes présentées sont de moyennes pondérées </div>
      </div>
    </div>
  </div>
  @if($resultat_exist)
  <div class="intro-y box tab-content mt-5 p-5 print:shadow-none print:m-0 print:p-0">
    <div class="grid grid-cols-12 gap-6 print:gap-2 print:mt-5" style="page-break-inside: avoid;">
      <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <div class="md:block mx-auto text-slate-500 font-bold uppercase print:text-black "> Agrégat Des Moyennes </div>
      </div>
      <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
        <table class="table table-bordered table-striped -mt-2 print:mt-2 ">
          <thead>
            <tr>
              <th class="text-center whitespace-nowrap" style="border: none;"></th>
              <th class="text-center whitespace-nowrap" colspan="3">Agrégat</th>
            </tr>
            <tr>
              <th class="text-center whitespace-nowrap w-0">#</th>
              <th class="text-center whitespace-nowrap">Min</th>
              <th class="text-center whitespace-nowrap">Avg</th>
              <th class="text-center whitespace-nowrap">Max</th>
            </tr>
          </thead>
          <tbody>
            <tr class="font-medium" style="page-break-inside: avoid;">
              <td class="text-center whitespace-nowrap w-0">Classe de {{$aggregate_data->first()->classe->nom_classe}}</td>
              <td class="text-center whitespace-nowrap">{{$aggregate_data->min('moyenne')}}</td>
              <td class="text-center whitespace-nowrap">{{round( (float)$aggregate_data->avg('moyenne') , 2 ) }}</td>
              <td class="text-center whitespace-nowrap">{{$aggregate_data->max('moyenne')}}</td>
            </tr>
            @php
              $uniques_salles = $aggregate_data->unique('salle_id') ;
            @endphp
            @foreach ($uniques_salles as $unique_salle)
              @if($selected_salle)
                @if( ($unique_salle->salle_id != $selected_salle['id']  ) )
                  @continue
                @endif
              @endif
              <tr class="" style=".page-break-inside: avoid;">
                <td class="text-center whitespace-nowrap w-0">Salle de {{$unique_salle->salle->nom_salle}}</td>
                <td class="text-center whitespace-nowrap">{{$unique_salle->min_moyenne_salle}}</td>
                <td class="text-center whitespace-nowrap">{{$unique_salle->avg_moyenne_salle}}</td>
                <td class="text-center whitespace-nowrap">{{$unique_salle->max_moyenne_salle}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endif
  <x-print.page-footer />
  @if($resultat_exist)
    <div class="alert alert-primary show mb-2 mt-5 print:hidden" role="alert">
      <div class="flex items-center">
          <div class="font-medium text-lg">Mettre a jour les informations</div>
      </div>
      <div class="mt-3">
        <a href="javascript:;" wire:click="calculResultatClasse" class="btn btn-outline-secondary text-white" > Mise à Jour </a>
      </div>
    </div>
  @endif
  <div class="flex mt-5 print:hidden">
    <a href="{{route('resultat.examen',[$examen->id])}}" class="btn border-slate-300 dark:border-darkmode-400 text-slate-500 mr-5" >
      <x-icon name="chevron-left" class="w-4 h-4 mr-2" /> Retour 
    </a> 
    <a href="{{route('bulletin.examen',[$examen->id,$classe->id])}}" class="btn btn-primary shadow-md ml-auto"> Imprimer Les Bulletins <x-icon name="chevron-right" class="w-4 h-4 ml-2" /></a>
  </div>
</div>

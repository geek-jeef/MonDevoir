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
    <h2 class="text-lg font-medium mr-auto print:hidden">Resultat Par Matiere</h2>
    <div class="box p-2 print:shadow-none print:p-0">
      <table class="table table-report table-report--bordered table-bordered table-striped print:font-bold">
        <tbody>
          <tr>
            <td class="w-0 whitespace-nowrap font-bold">Examen</td>
            <td class="">{{$examen->nom_examen}} <span class="hidden print:inline"> -  {{$classe->annee->nom_annee}} </span> </td>
          </tr>
          <tr>
            <td class="w-0 whitespace-nowrap font-bold">Classe</td>
            <td class="">{{$classe->nom_classe}} @if($selected_salle) | {{$selected_salle['nom_salle']}} @endif</td>
          </tr>
          <tr>
            <td class="w-0 whitespace-nowrap font-bold">Matiere</td>
            <td class="">{{$matiere->nom_matiere}} (coef: {{$matiere->coeficient}}) </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  @if(!$resulat_exist)
    <div class="alert alert-danger show mb-2 print:hidden" role="alert">
      <div class="flex items-center">
          <div class="font-medium text-lg">Calculer les moyennes en Cliquant sur le bouton ci-dessous</div>
          <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
            <x-icon name="x" class="w-4 h-4"/>
          </button>
      </div>
      <div class="mt-3">
        <a href="javascript:;" wire:click="calculResultat" class="btn btn-outline-secondary text-white" > Faire le calcul des moyennes </a>
      </div>
    </div>
  @endif
  <div class="intro-y box tab-content mt-5 p-5 print:shadow-none print:m-0 print:p-0">
    <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 print:hidden">
        <div class="hidden md:block mx-auto text-slate-500 ">  </div>
        <div class="w-full flex sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
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


      <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
        <table class="table table-bordered table-striped -mt-2 print:mt-2">
          <thead>
            <tr>
              <th class="whitespace-nowrap" rowspan="2" >ID</th>
              <th class="whitespace-nowrap" rowspan="2" >Nom Eleve</th>
              <th class=" whitespace-nowrap {{$selected_salle? 'hidden' :''}} " rowspan="2" >Salle</th>

              @if($selected_salle)
                <th class="text-center" colspan="{{$nb_devoir_classe}}">Devoirs</th>
              @endif

              <th class="whitespace-nowrap " rowspan="2" >Moyenne Devoir<span class="text-danger">*</span></th>
              <th class="text-center" rowspan="2" >Note Composition</th>
              <th class="text-center whitespace-nowrap" rowspan="2" >Moyenne<span class="text-danger">*</span> </th>
              <th class="text-center whitespace-nowrap" rowspan="2" >Points</th>
              <th class="text-center whitespace-nowrap {{$selected_salle? 'hidden' :''}} " rowspan="2" >Rang (Classe)</th>
              <th class="text-center whitespace-nowrap" rowspan="2" >Rang (Salle)</th>
              <th class="text-center whitespace-nowrap" rowspan="2" >Observations</th>
            </tr>
            @if($selected_salle)
              <tr class="uppercase text-center ">
                @for( $b = 1 ; $b <= $nb_devoir_classe ; $b++)
                  <th class="whitespace-nowrap " >D{{$b}}</th>
                @endfor
              </tr>
            @endif

          </thead>
          <tbody>
            
            @foreach ($resultats as $resultat)
            <tr class="" style="page-break-inside: avoid;">
              <td class="text-center whitespace-nowrap">{{$resultat->id}}</td>
              <td class=" whitespace-nowrap">
                <a href="javascript:;" class="font-medium whitespace-nowrap">{{ $resultat->eleve->nom_complet}}</a>
              </td>
              <td class="text-center whitespace-nowrap {{$selected_salle? 'hidden' :''}}  ">{{$resultat->salle->nom_salle}}</td>


              @if($selected_salle)
                    @php
                      //get list note matiere
                        $info = [ 
                              'matiere_id' => $resultat->matiere_id,
                              'classe_id' => $resultat->classe_id,
                              'salle_id' => $resultat->salle_id,
                              'examen_id' => $resultat->examen_id,
                              'annee_academique_id' => $resultat->annee_academique_id,
                              'eleve_id' => $resultat->eleve_id,
                              'notable_type' => App\Models\Devoir::class
                          ] ;
                        $devoirs = App\Models\Notation::where($info)->get();
                      @endphp
                      @foreach($devoirs as $devoir)
                        <td class="text-center">{{ (isset($devoir)) ? $devoir->notable->note($resultat->eleve_id)->note : ""}}</td>
                      @endforeach
              @endif



              <td class="text-center whitespace-nowrap">{{$resultat->moyenne_devoir}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->note_composition}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->moyenne}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->points}}</td>

              <td class="text-center whitespace-nowrap {{$selected_salle? 'hidden' :''}} ">{{$resultat->rang_matiere_classe}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->rang_matiere_salle}}</td>
              <td class="text-center whitespace-nowrap">{{$resultat->observations}}</td>

              {{--
              <td class="text-center"> De <span class="text-primary" >{{ date('d/m/Y', strtotime($resultat->date_debut))  }}</span>  à <span class="text-primary" >{{date('d/m/Y', strtotime($resultat->date_fin))}}</span>  </td>
              <td class="text-center">
                {{ App\Models\CycleAcademique::find($resultat->salle_academique_id)->nom_salle }}
              </td>
              
              <td class="table-report__action w-56">
              <div class="flex justify-center items-center">
                <a class="flex items-center mr-3" href="javascript:;" onclick=" var ask = window.confirm('Afficher la Periode {{ $resultat->nom_resultat}} ?');if (ask) { window.location.href = '{{route('resultat.show',[$resultat->id])}}';};">
                <x-icon name="eye" class="w-4 h-4 mr-1" />
                 afficher
                </a>
              </div>
              --}}
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div class="text-small w-full text-center"> <span class="text-danger">*</span>  les moyennes présentées sont de moyennes pondérées </div>
      </div>
    </div>
  </div>
  <x-print.page-footer />
  @if($resulat_exist)
    <div class="alert alert-primary show mb-2 mt-5 print:hidden" role="alert">
      <div class="flex items-center">
          <div class="font-medium text-lg">Mettre a jour les informations</div>
      </div>
      <div class="mt-3">
        <a href="javascript:;" wire:click="calculResultat" class="btn btn-outline-secondary text-white" > Mise à Jour </a>
      </div>
    </div>
  @endif
  <div class="flex mt-5 print:hidden">
    <a href="{{route('resultat.examen',[$examen->id])}}" class="btn border-slate-300 dark:border-darkmode-400 text-slate-500 mr-5" >
      <x-icon name="chevron-left" class="w-4 h-4 mr-2" /> Retour 
    </a>
    <a href="{{route('resultat.examen.all',[$examen->id,$classe->id])}}" class="btn btn-primary shadow-md ml-auto"> Resultats Par Classe <x-icon name="chevron-right" class="w-4 h-4 ml-2" /></a>
  </div>
</div>
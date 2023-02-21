<section>
  @if($alone)
  <style type="text/css">
      .table th {
          border-bottom-width: 2px;
          padding-left: 0.125rem;
          padding-right: 0.125rem;
          padding-top: 0.125rem;
          padding-bottom: 0.125rem;
          font-weight: unset;
      }
      .table td {
          border-bottom-width: 1px;
          padding-left: 0.125rem;
          padding-right: 0.125rem;
          padding-top: 0.125rem;
          padding-bottom: 0.125rem;
      }
      .table th.border-r-2 , .table td.border-r-2 {
          border-right-width: 2px;
      }
      .module {
        background-image:url({{asset('devoir.svg')}});;
      }
      .table th, .table td {
          border-color : black;
      }
      .table[no-border] th ,
      .table[no-border] td {
          border-bottom-width: 0;
      }
  </style>
  <div class=" flex justify-center ">
  @endif
  @if($template == 'paysage')
      <div id="bulletin" class="module box p-4" style="width: 29.6cm; height: 20.9cm;">
        <div class="module-inside flex-col justify-around">
          <section class="grow-0 grid grid-cols-12 gap-1 mb-2">
            <div class=" col-span-3">
              @if($image)
              <div class="flex justify-center">
                <img src="{{$image->original_url}}" class="aspect-[2/3] h-[3.5cm] rounded" />
              </div>
              @else
              <div class="flex justify-center">
                <img src="{{asset('assets/logo/icon3.png')}}" data-logo class="w-40 text-center">
              </div>
              @endif
            </div>
            <div class=" col-span-9">
              <div class="grid grid-cols-12">
                <div class="flex-col justify-between col-span-8">
                  <div class="flex justify-center">
                    <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-[50px]">
                  </div>
                  <div class="text-center text-sm">{{$parametres_generaux->programme}}</div>
                  <div class="text-center text-sm">
                    E-mail: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a> | Tél: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }}
                  </div>
                  <div class="text-center text-sm">
                    {{ ($parametres_generaux->poste)? $parametres_generaux->poste." - " : '' }} <span class="capitalize">{{$parametres_generaux->ville}}</span class="uppercase">-<span>{{$parametres_generaux->pays}}</span></span>
                  </div>

                  <div class="text-center text-lg">
                    <span class="uppercase font-bold underline underline-offset-2 decoration-2">BULLETIN DE NOTE</span>
                  </div>
                </div>
                <div class="col-span-4">
                  <table class="table table-bordered">
                    <tbody class="uppercase font-bold">
                      <tr>
                        <td class="w-0 print:w-1">
                          <span class="whitespace-nowrap">Année scolaire</span>
                        </td>
                        <td>{{$bulletin->annee->nom_annee}}</td>
                      </tr>
                      <tr>
                        <td>periode</td>
                        <td>{{$bulletin->periode->nom_periode}}</td>
                      </tr>
                      <tr>
                        <td>classe</td>
                        <td>{{$bulletin->salle->nom_salle}}</td>
                      </tr>
                      <tr>
                        <td>effectif</td>
                        <td>{{$bulletin->salle->effectif()}}</td>
                      </tr>
                      <tr>
                        <td>date</td>
                        <td>{{ date('d/m/Y', strtotime($bulletin->created_at))}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="whitespace-nowrap text-xl font-bold">
                <span> <span class="uppercase mr-3">NOM DE L’ELEVE :</span> {{$bulletin->eleve->nom_complet}} </span>
              </div>
            </div>
          </section>
          <main class="grow">
            <div class="text-center font-bold uppercase">
              N.B: Il n'est délivré qu'un seul bulletin
            </div>                            
            <table class="table table-bordered border-[3px] border-primary">
              <thead class="font-bold">
                  <tr class="uppercase text-center ">
                      <th class=" whitespace-nowrap border-r-2">Matieres</th>
                      <th class=" " colspan="4" style="width:4cm;">Devoir de classe sur 20</th>
                      <th class=" ">moy <br> <span class="whitespace-nowrap" >classe/20<span class="text-danger">*</span></span>  </th>
                      <th class=" whitespace-nowrap">compo</th>
                      <th class="">moyenne<span class="text-danger">*</span></th>
                      <th class=" whitespace-nowrap">coef</th>
                      <th class=" ">Points</th>
                      <th class=" ">Rang</th>
                      <th class=" whitespace-nowrap">Professeurs</th>
                      <th class=" whitespace-nowrap">Observations</th>
                      <th class=" whitespace-nowrap">Signatures</th>
                  </tr>
              </thead>
              <tbody>

                @foreach($bulletin->resultat_matieres as  $resultat_matiere)
                  <tr>
                      <td class="border-r-2 font-bold"> {{$resultat_matiere->matiere->nom_matiere_court}} </td>

                      @php
                        $info = [ 
                              'matiere_id' => $resultat_matiere->matiere_id,
                              'classe_id' => $resultat_matiere->classe_id,
                              'salle_id' => $resultat_matiere->salle_id,
                              'examen_id' => $resultat_matiere->examen_id,
                              'annee_academique_id' => $resultat_matiere->annee_academique_id,
                              'eleve_id' => $bulletin->eleve_id,
                              'notable_type' => App\Models\Devoir::class
                          ] ;

                        $devoirs = App\Models\Notation::where($info)->get();
                      @endphp
                      @foreach([0,1] as $x)
                        <td style="width:1cm;">{{ (isset($devoirs[$x])) ? $devoirs[$x]->notable->note($bulletin->eleve_id)->note : "" }}</td>
                      @endforeach

                      {{--
                                  "matiere_id",
                        "classe_id",
                        "examen_id",
                        "annee_academique_id",
                        "salle_id",
                        "eleve_id",
                        "moyenne_devoir",
                        "note_composition",
                        "moyenne",
                        "points",
                        "observations",
                        "rang_matiere_classe",
                        "rang_matiere_salle",

                        MOYCLASSE/20 COMPO MOY SUR 20  COEF  NOTES DEFINITIVES RANG MATIERE  PROFESSEURS OBSERVATIONS  SIGNATURES
                      --}}

                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->moyenne_devoir}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->note_composition}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->moyenne}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->matiere->coeficient}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->points}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->rang_matiere_salle}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->matiere->enseignant_id}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->observations}}</td>
                      <td class="whitespace-nowrap text-center" ></td>
                  </tr>
                @endforeach

              </tbody>
              <tfoot class="border-[3px] border-primary font-bold">
                <tr>
                  <td rowspan="3" class="border-r-2 capitalize" >
                    <span class="whitespace-nowrap" >Rétards : ___ </span><br>
                    <span class="whitespace-nowrap" >absences : ___</span><br>
                    <span class="whitespace-nowrap" >avertissements : ___</span><br>
                    <span class="whitespace-nowrap" >exclusions: ___</span><br>
                  </td>
                  <td rowspan="3" colspan="4" class="capitalize text-center">
                    <div class="mb-1" >Félicitations</div>
                    <div class="mb-1" >Encouragements</div>
                    <div class="mb-1" >Tableau d‘honneur</div>
                  </td>

                  <td class=" " colspan="3">Totaux</td>
                  <td class=" ">{{$bulletin->resultat_examen->somme_coeficient}}</td>
                  <td class=" ">{{$bulletin->resultat_examen->points}}</td>
                  <td class=" "></td>
                  <td class="whitespace-nowrap capitalize" colspan="2">Moyenne la plus forte de la classe</td>
                  <td class=" ">{{$bulletin->resultat_examen->max_moyenne_salle}}</td>
                </tr>
                <tr>
                  <td class=" " colspan="2">Moyenne</td>
                  <td class=" " colspan="2">{{$bulletin->resultat_examen->moyenne}}</td>
                  <td class=" ">Rang</td>
                  <td class=" ">{{$bulletin->resultat_examen->rang_salle}}</td>
                  <td class="whitespace-nowrap capitalize" colspan="2">Moyenne la plus faible de la classe</td>
                  <td class=" ">{{$bulletin->resultat_examen->min_moyenne_salle}}</td>
                </tr>
                <tr>
                  <td class=" " colspan="2">Moyenne Annuelle</td>
                  <td class=" " colspan="2">--</td>
                  <td class=" ">Rang</td>
                  <td class=" ">--</td>
                  <td class="whitespace-nowrap capitalize" colspan="2">Moyenne générale de la classe</td>
                  <td class=" ">{{$bulletin->resultat_examen->avg_moyenne_salle}}</td>
                </tr>
                <tr class="border-[3px] border-primary ">
                  <td class="align-top text-center border-r-2" colspan="1">Titulaire</td>
                  <td class="align-top" colspan="12">
                    <div class="flex justify-around w-full" >
                      <div class="capitalize">
                      La direction
                      </div>
                      <div class="capitalize">
                        observations générales du conseil de classe
                      </div>
                    </div>
                    
                  </td>
                  <td class="flex justify-center " colspan="12">
                    <img src="{{route('qr',[ 'test' => $bulletin->encoded_string ])}}" class="w-24 h-24 p-0.5 text-center">
                  </td>
                </tr>
              </tfoot>
            </table> 
            <div class="text-small w-full text-right"><span class="text-danger">*</span>  les moyennes présentées sont des moyennes pondérées </div>
                   
          </main>
        </div>
      </div>
  @else

      <div id="bulletin" class="module box p-4" style="width: 20.9cm; height: 29.6cm;">
        <div  class="module-inside flex-col justify-around">
          <header class="grid grid-cols-12 gap-3">
            {{-- Part Ecole --}}
            <div class="col-span-4  ">
              <div class="flex justify-center mb-2">
                <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-12">
              </div>
              <div class="text-center text-sm">
                <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
              </div>
              @if($parametres_generaux->poste)
              <div class="text-center text-sm">
                <span class="" data-postal >{{$parametres_generaux->poste}} - {{$parametres_generaux->ville}}</span>
              </div>
              @endif
              <div class="text-center text-sm">
                <span class="" data-phones > {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }}</span>
              </div>
              <div class="text-center text-sm">
                <span class="" data-mail >
                  <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a>
                </span>
              </div>
              <div class="text-center text-sm">
                <span class="" data-adresse >
                  <span class="capitalize">{{$parametres_generaux->ville}}</span class="uppercase">-<span>{{$parametres_generaux->pays}}</span></span>
              </div>
              
              {{--<div class="text-center text-lg">
                <span class="uppercase font-bold underline underline-offset-2 decoration-2  ">BULLETIN DE NOTE</span>
              </div>--}}
            </div>
            {{-- Part Logo et QR --}}
            <div class="col-span-3 flex-col gap-2 justify-around">
              <div class="flex justify-center mb-2">
                <img src="{{asset('assets/logo/icon3.png')}}" data-logo class="w-24 text-center">
              </div>
              <div class="flex justify-center">
                <img src="{{route('qr',[ 'test' => $bulletin->encoded_string ])}}" class="w-24 h-24 text-center">
              </div>
            </div>
            {{-- Part Etat Ministrer et info --}}
            <div class="col-span-5   flex-col justify-around">
              <div class="">
                <div class="text-center text-base">
                  <span class="uppercase font-bold">république togolaise</span>
                </div>
                <div class="text-center text-base">
                  <span class="italic capitalize ">Travail-Liberté-Patrie</span>
                </div>
                <div class="text-center text-sm">
                  <span class="capitalize">Ministére des Enseignements primaire, secondaire, technique et de l'Artisanat</span>
                </div>
              </div>
              <div class="flex justify-center">
                  <table class="table table-bordered">
                    <tbody class="capitalize font-bold">
                      <tr>
                        <td class="w-0 print:w-1">
                          <span class="whitespace-nowrap mr-2">Année scolaire</span>
                        </td>
                        <td class="">{{$bulletin->annee->nom_annee}}</td>
                      </tr>
                      
                      <tr>
                        <td class="w-0 print:w-1">classe</td>
                        <td class="">{{$bulletin->salle->nom_salle}}</td>
                      </tr>
                      <tr>
                        <td class="w-0 print:w-1">effectif</td>
                        <td class="">{{$bulletin->salle->effectif()}}</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </header>
          <div class="w-full my-2 border-t border-slate-800/60 dark:border-darkmode-400 border-double"></div>
          <div class="whitespace-nowrap text-center">
            <div class="uppercase text-xl font-bold"> bulletin de notes  </div>
            <span class="text-base"> {{$bulletin->periode->nom_periode}} </span>
          </div>                                    
          <div class=" flex justify-between gap-2 border border-slate-800/60 ">
            <table class="table p-2 text-base ml-2" no-border>
              <tbody class="">
                <tr>
                  <td class="capitalize whitespace-nowrap w-0 print:w-1" >élève : </td>
                  <td class="font-bold whitespace-nowrap"> {{$bulletin->eleve->nom_complet}} </td>
                </tr>
                <tr>
                  <td class="capitalize whitespace-nowrap w-0 print:w-1" >sexe : </td>
                  <td class="font-bold whitespace-nowrap capitalize"> {{$bulletin->eleve->genre}} </td>
                </tr>
                <tr>
                  <td class="capitalize whitespace-nowrap w-0 print:w-1" >matricule : </td>
                  <td class="font-bold whitespace-nowrap"> {{$bulletin->eleve->id}} </td>
                </tr>
              </tbody>
            </table>
            @if($image)
            <div class="p-2">
              <img src="{{$image->original_url}}" class="aspect-[2/3] h-[3.5cm] rounded" />
            </div>
            @endif
          </div>

          <main class="mb-2">
            <div class="text-center font-bold uppercase text-xs">
              N.B: Il n'est délivré qu'un seul bulletin
            </div>                            
            <table class="table table-bordered border-[3px] border-primary text-xs">
              <thead class="font-bold">
                  <tr class="uppercase text-center ">
                      <th class=" whitespace-nowrap border-r-2" rowspan="2">Matieres</th>
                      <th class=" whitespace-nowrap" colspan="3">Devoir</th>
                      <th class=" whitespace-nowrap" rowspan="2">comp.</th>
                      <th class=" whitespace-nowrap" rowspan="2" >moy.<span class="text-danger">*</span></th>
                      <th class=" whitespace-nowrap" rowspan="2">coef.</th>
                      <th class=" whitespace-nowrap" rowspan="2">Total</th>
                      <th class=" whitespace-nowrap" rowspan="2">Rang</th>
                      <th class=" whitespace-nowrap" rowspan="2">Appréciations</th>
                      <th class=" whitespace-nowrap" rowspan="2">Professeurs</th>
                      <th class=" whitespace-nowrap" rowspan="2">Signatures</th>
                  </tr>
                  <tr class="uppercase text-center ">
                      <th class="whitespace-nowrap " style="width: 1cm;">D1</th>
                      <th class="whitespace-nowrap " style="width: 1cm;">D2</th>
                      <th class="whitespace-nowrap " style="width: 1cm;">Moy.<span class="text-danger">*</span></th>
                  </tr>
              </thead>
              <tbody>
                @foreach($bulletin->resultat_matieres as  $resultat_matiere)
                  <tr>
                      <td class="border-r-2 font-bold"> {{$resultat_matiere->matiere->nom_matiere_court}} </td>
                      @php
                      //get list note matiere
                        $info = [ 
                              'matiere_id' => $resultat_matiere->matiere_id,
                              'classe_id' => $resultat_matiere->classe_id,
                              'salle_id' => $resultat_matiere->salle_id,
                              'examen_id' => $resultat_matiere->examen_id,
                              'annee_academique_id' => $resultat_matiere->annee_academique_id,
                              'eleve_id' => $bulletin->eleve_id,
                              'notable_type' => App\Models\Devoir::class
                          ] ;

                        $devoirs = App\Models\Notation::where($info)->get();
                        $prof_id = $resultat_matiere->enseignantSalle();
                        $prof = "" ;
                        if($prof_id){
                          $prof = App\Models\Personnel::find($prof_id)->nom;
                        }
                      @endphp
                      @foreach([0,1] as $x)
                        <td style="width: 1cm;">{{ (isset($devoirs[$x])) ? $devoirs[$x]->notable->note($bulletin->eleve_id)->note : "" }}</td>
                      @endforeach
                      <td class="whitespace-nowrap text-center" style="width: 1cm;" >{{$resultat_matiere->moyenne_devoir}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->note_composition}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->moyenne}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->matiere->coeficient}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->points}}</td>
                      <td class="whitespace-nowrap text-center" >{{$resultat_matiere->rang_matiere_salle}}</td>
                      <td class="whitespace-nowrap text-center truncate" >{{$resultat_matiere->observations}}</td>




                      <td class="whitespace-nowrap text-center uppercase" >{{$prof}}</td>
                      <td class="whitespace-nowrap text-center" ></td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot class="border-[3px] border-primary font-bold">
                <tr>
                  <td class="text-right " colspan="6">Totaux</td>
                  <td class="text-center ">{{$bulletin->resultat_examen->somme_coeficient}}</td>
                  <td class="text-center ">{{$bulletin->resultat_examen->points}}</td>
                  <td class="text-center ">{{$bulletin->resultat_examen->rang_salle}}</td>
                  <td class="text-center"colspan="3"></td>
                 </tr>
              </tfoot>
            </table>
            <div class="text-small w-full text-right"><span class="text-danger">*</span>  les moyennes présentées sont des moyennes pondérées </div>
                   
          </main>

          <section class="grid grid-cols-12 gap-3">
            {{-- Aggregat et historique --}}
            <div class="col-span-4  ">
              {{-- table aggregat --}}
              <table class="table table-bordered mb-2">
                <body>
                  <tr>
                    <td class="whitespace-nowrap capitalize w-0 print:w-1" colspan="2">plus forte moyenne</td>
                    <td class=" ">{{$bulletin->resultat_examen->max_moyenne_salle}}</td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap capitalize w-0 print:w-1" colspan="2">plus faible moyenne</td>
                    <td class=" ">{{$bulletin->resultat_examen->min_moyenne_salle}}</td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap capitalize w-0 print:w-1" colspan="2">Moyenne de la classe</td>
                    <td class=" ">{{$bulletin->resultat_examen->avg_moyenne_salle}}</td>
                  </tr>
                </body>
              </table>
            </div>
            <div class="col-span-4  ">
              <div class="mb-4">
                <div class="text-center font-bold" >Moyenne</div>
                <div class="text-center">
                  <div class=" text-center ">
                    <button class="btn btn-sm btn-rounded-secondary w-28 mr-1 mb-2 font-bold text-base whitespace-nowrap">{{$bulletin->resultat_examen->moyenne}} / 20</button>
                  </div>
                  <div class="font-bold mb-2 capitalize"> {{Hp::nombreEnLettre($bulletin->resultat_examen->moyenne)}} </div>
                  <div class="font-bold mb-2"> {{$bulletin->resultat_examen->rang_salle}}  sur {{$bulletin->salle->effectif()}} </div>
                  <div class="font-bold mb-2 capitalize"> Mention : {{$bulletin->resultat_examen->observations}} </div>

                  <div class="font-bold capitalize mt-6"> Observations ou décisions</div>

                </div>
              </div>
            </div>

            <div class="col-span-4  ">
              <table class="table table-bordered mb-2">
                <body>
                  <tr>
                    <td class="capitalize font-bold" style="padding: 8px;" >
                      <span class="whitespace-nowrap" >Retards : ____________ </span><br>
                      <span class="whitespace-nowrap" >absences : ____________</span><br>
                      <span class="whitespace-nowrap" >avertissements : ____________</span><br>
                      <span class="whitespace-nowrap" >exclusions: ____________</span><br>
                    </td>
                  </tr>
                  <tr>
                    <td class="capitalize font-bold" style="padding: 8px;">
                      <div class="mb-2" >Félicitations</div>
                      <div class="mb-2" >Encouragements</div>
                      <div class="mb-2" >Tableau d‘honneur</div>
                    </td>
                  </tr>
                  
                </body>
              </table>
            </div>
          </section>
          <section class="flex justify-around mt-2">
            <div class="text-center">
              <div class="font-bold capitalize">prof. titulaire</div>
              <div class="capitalize">{{$bulletin->salle->titulaire()}}</div>

            </div>
            <div class="text-center">
              <div class="font-bold capitalize"> {{($bulletin->periode->cycle->directeur->genre == "Feminin")? 'Directrice' : 'Directeur' }}</div>
              <div class="capitalize">{{$bulletin->periode->cycle->directeur->nom_complet}}</div>
            </div>
          </section>  
        </div>
      </div>
  @endif
  @if($alone)
  </div>
  @endif

</section>

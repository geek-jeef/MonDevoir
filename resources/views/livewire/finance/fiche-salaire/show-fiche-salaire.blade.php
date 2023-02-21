<section>
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

      .table.table-striped tr:nth-of-type(odd) td {
        background-color: rgb(var(--color-slate-400) / 0.1);
      }
    
  </style>

  <div class="flex justify-center print:m-0 print:p-0">
    <div id="PageFichePaye" class="intro-y module box overflow-hidden mt-5 p-4 print:m-0" style="width: 20.9cm; height: 29.69cm;">
      <div  class=".module-inside flex-col justify-around">
        <header class="grid grid-cols-12 gap-3">
          <div class="col-span-3  place-self-center">
            <div class="flex justify-center">
              <img src="{{asset('assets/logo/icon3.png')}}" data-logo >
            </div>
          </div>
          <div class="col-span-9 flex-col justify-center">
              <div>
                <div class="flex justify-center mb-2">
                  <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-10">
                </div>
                <div class="text-center text-sm">
                  <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
                </div>
                <div class="flex">
                  <div class="text-center text-sm">
                    <span class="whitespace-nowrap mx-2" data-postal >{{$parametres_generaux->poste}} {{$parametres_generaux->ville}} - {{$parametres_generaux->pays}} </span>
                    <span class="whitespace-nowrap mx-2" data-phones > Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }}</span>
                    <span class="whitespace-nowrap mx-2" data-mail >Email: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a></span>
                  </div>
                </div>
              </div>
          </div>
        </header>

        <div class="w-full my-2 border-t border-slate-800/60 dark:border-darkmode-400 border-double"></div>
        <div class="whitespace-nowrap text-center">
          <div class="uppercase underline text-xl font-bold whitespace-nowrap decoration-1 decoration-double underline-offset-4"> BULLETIN DE PAIE  </div>
        </div>
        <div class="my-2">
          <div class="flex justify-between border border-2 border-primary">
            <div class="min-w-[25%] p-1 whitespace-nowrap">
              <span class="w-0 print:w-1">Periode:</span>
              <span class="whitespace-nowrap min-w-[15%]" > 
              {{ (($periode['debut']??false))? date('d/m/Y', strtotime($periode['debut'])) : '' }}
              {{ (($periode['fin']??false))? " Au ".date('d/m/Y', strtotime($periode['fin'])) : '' }}
            </span>
            </div>
            <div class="min-w-[25%] p-1 whitespace-nowrap border-l border-1 border-primary">
              <span class="w-0 print:w-1">Payement:  </span>
              <span class="whitespace-nowrap" ></span>
            </div>
            <div class="min-w-[25%] p-1 whitespace-nowrap border-l border-1 border-primary">
              <span class="w-0 print:w-1">Virement: </span>
              <span class="whitespace-nowrap" ></span>
            </div>
          </div>
        </div>


        <div class="flex justify-between gap-3 my-2" >
          <div>
            <div class="border border-1 border-primary p-2" id="employeur">
              <div class="p-0.5 text-lg font-medium text-primary ">{{$parametres_generaux->nom_ecole}}</div>
              <div class="text-base text-slate-500 capitalize">N° employeur: {{$parametres_finance->id_employeur}}</div>
              <div class="mt-1">Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }}</div>
              <div class="mt-1 capitalize">
                <span class="capitalize">{{$parametres_generaux->ville}}</span>
                -
                <span  class="uppercase">{{$parametres_generaux->pays}}</span>
              </div>
              <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 mt-1"></div>
              <div class="mt-1 text-xs italic font-medium capitalize">CCN: Convention Collective Du Travail</div>
            </div>
          </div>
          <div class="min-w-[40%]">
            <div class="border border-1 border-primary mt-5 p-2 " id="employe">
              <div class=" whitespace-nowrap">
                <span class=" text-base text-slate-500 capitalize">Nom :</span>
                <span class="font-bold"> {{$fiche->beneficiaire->nom}} </span>
              </div>
              <div class=" whitespace-nowrap">
                <span class=" text-base text-slate-500 capitalize">Prenoms :</span>
                <span class="font-bold">{{$fiche->beneficiaire->prenoms}}</span>
              </div>
              <div class=" whitespace-nowrap">
                <span class=" text-base text-slate-500 capitalize">Matricule :</span>
                <span class="font-bold">{{substr(str_repeat(0, 4).$fiche->beneficiaire->id,-4)}}</span>
              </div>
              <div class=" whitespace-nowrap">
                <span class=" text-base text-slate-500 capitalize">N° CNSS :</span>
                <span class="font-bold"></span>
              </div>
              <div class=" whitespace-nowrap">
                <span class=" text-base text-slate-500 capitalize">Emploi occupé :</span>
                <span class="font-bold">{{$fiche->beneficiaire->designation}}</span>
              </div>

              <div class=" whitespace-nowrap">
                <span class=" text-base text-slate-500 capitalize">Ancienneté :</span>
                <span class="font-bold"></span>
              </div>
            </div>
          </div>
        </div>

        <main>
          <table class="table table-bordered table-striped border-[2px] border-primary">
            <thead class="text-center font-semibold whitespace-nowrap border-primary">
              <tr class="border-primary">
                <th rowspan="2" >
                  N°
                </th>
                <th rowspan="2">
                  Designation
                </th>
                <th rowspan="2">
                  Nombre
                </th>
                <th rowspan="2">
                  base
                </th>
                <th colspan="3">
                  Part salariale
                </th>
                <th colspan="3">
                  Part Patronale
                </th>
              </tr>
              <tr class="border-primary">
                <th>Taux</th>
                <th>Gain</th>
                <th>Retenue</th>
                <th>Taux</th>
                <th>Retenue</th>
                <th>Retenue Tot.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> 01</td>
                <td> Salaire de Base</td>
                <td> </td>
                <td> {{$fiche->payement->montant}} </td>
                <td rowspan="17" class="text-center"> 4%</td>
                <td > </td>
                <td> </td>
                <td rowspan="17" class="text-center">17.50% </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td> 02</td>
                <td> Prime </td>
                <td> </td>
                <td> </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td> </td>
                <!--td rowspan="19">17.50% </td-->
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td> 03</td>
                <td> Total Brute</td>
                <td> </td>
                <td> {{$fiche->payement->montant}} </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td> </td>
                <!--td rowspan="19">17.50% </td-->
                <td></td>
                <td></td>
              </tr>
              <tr class="mt-1">
                <td> 04</td>
                <td> Securite Sociale CNSS</td>
                <td> </td>
                <td>  </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td> {{( ((int) $fiche->payement->montant) * 0.04 )}}  </td>
                <!--td rowspan="19">17.50% </td-->
                <td> {{( ((int) $fiche->payement->montant) * 0.175 )}}  </td>
                <td> {{( ((int) $fiche->payement->montant) * 0.215 )}} </td>
              </tr>
              <tr>
                <td> 05</td>
                <td> IRPP </td>
                <td> </td>
                <td>  </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td>  </td>
                <!--td rowspan="19">17.50% </td-->
                <td>  </td>
                <td> </td>
              </tr>
              <tr>
                <td> 06</td>
                <td> TCS </td>
                <td> </td>
                <td>  </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td>  </td>
                <!--td rowspan="19">17.50% </td-->
                <td>  </td>
                <td> </td>
              </tr>
              <tr>
                <td> 07</td>
                <td> Total cotisations</td>
                <td> </td>
                <td> </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td> </td>
                <!--td rowspan="19">17.50% </td-->
                <td> </td>
                <td> </td>
              </tr>
              <tr class="mt-1">
                <td> 08</td>
                <td> Indemnité </td>
                <td> </td>
                <td> </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td> </td>
                <!--td rowspan="19">17.50% </td-->
                <td> </td>
                <td> </td>
              </tr>
              <tr>
                <td> 09 </td>
                <td> Assurance </td>
                <td> </td>
                <td> </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td> </td>
                <!--td rowspan="19">17.50% </td-->
                <td> </td>
                <td> </td>
              </tr>
              <tr>
                <td> 10 </td>
                <td> Rembousement prêts </td>
                <td> </td>
                <td> </td>
                <!--td rowspan="19"> 4%</td-->
                <td > </td>
                <td> </td>
                <!--td rowspan="19">17.50% </td-->
                <td> </td>
                <td> </td>
              </tr>

            </tbody>

            <tfoot>

              <tr class="text-center font-semibold " >
                <th >

                </th>
                <th >
                  Salaire Brut
                </th>
                <th >
                  Net impos.
                </th>
                <th >
                  Charge Salariale
                </th>
                <th >
                  Charge Patron.
                </th>
                <th >
                  Heure Sup.
                </th>
                <th colspan="2">
                  Avantage en Nature
                </th>
                <th colspan="2">NET A PAYER</th>
              </tr>

              <tr>
                <td> Cumuls</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td colspan="2"> </td>
                <td colspan="2" rowspan="2" class="font-bold whitespace-nowrap bg-primary/10 text-center"> {{$fiche->payement->montant}} FCFA</td>
              </tr>
              <tr>
                <td> Periode</td>
                <td> {{$fiche->payement->montant}} </td>
                <td> {{( ((int) $fiche->payement->montant) * 0.96 )}} </td>
                <td> {{( ((int) $fiche->payement->montant) * 0.04 )}}  </td>
                <td> {{( ((int) $fiche->payement->montant) * 0.175 )}}  </td>
                <td> 0 </td>
                <td colspan="2"> 0 </td>
                <!--td rowspan="2"> {{$fiche->payement->montant}} </td-->
              </tr>
              <tr >
                <td colspan="10" class="text-xs italic font-medium text-center"> NB: Pour faire valoir vos droits, conserver ce bulletin sans limitation de durée. la part salariale est payée par l'employeur </td>
              </tr>
            </tfoot>
          </table>
        </main>

        <div class="">
          <div class="text-center my-2"> {{$parametres_generaux->ville}}, le <span>{{date('d/m/Y', strtotime($fiche->created_at))}} </span></div>
          <div class="flex justify-around my-2">
            <h5 class="capitalize"> Nom, Prénoms et signature de l'employé</h5>
            <h5 class="capitalize"> Nom et cachet de l'employeur</h5>
          </div>
        </div>
        @if($fiche->payement->trashed())
        <div class="absolute h-full text-8xl text-center text-danger top-[50%] w-full overflow-hidden mt-5 p-4 print:m-0">
          Annulé
        </div>
        @endif
      </div>
      
    </div>
  </div>
</section>

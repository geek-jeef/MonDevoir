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
      /*.table th, .table td {
          border-color : black;
      }*/
      .table[no-border] th ,
      .table[no-border] td {
          border-bottom-width: 0;
      }
  </style>
  <div class="wrapper print:hidden print:invisible print:m-0 print:p-0">
    <div class="wrapper-box">
      <div class="flex justify-between box w-full p-5 bg-slate-100">
        <div>
          <livewire:widget.picker.cycle-classe-salle-picker   eventToFired="update-liste-data" />
        </div>
        <div class="self-end">
          <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
              {{--<div class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500 font-bold">T</div>
              <input type="text"  class="form-control w-full sm:w-64 box px-10" placeholder="Titre">
              --}}
              
              <div class="inbox-filter dropdown .absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
                <button class="btn btn-primary" role="button" aria-expanded="false" data-tw-toggle="dropdown" >
                  Options <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer ml-2" name="cog" />
                </button>
                
                <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                  <div class="dropdown-content">
                      <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                        {{--<div class="col-span-6">
                          <label  class="form-label text-xs">Colonne</label>
                          <select wire:model="column" class="form-select flex-1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                          </select>
                        </div>
                        
                        <div class="col-span-12">
                          <label  class="form-label text-xs">Ligne de Garde</label>
                          <select wire:model="footer" class="form-select flex-1">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                          </select>
                        </div>--}}
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="entete" type="checkbox">
                            <label class="form-check-label" >Afficher l'Entete</label>
                          </div>
                        </div>
                        
                        {{--<div class="col-span-12 flex items-center mt-3">
                          <button class="btn btn-primary w-32 ml-2">Valider</button>
                        </div>--}}
                      </div>

                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center print:m-0 print:p-0">
    <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" style="width: 29.6cm; min-height: 20.9cm;">
      <div  class=".module-inside flex-col justify-around">
        @if($entete)
        <header class="grid grid-cols-12 gap-3">
          <div class="col-span-3  place-self-center">
            <div class="flex justify-center">
              <img src="{{asset('assets/logo/icon3.png')}}" data-logo class="h-20" >
            </div>
          </div>
          <div class="col-span-9 flex-col justify-center">
              <div>
                <div class="flex justify-center">
                  <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-8">
                </div>

                <div class="text-center text-base">
                  <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
                </div>
                <div class="text-center flex justify-center">
                  <div class="text-center text-base">
                    <span class="whitespace-nowrap mx-2" data-postal >{{$parametres_generaux->poste}} - {{$parametres_generaux->ville}}</span>
                    <span class="whitespace-nowrap mx-2" data-phones > Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }} </span>
                    <span class="whitespace-nowrap mx-2" data-mail >Email: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a></span>

                  </div>
                </div>
              </div>
          </div>
        </header>
        @endif
        @if($titre)
        <div class="whitespace-nowrap text-center">
          <div class="uppercase underline text-xl font-bold whitespace-nowrap decoration-1 decoration-double underline-offset-4"> {{$titre}} </div>
        </div>
        @endif
        @if( $entete  || $titre )
        <div class="w-full my-2 border-t border-slate-800/60 dark:border-darkmode-400 border-double"></div>
        @endif

        <div class="my-2">
          <div class="grid grid-cols-12 border border-2 border-primary">
            <div class=" col-span-4 p-1 flex">
              <div class="font-semibold whitespace-nowrap mr-2">Cycle:</div>
              <div class="truncate overflow-hidden" > {{ ($salle)? $salle->classe->cycle->nom_cycle : '' }} </div>
            </div>

            <div class=" col-span-4 p-1 flex  border-l border-1 border-primary">
              <div class="font-semibold whitespace-nowrap mr-2">Classe: </div>
              <div class="truncate overflow-hidden" > {{ ($salle)? $salle->classe->nom_classe : '' }} </div>
            </div>

            <div class=" col-span-4 p-1 flex  border-l border-1 border-primary">
              <div class="font-semibold whitespace-nowrap mr-2">Salle:</div>
              <div class="truncate overflow-hidden" > {{ ($salle)? $salle->nom_salle : '' }} </div>
            </div>

            <div class=" col-span-12 p-1 flex border-t border-1 border-primary ">
              <div class="font-semibold whitespace-nowrap mr-2">Semaine:</div>
              <div class="truncate overflow-hidden border-b border-1 border-primary border-dotted w-full" > </div>
            </div>

          </div>
        </div>

        <main>
          <table class="table table-bordered table-striped border-[2px] border-primary">
            <thead class="text-center font-semibold whitespace-nowrap border-primary">
              <tr class="border-primary">
                <th class="w-1 mx-1" rowspan="2">
                  N°
                </th>
                <th class="w-1 px-2" rowspan="2">
                  Noms et Prénoms
                </th>
                @foreach(['Lundi','Mardi','Mercredi','Jeudi','Vendredi'] as $jour)
                <th class="text-center" colspan="7"> {{$jour}} </th>
                @endforeach
              </tr>
              <tr class="border-primary">
                @foreach(['Lundi','Mardi','Mercredi','Jeudi','Vendredi'] as $jour)
                  @foreach(array_fill(0, 7, null) as $x)
                  <th class="text-center font-normal">H{{$loop->iteration}}</th>
                  @endforeach
                @endforeach
              </tr>
            </thead>
       
              @foreach($eleves as $eleve)
              <tr>
                <td class="w-1 mx-1 whitespace-nowrap">{{substr(str_repeat(0, 2).$loop->iteration,-2)}} </td>
                <td style="width: 20%;"> {{$eleve->nom_complet}} </td>
                @foreach(array_fill(0, 35 , null) as $x)
                <td> </td>
                @endforeach
              </tr>
              @endforeach
              <tr>
                <td class="w-1 mx-1">#</td>
                <td style="width: 20%;" class="font-bold"> Total Presence </td>
                @foreach(array_fill(0,35, null) as $x)
                 <td>  </td>
                @endforeach
              </tr>
              <tr>
                <td class="w-1 mx-1">#</td>
                <td style="width: 20%;" class="font-bold"> Total Absence </td>
                @foreach(array_fill(0,35, null) as $y)
                 <td>  </td>
                @endforeach
              </tr>
              <tr style="height: 3cm; background-color: unset ;">
                <td style="background-color: unset ;" class="w-1 mx-1">#</td>
                <td style="width: 20%; background-color: unset ;"> </td>
                @foreach(array_fill(0,35, null) as $y)
                 <td style="background-color: unset ;">  </td>
                @endforeach
              </tr>
            </tbody>
            

          </table>
        </main>


      </div>
      <div class="absolute right-0 top-0 p-2 font-bold"> {{ \Hp::annee()->nom_annee }} </div>
    </div>
  </div>   
</section>
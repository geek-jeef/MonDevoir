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

        <button wire:click="$refresh" class="ml-auto flex items-center text-primary absolute absolute right-0 top-0 p-2 text-xs">
          <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
        </button>
        <div>
          <livewire:widget.picker.cycle-classe-salle-picker   eventToFired="update-liste-data" />
        </div>
        <div class="self-end">
          <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
            <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
              <div class="inbox-filter dropdown inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
                <button class="dropdown-toggle btn box cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                  <x-icon class="w-4 h-4" name="adjustments" />
                </button>
                <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                  <div class="dropdown-content">
                      <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                        {{--
                        <div class="col-span-6">
                          <label  class="form-label text-xs">Colonne</label>
                          <select wire:model="column" class="form-select flex-1">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="col-span-6">
                          <label  class="form-label text-xs">Ligne de Garde</label>
                          <select wire:model="footer" class="form-select flex-1">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        --}}
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
            <button class="flex btn btn-primary" wire:click="downloadExcel" >
              <x-icon name="document-report" class="w-4 h-4 mr-2"  /> Exporter Excel 
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div wire:loading class="text-center w-full mt-3" >
    <x-loading color="#fff" />
  </div>

  @if($data_information)
    @foreach($data_information as $sheet)

      @if($sheet->get('type') == 'aggregate' )
        <div wire:loading.remove class="flex justify-center print:m-0 print:p-0" @if(!$loop->last) style="page-break-after: always;" @endif>
          <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" style="width: 29.69cm; min-height: 20.9cm;">
            <div  class=".module-inside flex-col justify-around">
              {{--
              <div class="my-2">
                <div class="grid grid-cols-12 border border-2 border-primary">
                  <div class=" col-span-4 p-1 ">
                    <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Cycle:</div>
                    <div class="truncate overflow-hidden" > {{ ($salle)? $salle->classe->cycle->nom_cycle : '' }} </div>
                  </div>
                  <div class=" col-span-4 p-1   border-l border-1 border-primary">
                    <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Classe: </div>
                    <div class="truncate overflow-hidden" > {{ ($salle)? $salle->classe->nom_classe : '' }} </div>
                  </div>
                  <div class=" col-span-4 p-1   border-l border-1 border-primary">
                    <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Salle:</div>
                    <div class="truncate overflow-hidden" > {{ ($salle)? $salle->nom_salle : '' }} </div>
                  </div>
                </div>
              </div>
              --}}
              {{--

                'titre_row' => $titre ,
                'description_row' => $description ,
                'total_row' => $total,
                'header_row' => $header,
                
              --}}
              @if($entete)
                <header class="grid grid-cols-12 gap-3 pt-4 px-4">
                  <div class="col-span-4  place-self-center">
                    <div class="flex justify-center">
                      <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-12 w-auto">
                    </div>
                  </div>
                  <div class="col-span-8 flex-col justify-center">
                      <div>
                        <div class="flex justify-center">
                          <span class="whitespace-nowrap text-base font-semibold" data-nom_ecole >{{$parametres_generaux->nom_ecole}}</span>
                        </div>
                        <div class="text-center text-xs">
                          <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
                        </div>
                        <div class=" flex justify-center">
                          <div class="text-center text-xs">
                            <span class="whitespace-nowrap mx-2" data-postal >{{$parametres_generaux->poste}} - {{$parametres_generaux->ville}}</span>
                            <span class="whitespace-nowrap mx-2" data-phones > Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }} </span>
                            <span class="whitespace-nowrap mx-2" data-mail >Email: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a></span>
                          </div>
                        </div>
                      </div>
                  </div>
                </header>
              @endif
              @if( $entete )
                <div class="w-full my-2 border-t border-slate-800/60 dark:border-darkmode-400 border-double px-4"></div>
              @endif

              <main  class="pb-4 px-4">
                <table class="table table-bordered table-striped border-[2px] border-primary text-xs">
                  
                  <thead class="text-center font-semibold whitespace-nowrap border-primary">
                    @if($sheet->get('titre_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('titre_row') as $head)
                            <th colspan="{{$head->get('colspan')}}" > {{$head->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif

                    @if($sheet->get('description_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('description_row') as $head)
                            <th colspan="{{$head->get('colspan')}}" > {{$head->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif

                    @if($sheet->get('header_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('header_row') as $head)
                            <th colspan="{{$head->get('colspan')}}" > {{$head->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif
                  </thead>

                  <tbody>
                    @foreach($sheet->get('table') as $row)
                      <tr>
                        @foreach($row as $data)
                          <td title="{{$data->get('name')}}" colspan="{{$data->get('colspan')}}" > {{ ($data->get('name') == "N°") ? $loop->parent->iteration : $data->get('value')}} </td>
                        @endforeach
                      </tr>
                    @endforeach
                  </tbody>

                  <tfoot>
                    @if($sheet->get('total_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('total_row') as $foot)
                            <th colspan="{{$foot->get('colspan')}}" > {{$foot->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif
                  </tfoot>

                </table>
              </main>

              <div class="absolute right-0 top-0 p-2 font-bold text-xs"> {{ \Hp::annee()->nom_annee }} </div>
              <div class="absolute left-0 bottom-0 p-2 font-bold text-xs"> {{ $parametres_generaux->nom_ecole }} </div>
              <div class="absolute right-0 bottom-0 p-2 font-bold text-xs"> {{ now() }} </div>
            </div>
          </div>
        </div>
      @endif


      @if($sheet->get('type') == 'sheet' )
        <div wire:loading.remove class="flex justify-center print:m-0 print:p-0" @if(!$loop->last) style="page-break-after: always;" @endif>
          <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" style="width: 29.69cm; min-height: 20.9cm;">
            <div  class=".module-inside flex-col justify-around">
              {{--
              <div class="my-2">
                <div class="grid grid-cols-12 border border-2 border-primary">
                  <div class=" col-span-4 p-1 ">
                    <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Cycle:</div>
                    <div class="truncate overflow-hidden" > {{ ($salle)? $salle->classe->cycle->nom_cycle : '' }} </div>
                  </div>
                  <div class=" col-span-4 p-1   border-l border-1 border-primary">
                    <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Classe: </div>
                    <div class="truncate overflow-hidden" > {{ ($salle)? $salle->classe->nom_classe : '' }} </div>
                  </div>
                  <div class=" col-span-4 p-1   border-l border-1 border-primary">
                    <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Salle:</div>
                    <div class="truncate overflow-hidden" > {{ ($salle)? $salle->nom_salle : '' }} </div>
                  </div>
                </div>
              </div>
              --}}
              {{--

                'titre_row' => $titre ,
                'description_row' => $description ,
                'total_row' => $total,
                'header_row' => $header,
                
              --}}
              @if($entete)
                <header class="grid grid-cols-12 gap-3 pt-4 px-4">
                  <div class="col-span-4  place-self-center">
                    <div class="flex justify-center">
                      <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-12 w-auto">
                    </div>
                  </div>
                  <div class="col-span-8 flex-col justify-center">
                      <div>
                        <div class="flex justify-center">
                          <span class="whitespace-nowrap text-base font-semibold" data-nom_ecole >{{$parametres_generaux->nom_ecole}}</span>
                        </div>
                        <div class="text-center text-xs">
                          <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
                        </div>
                        <div class=" flex justify-center">
                          <div class="text-center text-xs">
                            <span class="whitespace-nowrap mx-2" data-postal >{{$parametres_generaux->poste}} - {{$parametres_generaux->ville}}</span>
                            <span class="whitespace-nowrap mx-2" data-phones > Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }} </span>
                            <span class="whitespace-nowrap mx-2" data-mail >Email: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a></span>

                          </div>
                        </div>
                      </div>
                  </div>
                </header>
              @endif
              @if( $entete )
                <div class="w-full my-2 border-t border-slate-800/60 dark:border-darkmode-400 border-double px-4"></div>
              @endif

              <main  class="pb-4 px-4">
                <table class="table table-bordered table-striped border-[2px] border-primary text-xs">
                  
                  <thead class="text-center font-semibold whitespace-nowrap border-primary">
                    @if($sheet->get('titre_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('titre_row') as $head)
                            <th colspan="{{$head->get('colspan')}}" > {{$head->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif

                    @if($sheet->get('description_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('description_row') as $head)
                            <th colspan="{{$head->get('colspan')}}" > {{$head->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif

                    @if($sheet->get('header_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('header_row') as $head)
                            <th colspan="{{$head->get('colspan')}}" > {{$head->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif
                  </thead>

                  <tbody>
                    @foreach($sheet->get('table') as $row)
                      <tr>
                        @foreach($row as $data)
                          <td title="{{$data->get('name')}}" colspan="{{$data->get('colspan')}}" > {{ ($data->get('name') == "N°") ? $loop->parent->iteration : $data->get('value')}} </td>
                        @endforeach
                      </tr>
                    @endforeach
                  </tbody>

                  <tfoot>
                    @if($sheet->get('total_row'))
                      <tr class="border-primary">
                        @foreach($sheet->get('total_row') as $foot)
                            <th colspan="{{$foot->get('colspan')}}" > {{$foot->get('value')}} </th>
                        @endforeach
                      </tr>
                    @endif
                  </tfoot>

                </table>
              </main>

              <div class="absolute right-0 top-0 p-2 font-bold text-xs"> {{ \Hp::annee()->nom_annee }} </div>
              <div class="absolute left-0 bottom-0 p-2 font-bold text-xs"> {{ $parametres_generaux->nom_ecole }} </div>
              <div class="absolute right-0 bottom-0 p-2 font-bold text-xs"> {{ now() }} </div>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  @else
  <x-empty-state wire:loading.remove class="mt-5 border border-white" titre="Rapport Ecolage" message="Choisissez une Classe pour en afficher le rapport " details="(cliquer juste sur valider pour avoir le rapport de toute les classes)" />
  @endif 
</section>

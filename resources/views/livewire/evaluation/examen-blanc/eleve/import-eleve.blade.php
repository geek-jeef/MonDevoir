<section>
  <style type="text/css">
      .table th {
          border-bottom-width: 2px;
          padding-left: 0.5rem;
          padding-right: 0.5rem;
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
          font-weight: unset;
      }
      .table td {
          border-bottom-width: 1px;
          padding-left: 0.5rem;
          padding-right: 0.5rem;
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
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
      <div class="flex justify-between box w-full p-5 bg-slate-100 gap-4">
        <div>
          <livewire:widget.picker.cycle-classe-salle-picker   eventToFired="update-liste-data" />
        </div>
        @if($salle)
        <div class="self-end ">
          <form wire:submit.prevent="generate" class="flex gap-2">
            <div class="self-end">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Choisir un Fichier (Excel, CSV)</label>
              <input wire:model.defer="excel_file" class="block w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
            <div class="self-end">
              <button class="btn btn-primary" type="submit" >Importer</button>
            </div>
          </form>

        </div>
        @endif
        <div class="self-end">
          <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
              <div class="inbox-filter dropdown .absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
                <button class="btn btn-primary" role="button" aria-expanded="false" data-tw-toggle="dropdown" >
                  Options <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer ml-2" name="cog" />
                </button>
                
                <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                  <div class="dropdown-content">
                      <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                        <div class="col-span-6">
                          <label  class="form-label text-xs">Colonne</label>
                          <select wire:model="column" class="form-select flex-1">
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
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                          </select>
                        </div>

                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="paysage" type="checkbox">
                            <label class="form-check-label" >Afficher en Mode Paysage</label>
                          </div>
                        </div>

                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="entete" type="checkbox">
                            <label class="form-check-label" >Afficher l'Entete</label>
                          </div>
                        </div>
                        
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
    <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" @if($paysage) style="width: 29.6cm; min-height: 20.9cm;" @else style="width: 20.9cm; min-height: 29.69cm;" @endif>
      <div  class=".module-inside flex-col justify-around">
        @if($entete)
        {{--<header class="grid grid-cols-12 gap-3">
          <div class="col-span-3  place-self-center">
            <div class="flex justify-center">
              <img src="{{asset('assets/logo/icon3.png')}}" data-logo class="h-16" >
            </div>
          </div>
          <div class="col-span-9 flex-col justify-center">
              <div>
                <div class="flex justify-center">
                  <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-8">
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
        </header>--}}
        <header wire:ignore class="grid grid-cols-12 gap-3">
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
        @if($titre)
        <div class="whitespace-nowrap text-center">
          <div class="uppercase underline text-xl font-bold whitespace-nowrap decoration-1 decoration-double underline-offset-4"> {{$titre}} </div>
        </div>
        @endif
        @if( $entete  || $titre )
        <div class="w-full my-2 border-t border-slate-800/60 dark:border-darkmode-400 border-double"></div>
        @endif

        <main>
          @if($firstRow)
          <table class="table table-bordered table-striped border-[2px] border-primary">
            <thead class="text-center font-semibold whitespace-nowrap border-primary">
              <tr class="border-primary">
                <th>#</th>
                @foreach($firstRow as $head)
		  @if($head)
                  	<th>{{$head}}</th>
		  @endif
                @endforeach
                <th>Doublons</th>
                <th>Action</th>
              </tr>
            </thead>

            @if($eleves)
		{{debug($eleves)}}
            <tbody>
              @foreach($eleves as $eleve)
              <tr>
                <td class="w-1 mx-1 whitespace-nowrap"> {{substr(str_repeat(0, 2).$loop->iteration,-2)}}  </td>
                @foreach($eleve as $key => $inf)
		  @if($key)
                  	<td>{{$inf}}</td>
		  @endif
                @endforeach
                <td>
                  @php

                    $c1 = $eleve['nom'];
                    $c2 = $eleve['prenoms'];
                    $c3 = $eleve['genre'];
                    $c3 = str_replace(' ', '', $c3); 
                    $c3 = $c3[0]; 
                    $c3 = strtolower($c3);
                    $feminity = ( ($c3 == 'f') || ($c3 == 'w') );// check feminity
                    $c3 = (!$feminity) ? 'Masculin' : 'Feminin';
                    $uni = array('nom' =>  $c1 ,'prenoms' => $c2 ,'genre' => $c3);
                    $duplicate = App\Models\Eleve::where($uni)->get();
                  @endphp
                  @if($duplicate->count())
                    {{--@php
                      $id_liste = $duplicate->pluck('id') ;
                      debug('id_liste');
                      debug($id_liste);
                      $url = route('eleve.cartes.print',['cartePrintData' =>  [ 'cartes' => $id_liste->toArray() , 'annee_id' => $annee->id ] ]);
                      debug('url');
                      debug($url);
                    @endphp
                    --}}
                  <div class="flex items-center justify-center text-danger">
                    <a class="flex items-center text-danger" href="{{route('eleves')}}" target="_blank" >
                      <x-icon name="x" class="w-4 h-4 mr-2" /> {{$duplicate->count()}}
                    </a>
                  </div>
                  @else
                    <div class="flex items-center justify-center text-emerald-600">
                      <a class="flex items-center text-emerald-600" href="javascript:;" target="_blank" >
                        <x-icon name="check" class="w-4 h-4 mr-2" /> Aucun 
                      </a>
                    </div>
                  @endif
                </td>
                <td class="table-report__action">
                  <div class="flex justify-center items-center">
                    <a class="flex items-center text-danger" href="javascript:;" wire:click="confirmRetraitEleve(@js($eleve))">
                      <x-icon name="trash" class="w-4 h-4 mr-2" /> Supprimer 
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            @endif

          </table>
          @endif
        </main>

        @if(($salle) && ($eleves))
          <section class="my-4 p-2 print:hidden">
            <div class="alert alert-primary show mb-2" role="alert">
              <div class="flex items-center">
                <div class="font-medium text-lg">Importer La liste</div>
              </div>
              <div class="mt-3 flex justify-end">
                <div class="self-end">
                  <button wire:click="confirmEnregistrerEleve()" class="btn btn-primary bg-white/10">
                    Importer
                  </button>
                </div>
              </div> 
            </div>          
          </section>
        @endif



        <div class="absolute right-0 top-0 p-2 font-bold text-xs"> {{ \Hp::annee()->nom_annee }} </div>
        <div class="absolute left-0 bottom-0 p-2 font-bold text-xs"> {{ $parametres_generaux->nom_ecole }} </div>
      </div>
    </div>
  </div>   
</section>

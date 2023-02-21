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
    <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" style="width: 20.9cm; min-height: 29.69cm;">
      <div  class=".module-inside flex-col justify-around">
      	@if($entete)
        <header class="grid grid-cols-12 gap-3">
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


        @if($salle || $classe || $cycle)
        <div class="my-2">
          <div class="grid grid-cols-12 border border-2 border-primary">
            <div class=" col-span-4 p-1 ">
              <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Cycle:</div>
              <div class="truncate overflow-hidden" > {{ ($cycle)? $cycle->nom_cycle : '' }} </div>
            </div>
            <div class=" col-span-4 p-1   border-l border-1 border-primary">
              <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Classe: </div>
              <div class="truncate overflow-hidden" > {{ ($classe)? $classe->nom_classe : 'Toutes' }} </div>
            </div>
            <div class=" col-span-4 p-1   border-l border-1 border-primary">
              <div class="w-0 font-semibold print:w-1 whitespace-nowrap">Salle:</div>
              <div class="truncate overflow-hidden" > {{ ($salle)? $salle->nom_salle : 'Toutes' }} </div>
            </div>
          </div>
        </div>
        @endif


        <main>

        	@if(!$cycle)
        	<div class="relative division-container">
	        	<div class="division">
		        	<h2 class="underline flex font-bold text-primary my-2">
		        		<x-icon name="sparkles" class="h-4 w-4 mr-3" /> Repartition des Eleves par Cycle
		        	</h2>
		          <table class="table table-bordered table-striped border-[2px] border-primary mb-5">
		            <thead class="text-center font-semibold whitespace-nowrap border-primary">
		              <tr class="border-primary">
		                <th class="w-1 mx-1">
		                  #
		                </th>
		                <th class="w-1 px-2">
		                 Cycles
		                </th>
		                <th class="w-1 px-2">
		                 Filles
		                </th>
		                <th class="w-1 px-2">
		                 Garcons
		                </th>
		                <th class="w-1 px-2">
		                 Effectif
		                </th>
		              </tr>
		            </thead>
		            <tbody>
		            	@foreach($annee->cycles()->where('cycle_academiques.ouvert_cette_annee',true)->get() as $loop_cycle)
		              <tr>
		                <td class="w-1 mx-1 whitespace-nowrap">{{substr(str_repeat(0, 2).$loop->iteration,-2)}} </td>
		                <td> {{$loop_cycle->nom_cycle}} </td>
		                {{debug($loop_cycle->eleves)}}
		                <td> {{$loop_cycle->eleves->where('genre','Feminin')->count()}} </td>
		                <td> {{$loop_cycle->eleves->where('genre','Masculin')->count()}} </td>
		                <td> {{$loop_cycle->eleves->count()}} </td>
		              </tr>
		              @endforeach
		              <tr class="font-semibold">
		                <td class="w-1 mx-1 whitespace-nowrap">#</td>
		                <td > Total ({{$annee->nom_annee}})  </td>
		                <td> {{$annee->eleves->where('genre','Feminin')->count()}} </td>
		                <td> {{$annee->eleves->where('genre','Masculin')->count()}} </td>
		                <td> {{$annee->eleves->count()}} </td>
		              </tr>
		            </tbody>
		          </table>
	        	</div>
	        	<button class="btn btn-sm btn-rounded-danger mx-2 absolute right-0 top-0 division-toggler print:hidden print:mx-0 print:p-0 print:m-0" onclick="toggleDivision(this, `Repartition des Eleves par Cycle` );">Cacher</button>
        	</div>
          @endif

          @foreach($annee->cycles()->where('cycle_academiques.ouvert_cette_annee',true)->get() as $loop_cycle)
	          @if( (!$cycle) || ($loop_cycle->id == $cycle->id) )

		          <div class="relative division-container">
		          	<div class="division">
		          		
				          <h2 class="underline flex font-bold text-primary ml-8 my-2">
				        		<x-icon name="view-grid" class="rotate-45 h-4 w-4 mr-3" /> Repartition des Eleves par Classe - {{$loop_cycle->nom_cycle}}
				        	</h2>
				          <table class="table table-bordered table-striped border-[2px] border-primary mb-5">
				            <thead class="text-center font-semibold whitespace-nowrap border-primary">
				              <tr class="border-primary">
				                <th class="w-1 mx-1">
				                  #
				                </th>
				                <th class="w-1 px-2">
				                 Classes
				                </th>
				                <th class="w-1 px-2">
				                 Filles
				                </th>
				                <th class="w-1 px-2">
				                 Garcons
				                </th>
				                <th class="w-1 px-2">
				                 Effectif
				                </th>
				              </tr>
				            </thead>
				            <tbody>
				            	@foreach($loop_cycle->classes as $loop_classe)
				              <tr>
				                <td class="w-1 mx-1 whitespace-nowrap">{{substr(str_repeat(0, 2).$loop->iteration,-2)}} </td>
				                <td> {{$loop_classe->nom_court}} </td>
				                <td> {{$loop_classe->eleves->where('genre','Feminin')->count()}} </td>
				                <td> {{$loop_classe->eleves->where('genre','Masculin')->count()}} </td>
				                <td> {{$loop_classe->eleves->count()}} </td>
				              </tr>
				              @endforeach
				              <tr class="font-semibold">
				                <td class="w-1 mx-1 whitespace-nowrap">#</td>
				                <td > Total ({{$loop_cycle->nom_cycle}})  </td>
				                <td> {{$loop_cycle->eleves->where('genre','Feminin')->count()}} </td>
				                <td> {{$loop_cycle->eleves->where('genre','Masculin')->count()}} </td>
				                <td> {{$loop_cycle->eleves->count()}} </td>
				              </tr>
				            </tbody>
				          </table>
			          </div>
			          <button class="btn btn-sm btn-rounded-danger mx-2 absolute right-0 top-0 division-toggler print:hidden print:mx-0 print:p-0 print:m-0" onclick="toggleDivision(this, `Repartition des Eleves par Classe - {{$loop_cycle->nom_cycle}}` );">Cacher</button>
			        </div>
		         	@foreach($loop_cycle->classes as $loop_classe)
		         		@if( (!$classe) || ($loop_classe->id == $classe->id) )
				         	<div class="relative division-container">
				          	<div class="division">
						          <h2 class="underline flex font-bold text-primary ml-16 my-2">
						        		<x-icon name="location-marker" class="h-4 w-4 mr-3" /> Repartition des Eleves par Salle - {{$loop_classe->nom_classe}}
						        	</h2>
						          <table class="table table-bordered table-striped border-[2px] border-primary mb-5">
						            <thead class="text-center font-semibold whitespace-nowrap border-primary">
						              <tr class="border-primary">
						                <th class="w-1 mx-1">
						                  #
						                </th>
						                <th class="w-1 px-2">
						                 Salles
						                </th>
						                <th class="w-1 px-2">
						                 Filles
						                </th>
						                <th class="w-1 px-2">
						                 Garcons
						                </th>
						                <th class="w-1 px-2">
						                 Effectif
						                </th>
						              </tr>
						            </thead>
						            <tbody>
						            	@foreach($loop_classe->salles as $loop_salle)
						              <tr>
						                <td class="w-1 mx-1 whitespace-nowrap">{{substr(str_repeat(0, 2).$loop->iteration,-2)}} </td>
						                <td> {{$loop_salle->nom_salle}} </td>
						                <td> {{$loop_salle->eleves->where('genre','Feminin')->count()}} </td>
						                <td> {{$loop_salle->eleves->where('genre','Masculin')->count()}} </td>
						                <td> {{$loop_salle->eleves->count()}} </td>
						              </tr>
						              @endforeach
						              <tr class="font-semibold">
						                <td class="w-1 mx-1 whitespace-nowrap">#</td>
						                <td > Total ({{$loop_classe->nom_classe}})  </td>
						                <td> {{$loop_classe->eleves->where('genre','Feminin')->count()}} </td>
						                <td> {{$loop_classe->eleves->where('genre','Masculin')->count()}} </td>
						                <td> {{$loop_classe->eleves->count()}} </td>
						              </tr>
						            </tbody>
						          </table>
						        </div>
					          <button class="btn btn-sm btn-rounded-danger mx-2 absolute right-0 top-0 division-toggler print:hidden print:mx-0 print:p-0 print:m-0" onclick="toggleDivision(this, `Repartition des Eleves par Salle - {{$loop_classe->nom_classe}}` );">Cacher</button>
					        </div>
			          @endif
		          @endforeach
		        @endif
          @endforeach
        </main>
        <div class="absolute right-0 top-0 p-2 font-bold text-xs"> {{ \Hp::annee()->nom_annee }} </div>
        <div class="absolute left-0 bottom-0 p-2 font-bold text-xs"> {{ $parametres_generaux->nom_ecole }} </div>
      </div>
    </div>
  </div>
  <script wire:ignore type="text/javascript">
  	function toggleDivision(element,text) {
  		frere = $(element).parent().find('.division');
  		if(frere.hasClass('hidden')){
  			frere.removeClass('hidden');
  			$(element).text('Cacher');
  			$(element).addClass('absolute');
  			$(element).removeClass('w-full');
  			$(element).addClass('btn-rounded-danger');
  			$(element).removeClass('text-emerald-600');
  			$(element).removeClass('underline');
  		}else{
  			frere.addClass('hidden');
  			$(element).text('Afficher : '+text);
  			$(element).removeClass('absolute');
  			$(element).removeClass('btn-rounded-danger');
  			$(element).addClass('text-emerald-600');
  			$(element).addClass('underline');
  			$(element).addClass('w-full');
  		}
  	}
  </script>   
</section>
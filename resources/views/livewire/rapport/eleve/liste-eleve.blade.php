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
		        <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
		          <div class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500 font-bold">T</div>
		          <input type="text" wire:model.debounce.1000ms="titre" class="form-control w-full sm:w-64 box px-10" placeholder="Titre">
		          <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
		            <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" name="chevron-down" />
		            <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
		              <div class="dropdown-content">
			                <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
			                  <div class="col-span-6">
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
  </div>

  <div class="flex justify-center print:m-0 print:p-0">
    <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" style="width: 20.9cm; min-height: 29.69cm;">
      <div  class=".module-inside flex-col justify-around">
      	@if($entete)
        <header class="grid grid-cols-12 gap-3">
          <div class="col-span-3  place-self-center">
            <div class="flex justify-center">
              <img src="{{asset('assets/logo/icon3.png')}}" data-logo >
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
                <div class=" flex">
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

        <main>
          <table class="table table-bordered table-striped border-[2px] border-primary">
            <thead class="text-center font-semibold whitespace-nowrap border-primary">
              <tr class="border-primary">
                <th class="w-1 mx-1">
                  N°
                </th>
                <th class="w-1 px-2">
                  Noms et Prénoms
                </th>
                @foreach(array_fill(0,$column, null) as $x => $y)
		            <th> </th>
		            @endforeach
              </tr>
            </thead>

            
            <tbody>
            	@foreach($eleves as $eleve)
              <tr>
                <td class="w-1 mx-1 whitespace-nowrap">{{substr(str_repeat(0, 2).$loop->iteration,-2)}} </td>
                <td style="width: 35%;"> {{$eleve->nom_complet}} </td>
                @foreach(array_fill(0,$column, null) as $x => $y)
		              <td> </td>
		            @endforeach
              </tr>
              @endforeach
            </tbody>


            <tfoot>
              @foreach(array_fill(0,$footer, null) as $x => $y)
              <tr>
                <th class="w-1 mx-1">#</th>
                <th style="width: 35%;"> </th>
                @foreach(array_fill(0,$column, null) as $x => $y)
		             <th>  </th>
		            @endforeach
              </tr>
              @endforeach
            </tfoot>

          </table>
        </main>


      </div>
    </div>
  </div>   
</section>
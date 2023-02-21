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
      <div class="flex justify-between box w-full p-5 bg-slate-100">
        <div>
        </div>
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
                            <input class="form-check-input" wire:model="designation" type="checkbox">
                            <label class="form-check-label" >Afficher le Poste</label>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="qualification" type="checkbox">
                            <label class="form-check-label" >Afficher la qualification</label>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="genre" type="checkbox">
                            <label class="form-check-label" >Afficher le sexe</label>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="date_de_naissance" type="checkbox">
                            <label class="form-check-label" >Afficher La Date de Naissance</label>
                          </div>
                        </div>
                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="email" type="checkbox">
                            <label class="form-check-label" >Afficher l'Email</label>
                          </div>
                        </div>

                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="phone" type="checkbox">
                            <label class="form-check-label" >Afficher le Numero de Télephone</label>
                          </div>
                        </div>

                        <div class="col-span-12">
                          <div class="form-check form-switch">
                            <input class="form-check-input" wire:model="adresse" type="checkbox">
                            <label class="form-check-label" >Afficher l'Adresse</label>
                          </div>
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

  <div class="flex justify-center print:m-0 print:p-0">
    <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" @if($paysage) style="width: 29.6cm; min-height: 20.9cm;" @else style="width: 20.9cm; min-height: 29.69cm;" @endif>
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

        <main>
          @foreach($annee->cycles as $cycle)
            <div class="relative division-container @if(!($loop->last)) mb-5 @endif">
              <div class="division">
                <h2 class="underline flex font-bold text-primary my-2">
                  <x-icon name="sparkles" class="h-4 w-4 mr-3" /> Titulaires - {{$cycle->nom_cycle}}
                </h2>
                <table class="table table-bordered table-striped border-[2px] border-primary">
                  <thead class="text-center font-semibold whitespace-nowrap border-primary">
                    <tr class="border-primary">
                      <th class="w-1 mx-1">
                        N°
                      </th>
                      <th class="w-1 px-2">
                        Salles
                      </th>
                      <th class="w-1 px-2">
                        Noms et Prénoms
                      </th>
                      @if($designation)
                      <th class="w-1"> Poste </th>
                      @endif
                      @if($qualification)
                      <th class="w-1"> Qualification </th>
                      @endif
                      @if($genre)
                      <th class="w-1"> Genre </th>
                      @endif

                      @if($date_de_naissance)
                      <th class="w-1">Naissance </th>
                      @endif
                      @if($email)
                      <th class="w-1"> Email </th>
                      @endif

                      @if($phone)
                      <th class="w-1"> Téléphone </th>
                      @endif

                      @if($adresse)
                      <th class="w-1"> Adresse </th>
                      @endif

                      @foreach(array_fill(0,$column, null) as $x => $y)
                      <th> </th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cycle->classes as $classe)
                      @foreach($classe->salles as $salle)
                      <tr>
                        <td class="w-1 mx-1 whitespace-nowrap">{{substr(str_repeat(0, 2).$loop->iteration,-2)}} </td>
                        <td class="w-1 whitespace-nowrap"> {{$salle->nom_salle}} </td>
                        @if($salle->enseignant_id)
                          @php
                            $personnel = App\Models\Personnel::find($salle->enseignant_id);
                          @endphp

                          <td class="w-1"> {{$personnel->nom_complet}} </td>
                          @if($designation)
                          <td class="w-1"> {{$personnel->designation}} </td>
                          @endif
                          @if($qualification)
                          <td class="w-1"> {{$personnel->qualification}} </td>
                          @endif
                          @if($genre)
                          <td class="w-1"> {{$personnel->genre}} </td>
                          @endif
                          @if($date_de_naissance)
                          <td class="w-1 whitespace-nowrap"> {{$personnel->date_de_naissance}} </td>
                          @endif
                          @if($email)
                          <td class="w-1"> {{$personnel->email}} </td>
                          @endif

                          @if($phone)
                          <td class="w-1"> {{$personnel->phone}} </td>
                          @endif

                          @if($adresse)
                          <td class="w-1"> {{$personnel->adresse}} </td>
                          @endif
                        @else
                          <td class="w-1"> </td>
                          @if($designation)
                          <td class="w-1"></td>
                          @endif
                          @if($qualification)
                          <td class="w-1">  </td>
                          @endif
                          @if($genre)
                          <td class="w-1"> </td>
                          @endif
                          @if($date_de_naissance)
                          <td class="w-1 whitespace-nowrap"> </td>
                          @endif
                          @if($email)
                          <td class="w-1"> </td>
                          @endif
                          @if($phone)
                          <td class="w-1"> </td>
                          @endif
                          @if($adresse)
                          <td class="w-1"> </td>
                          @endif
                        @endif

                        @foreach(array_fill(0,$column, null) as $x => $y)
                          <td> </td>
                        @endforeach
                      </tr>
                      @endforeach
                    @endforeach
                  </tbody>
                  <tfoot>
                    @foreach(array_fill(0,$footer, null) as $x => $y)
                    <tr>
                      <th class="w-1 mx-1">#</th>
                      <th class="w-1"> </th>
                      <th class="w-1"> </th>
                      @if($designation)
                      <th> </th>
                      @endif
                      @if($qualification)
                      <th> </th>
                      @endif
                      @if($genre)
                      <th> </th>
                      @endif
                      @if($date_de_naissance)
                      <th> </th>
                      @endif
                      @if($email)
                      <th> </th>
                      @endif
                      @if($phone)
                      <th> </th>
                      @endif
                      @if($adresse)
                      <th> </th>
                      @endif
                      @foreach(array_fill(0,$column, null) as $x => $y)
                       <th>  </th>
                      @endforeach
                    </tr>
                    @endforeach
                  </tfoot>
                </table>
              </div>
              <button class="btn btn-sm btn-rounded-danger mx-2 absolute right-0 top-0 division-toggler print:hidden print:mx-0 print:p-0 print:m-0" onclick="toggleDivision(this, `Titulaires - {{$cycle->nom_cycle}}` );">Cacher</button>
            </div>
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
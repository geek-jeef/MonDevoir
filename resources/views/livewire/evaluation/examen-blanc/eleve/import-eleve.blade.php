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
.fileUploadInput {
  display: grid;
  grid-gap: 5px;
  position: relative;
  z-index: 1;
}
.fileUploadInput label {
    display: flex;
    align-items: center;
    transition: .4s ease;
    font-family: arial, sans-serif;
    font-size: .75em;
}

.fileUploadInput input {
    position: relative;
    z-index: 1;
    padding: 0 5px;
    width: 100%;
    height: 38px;
    border: 1px solid rgb(var(--color-primary)/var(--tw-bg-opacity));
    border-radius: 3px;
    font-family: arial, sans-serif;
    font-size: 1rem;
    font-weight: regular; 
  }
  .fileUploadInput input[type="file"] {
      padding: 0 5px; 
  }
  .fileUploadInput input[type="file"]::-webkit-file-upload-button {
        visibility: hidden;
        margin-left: 10px;
        padding: 0;
        height: 38px;
        width: 0px;
  }

  .fileUploadInput button {
    position: absolute;
    right: 0;
    bottom: 0;
    height: 38px;
    width: 38px;
    line-height: 0;
    user-select: none;
    color: white;
    background-color: rgb(var(--color-primary)/var(--tw-bg-opacity));
    border-radius: 0 3px 3px 0;
    font-family: arial, sans-serif;
    font-size: 1rem;
    font-weight: 800;
  }

  @-moz-document url-prefix() {
    .fileUploadInput button {
      display: none; 
    } 
  }

  </style>

  <div class="wrapper print:hidden print:invisible print:m-0 print:p-0">
    <div class="wrapper-box">
      <div class="flex justify-between box w-full p-5 bg-slate-100 gap-4">
        <div>
          <livewire:widget.picker.cycle-classe-salle-picker   eventToFired="getDataFromSalle" />
        </div>
        <div class="self-end ">
          <form action="#" wire:submit.prevent="importFromExcel" class="flex gap-2">
            <div class="self-end flex">
              <div class="mr-2">
                <x-errors class="mt-3"/>
                <div class="fileUploadInput">
                  <label>✨ Choisir un fichier | XLSX, CSV, TSV, ODS | &lt; 4.00MB</label>
                  <input wire:model.defer="excel_file" class="btn btn-primary-soft" type="file"/>
                  <button>+</button>
                </div>
              </div>
              <button class="btn btn-primary self-end" type="submit" >Importer</button>
            </div>
          </form>
        </div>

        <div class="self-end">
          <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
            <a href="#" wire:click="downloadModele()" class="btn btn-primary mr-3">
              Modèle <x-icon class="w-4 h-4 cursor-pointer ml-2" name="download" />
            </a>

              <div class="inbox-filter dropdown .absolute inset-y-0 right-0 flex items-center" data-tw-placement="bottom-start">
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
        @if( $entete || $titre )
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
            @if($information)
            <tbody>
              @foreach($information as $eleve)
              <tr>
                <td class="w-1 mx-1 whitespace-nowrap"> {{substr(str_repeat(0, 2).$loop->iteration,-2)}}  </td>
                @foreach($firstRow as $key)
                  <td>{{$eleve[$key]}}</td>
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
                    $uni = array(
                      'nom' =>  $c1 ,
                      'prenoms' => $c2 ,
                      'genre' => $c3,
                      'examen_id' => $examen->id,
                      'annee_academique_id' => $annee->id,
                      );
                    $duplicate = App\Models\ExamenBlanc\Registre::where($uni)->get();
                  @endphp
                  @if($duplicate->count())
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

        @if($information && $etablissement)
          <section class="my-4 p-2">
              <div class="overflow-x-auto">
                            <table class="table table-striped table-bordered mt-5">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">Information</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Etablissement</td>
                                        <td>
                                          <a href="#" class="font-medium whitespace-nowrap">{{$etablissement['nom_etablissement']}}</a>
                                          <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$etablissement['nom_etablissement_court']}}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Annee Academique</td>
                                        <td>{{$annee->nom_annee}}</td>
                                    </tr>
                                    <tr>
                                        <td>Responsable</td>
                                        <td>
                                          <a href="#" class="font-medium whitespace-nowrap">{{$etablissement['responsable']['nom']??''}}</a>
                                          <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$etablissement['responsable']['phone']??''}}</div>
                                          <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$etablissement['responsable']['email']??''}}</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
              </div>
          </section>
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

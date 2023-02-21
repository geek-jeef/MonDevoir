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
          <form wire:submit.prevent="getExcel" class="flex gap-2">
            <div class="self-end">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Choisir un Fichier (Excel, CSV)</label>
              <input wire:model.defer="excel_file" class="block w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
            <div class="self-end">
              <button class="btn btn-primary" type="submit" >Valider</button>
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
                <th class="capitalize">#</th>
                @foreach($firstRow as $head)
                <th class="capitalize  @if( count($listeRecu) && ( ($head== "Nouveau Solde" )|| ($head== "Action") ) ) hidden @endif ">{{$head}}</th>
                @endforeach
                {{--<th>Doublons</th>
                <th>Action</th>--}}
              </tr>
            </thead>

            @if($ListePayement)
            <tbody>
              @foreach($ListePayement as $index_payement => $information)

              {{-- identifier eleve --}}
              @php
                $eleve = $this->identificationEleve($information);
                //debug($eleve);
              @endphp
              @if($eleve)
                @php
                  $inscription = $eleve->inscription_courante;
                  //debug($inscription);
                @endphp
                <tr>
                  <td class="w-1 mx-1 whitespace-nowrap"> {{substr(str_repeat(0, 2).$loop->iteration,-2)}}  </td>
                  <td>
                    <div class="flex gap-2">
                      {{--
                        <div class="flex lg:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                          <img alt="" data-action="zoom" class="rounded-full" src="{{$eleve->image}}">
                        </div>
                      </div>
                      --}}
                      <a href="{{$eleve->url}}" target="_blank">
                        <div class="font-medium whitespace-nowrap @if($eleve->genre == "Masculin") text-blue-700 dark:text-blue-500 @else text-pink-700 dark:text-pink-500 @endif "> {{$eleve->nom}} </div>
                        <div class="text-slate-500 text-xs whitespace-nowrap">{{$eleve->prenoms}}</div>
                      </a>
                    </div>
                  </td>
                  <td>
                    <div >
                      @php
                        $ecolage = $inscription->fraisEcolage() ;
                        $balance = $inscription->getBalance();
                      @endphp
                      <div class="font-bold whitespace-nowrap "> {{$ecolage}} F CFA </div>
                      <div class="text-slate-500 text-xs whitespace-nowrap"> 
                        <span class="font-semibold @if( $balance <= 0.0) text-emerald-500 @endif ">{{($ecolage - $balance)}}F</span> payé</div>
                    </div>

                  </td>
                  <td>
                    <div>
                      @php
                        $frais_inscription = $inscription->fraisInscription() ;
                      @endphp
                      <div class="font-bold whitespace-nowrap @if($inscription->inscriptionCondition()) text-emerald-500 @else text-danger  @endif"> {{$frais_inscription}} FCFA </div>
                      <div class="text-slate-500 text-xs whitespace-nowrap"> 
                        @if($inscription->isInscriptionPaye())
                          <span class="font-semibold  text-emerald-500 ">{{($frais_inscription)}}F</span> payé
                        @else
                          <span class="font-semibold ">0F</span> payé
                        @endif
                      </div>
                    </div>
                  </td>

                  <td>
                    <span class="font-semibold">{{$information[$indexInscription]}}</span>
                  </td>


                  @php
                    $somme_tranche = 0.0;
                  @endphp

                  @foreach($liste_index_tranche as $tranche)
                  @php $somme_tranche += $information[$tranche] ; @endphp
                  <td>{{$information[$tranche]}}</td>
                  @endforeach

                  {{--Solde Actuelle--}}

                  

                  {{--Solde Apres Payement--}}
                  <td class=" @if(count($listeRecu)) hidden @endif">
                    <span class=" @if( ($inscription->getBalance() - $somme_tranche) <= 0.0) font-semibold text-emerald-500 @endif "> {{$inscription->getBalance() - $somme_tranche}} F</span>
                  </td>


                  {{-- Action --}}

                  <td class="table-report__action @if(count($listeRecu)) hidden @endif">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center text-danger" href="javascript:;" wire:click="confirmRetrait(@js(
                      [$index_payement,$eleve->nom_complet]))">
                        <x-icon name="trash" class="w-4 h-4 mr-2" /> Rétirer 
                      </a>
                    </div>
                  </td>

                </tr>
              @else
                @php
                  //debug($inscription);
                  $nom_complet = "{$information[$indexNom]}, {$information[$indexPrenoms]}" ;
                @endphp
                <tr class="bg-danger/5">
                  <td class="w-1 mx-1 whitespace-nowrap"> {{substr(str_repeat(0, 2).$loop->iteration,-2)}}  </td>
                  <td>
                    <div class="flex gap-2">
                      <div>
                        <div class="font-medium whitespace-nowrap "> {{$information[$indexNom]}} </div>
                        <div class="text-slate-500 text-xs whitespace-nowrap">{{$information[$indexPrenoms]}}</div>
                      </div >
                    </div>
                  </td>
                  <td colspan="{{(4+count($liste_index_tranche))}}">
                    <div class="text-center" >
                      <div class="flex items-center justify-center text-danger">
                        Aucun éleve trouvé avec ce nom dans la classe
                      </div>
                      <div class="flex items-center justify-center text-danger">
                        L'enregistrement sera ignoré
                      </div>
                    </div>
                  </td>
                  
                  {{-- Action --}}
                  <td class="table-report__action  @if(count($listeRecu)) hidden @endif">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center text-danger" href="javascript:;" wire:click="confirmRetrait(@js(
                      [$index_payement,$nom_complet]))">
                        <x-icon name="trash" class="w-4 h-4 mr-2" /> Rétirer 
                      </a>
                    </div>
                  </td>
                </tr>
              @endif

              @endforeach
            </tbody>
            
            @endif

          </table>
          @endif
        </main>

        @if(($salle) && ($ListePayement))
          <section class="my-4 p-2 print:hidden">
            <div class="alert alert-primary show mb-2" role="alert">
              <div class="flex items-center">
                <div class="font-medium text-lg">Importer La liste</div>
              </div>
              <div class="mt-3 flex justify-end">
                <div class="self-end">
                  @if(!count($listeRecu))

                  <button  class="btn btn-primary bg-white/10" 
                  onclick="
                        window.$wireui.confirmDialog({
                          title: 'Enregistrer Les Payements?',
                          description: `Enregistrer les payements dans cette liste ?` ,
                          icon: 'question',
                          accept: {
                              label: 'Oui, Enregistrer',
                              color: 'primary',
                              execute: () =>  @this.enregistrerPayement(),
                          },
                          reject: {
                              label: 'Non, Annuler',
                              method: 'cancel'
                          }
                        })">
                    Enregistrer les payements
                  </button>
                  @else
                    <span class="mx-2">Les données affichées ont éte enregistrées</span>
                    <button onclick="document.location.reload();" class="btn btn-primary bg-white/10">
                      Actualiser la page
                    </button>
                  @endif
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
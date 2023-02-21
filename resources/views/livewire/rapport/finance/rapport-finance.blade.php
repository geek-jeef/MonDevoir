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
        <div class="intro-y mt-2 self-end flex flex-col-reverse sm:flex-row items-center print:hidden">
          <div class="">
            <form class="flex gap-x-3" wire:submit.prevent="filtrer">
              <x-datetime-picker
                label="Du"
                display-format="DD/MM/YYYY"
                wire:model.defer="filtre_date_from"
                data-daterange="true"
                without-tips="true"
                without-timezone="true"
                without-time="true"
                required
              />
              <x-datetime-picker
                label="Au"
                display-format="DD/MM/YYYY"
                wire:model.defer="filtre_date_to"
                data-daterange="true"
                without-tips="true"
                without-timezone="true"
                without-time="true"
                required
              />
              <button class="self-end btn btn-primary" type="submit">
                Valider
              </button>
            </form>
          </div>
        </div>
        <div class="mt-2 self-end flex gap-2">
          <div class="w-full sm:w-auto relative mr-auto sm:mt-0">
            <x-icon class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" name="search" />
            <input type="text" wire:model.debounce.1500ms="recherche" class="form-control w-full sm:w-54 box px-10" placeholder="Recherche">
            <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
              <x-icon class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" name="adjustments" />
              <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                <div class="dropdown-content">
                  <form class="grid grid-cols-12 gap-4 gap-y-3 p-3 border-b" wire:submit.prevent="filtrer">
                    
                    <div class="col-span-12">
                      {{--
                      <x-select
                        label="Choisir Un Membre du Personnel"
                        wire:model.defer="filtre_type"
                        placeholder="Membre du Personnel"
                        :async-data="route('api.personnels.index')"
                        :template="[
                            'name'   => 'user-option',
                            'config' => ['src' => 'profile_image']
                        ]"
                        option-label="nom_complet"
                        option-value="id"
                        option-description="phone"
                        multiselect
                      />--}}

                      <x-select label="Choisir des Types de Depense" multiselect
                        wire:model.defer="filtre_type">
                        <x-select.option label="Toutes" value="Toutes" />
                        @foreach($financeSettings->types_depense as $types_depense  )
                          <x-select.option label="{{$types_depense}}" value="{{$types_depense}}" />
                        @endforeach
                      </x-select>
                    </div>

                    <div class="col-span-12">
                      <x-select label="Enregistrement Annulé" wire:model.defer="filtre_annulation">
                        <x-select.option label="Tout" value="" />
                        <x-select.option label="Annulé Seulement" value="Annulé Seulement" />
                        <x-select.option label="Valide Uniquement" value="Valide Uniquement" />
                      </x-select>
                    </div>
                    <div class="col-span-12">
                      <x-select label="Facture sur Enregistrement" wire:model.defer="filtre_facture">
                        <x-select.option label="Tout" value="" />
                        <x-select.option label="Avec Facture Uniquement" value="Avec Facture Uniquement" />
                        <x-select.option label="Sans Facture Uniquement" value="Sans Facture Uniquement" />
                      </x-select>
                    </div>
                    <div class="col-span-12 flex items-center mt-3">
                      <button type="submit" class="btn btn-primary w-32 ml-2">Filtrer</button>
                    </div>
                  </form>
                  <div class="grid grid-cols-12 gap-4 gap-y-3 p-3" >
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
          <button class="self-end flex btn btn-primary" wire:click="downloadExcel" >
            <x-icon name="document-report" class="w-4 h-4 mr-2"  /> Exporter Excel 
          </button>

          <button title="Supprimer les filtres" class="tooltip self-end flex btn btn-primary" wire:click="resetFiltre" >
            <x-icon name="minus-circle" class="w-5 h-5"  />
          </button>

        </div>
      </div>
    </div>
  </div>

  <div wire:loading class="text-center w-full mt-3 print:hidden" >
    <x-loading color="#fff" />
  </div>

  {{debug('$data_information')}}
  {{debug($data_information)}}
  {{debug('End $data_information')}}

  @if($data_information)
    {{debug('Inside If $data_information')}}

    @foreach($data_information as $sheet)

      {{debug('$sheet')}}
      {{debug($sheet)}}
      {{debug($sheet->get('type'))}}

      {{debug('end $sheet')}}

      @if($sheet->get('type') == 'rapport-finance')
        <div wire:loading.remove class="flex justify-center print:m-0 print:p-0" @if(!$loop->last) style="page-break-after: always;" @endif>
          <div class="intro-y .module box overflow-hidden mt-5 p-4 print:m-0 print:shadow-none" style="width: 29.69cm; min-height: 20.9cm;">
            <div  class=".module-inside flex-col justify-around">
              

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
                          <td title="{{$data->get('name')}}" colspan="{{$data->get('colspan')}}" > {{$data->get('value')}} </td>
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

  <x-empty-state wire:loading.remove class="mt-5 border border-white" titre="Rapport Finance" message="Aucune donnée à Afficher" />
  @endif 
</section>

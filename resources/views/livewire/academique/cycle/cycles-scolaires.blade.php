<section>
    <div class="intro-y flex items-center mt-8 print:hidden">
        <h2 class="text-lg font-medium mr-auto">Cycles Scolaires</h2>
        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
            <a href="javascript:;" class="btn btn-outline-primary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-cycle"> Créer Un Cycle Scolaire
              <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                <x-icon name="plus" class="w-6 h-6" solid />
              </span>
            </a>
        </div>
    </div>

    <div class="intro-y tab-content mt-5 print:shadow-none print:p-0 print:m-0 ">
      <div class="grid grid-cols-12 gap-6 mt-5 print:p-0 print:m-0">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 print:hidden">
          <div class="hidden md:block mx-auto text-slate-500">
            {{count($cycles)}} Cycles Scolaires enregistées pour l'année {{session('nom_annee_en_cours')}} 
          </div>
          <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0 print:hidden">
            <div class="dropdown">
              <button class="dropdown-toggle btn btn-primary px-2 " aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center">
                 <x-icon class="w-4 h-4" name="share" /> 
                </span>
              </button>
              <div class="dropdown-menu w-40 print:hidden">
                <ul class="dropdown-content print:hidden">
                  <li>
                    <a  onclick="window.print()" href="javascript:;" class="dropdown-item">
                      <x-icon name="printer" class="w-4 h-4 mr-2" /> Imprimer
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible print:overflow-x-visible print:m-0 print:p-4 print:w-full">  
          <x-print.page-header titre="Liste des Cycles Academiques" />
                <table class="table table-report -mt-2 print:my-2 print:table-bordered print:table-striped print:border-spacing-0">
                  <thead>
                    <tr>
                      <th class="whitespace-nowrap">Cycle</th>
                      <th class="text-center whitespace-nowrap">Responsable</th>

                      <th class="text-center whitespace-nowrap">Nombre de Classe</th>
                      <th class="text-center whitespace-nowrap">Nombre de Salle</th>
                      <th class="text-center whitespace-nowrap"> Ouvert Pour l'Année</th>
                      <th class="text-center whitespace-nowrap print:hidden">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cycles as $cycle)
                      <tr class="intro-x print:shadow-none print:border-b">
                        <td class="mr-auto">
                          <a href="{{ route('academique.cycle.show',[$cycle->id])}}" class="flex">
                            <div class="self-center w-10 h-10 image-fit mr-2">
                              <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar',[$cycle->nom_cycle])}}" title="{{ $cycle->nom_cycle}}" />
                            </div>
                            <div class="self-center ml-5 hover:text-primary hover:font-bold">
                              <div class="font-medium whitespace-nowrap">{{ $cycle->nom_cycle}}</div>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $annee->nom_annee }}</div>
                            </div>
                          </a>
                        </td>
                        <td class="text-center whitespace-nowrap">{{ $cycle->directeur->nom_complet }}</td>
                        <td class="text-center">{{ $cycle->classes->count() }}</td>
                        <td class="text-center">{{ $cycle->classes->count() }}</td>
                        <td class="w-40 whitespace-nowrap">
                          <div class="flex items-center justify-center {{ ($cycle->ouvert_cette_annee) ? 'text-success' : 'text-danger' }}">
                            <x-icon name="{{($cycle->ouvert_cette_annee)?'lock-open':'lock-closed'}}" class="w-4 h-4 mr-2" /> {{ ($cycle->ouvert_cette_annee) ? 'Ouvert' : 'fermé' }}
                          </div>
                        </td>
                        <td class="table-report__action w-56 print:hidden">
                          <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"
                              onclick="
                                window.$wireui.confirmDialog({
                                  title:`Confirmation`,
                                  description: `Afficher le Cycle Scolaire {{ $cycle->nom_cycle}} ?` ,
                                  icon: 'question',
                                  accept: {
                                      label: 'Oui, Afficher',
                                      execute: () => {window.location.href = '{{route('academique.cycle.show',[$cycle->id])}}';}
                                  },
                                  reject: {
                                      label: 'Non',
                                  }
                                });"
                              >
                              <x-icon name="eye" class="w-4 h-4 mr-1" /> afficher
                            </a>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
          <x-print.page-footer />
        </div>
      </div>
    </div>

    <div id="formulaire-creation-cycle" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <a data-tw-dismiss="modal" href="javascript:;">
                  <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
              </a>
              <div class="modal-header">
                  <h2 class="font-medium text-base mr-auto">Enregistrer une Cycle Scolaire</h2>
              </div>
              <div class="modal-body">
                <livewire:forms.cycle.create-cycle-form />
              </div>
              <div class="modal-footer w-full bottom-0">
                  <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
              </div>
          </div>
      </div>
    </div>
</section>

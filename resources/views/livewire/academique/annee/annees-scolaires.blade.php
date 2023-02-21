<section>
    <div class="intro-y flex items-center mt-8 print:hidden">
        <h2 class="text-lg font-medium mr-auto">Années Scolaires</h2>
        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
            <a href="javascript:;" class="btn btn-outline-primary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-annee"> Créer Un Année Scolaire
              <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                <x-icon name="plus" class="w-6 h-6" solid />
              </span>
            </a>
        </div>
    </div>
    <div class="intro-y tab-content mt-5 print:shadow-none print:m-0 ">
      <div class="grid grid-cols-12 gap-6 mt-5 print:shadow-none print:m-0">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 print:hidden">
          <div class="hidden md:block mx-auto text-slate-500"> {{count($annees)}} Années Scolaires enregistées</div>

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

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible print:overflow-x-visible print:m-0 print:p-0 print:w-full">
          
          <div id="header_for_print" class="hidden print:block print:p-0">
            <header wire:ignore class="grid grid-cols-12 gap-3 pt-4 px-4 hidden print:grid print:p-0">
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
            <div class="whitespace-nowrap text-center">
              <div class="uppercase underline text-xl font-bold whitespace-nowrap decoration-1 decoration-double underline-offset-4"> Liste Année Scolaire </div>
            </div>
          </div>
          <table class="table table-report -mt-2 print:mt-2 print:table-bordered print:table-striped print:border-spacing-0">
            <thead>
              <tr>
                <th class="whitespace-nowrap">ID</th>
                <th class="text-center whitespace-nowrap">Nom Année</th>
                <th class="text-center whitespace-nowrap">Responsable</th>
                <th class="text-center whitespace-nowrap">Durée (Début / Fin) </th>
                <th class="text-center whitespace-nowrap"> Ouvert Pour Inscription</th>
                <th class="text-center whitespace-nowrap">Année Active</th>
                <th class="text-center whitespace-nowrap print:hidden">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($annees as $annee)
                <tr class="intro-x print:shadow-none print:border-b " style="page-break-inside: avoid;">
                  <td class="text-center">{{$annee->id}}</td>
                  <td>
                    <a href="javascript:;" class="font-medium whitespace-nowrap">{{ $annee->nom_annee}}</a>
                  </td>
                  <td class="text-center whitespace-nowrap">
                    @if($annee->directeur_id)
                    <a href="{{route('personnel.show',[$annee->directeur_id])}}" class="font-medium whitespace-nowrap">{{ $annee->directeur->nom_complet}}</a>
                    @endif
                  </td>

                  <td class="text-center"> De <span class="text-primary" >{{ date('d/m/Y', strtotime($annee->date_debut))  }}</span>  à <span class="text-primary" >{{date('d/m/Y', strtotime($annee->date_fin))}}</span>  </td>
                  <td class="w-40">
                    <div class="flex items-center justify-center {{ $annee->ouvert_pour_inscription ? 'text-success' : 'text-danger' }}">
                      <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $annee->ouvert_pour_inscription ? 'Ouvert' : 'fermé' }}
                    </div>
                  </td>
                  <td class="w-40">
                    <div class="flex items-center justify-center {{ $annee->active ? 'text-success' : 'text-danger' }}">
                      <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $annee->active ? 'active' : 'inactive' }}
                    </div>
                  </td>
                  <td class="table-report__action w-56 print:hidden">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center mr-3" href="javascript:;" 
                        onclick="
                        window.$wireui.confirmDialog({
                          title:`Confirmation`,
                          description: `Afficher l'Année Scolaire {{ $annee->nom_annee}} ?` ,
                          icon: 'question',
                          accept: {
                              label: 'Oui, Afficher',
                              execute: () => {window.location.href = '{{route('academique.annee.show',[$annee->id])}}';}
                          },
                          reject: {
                              label: 'Non',
                          }
                        });"
                        >
                        <i data-feather="eye" class="w-4 h-4 mr-1"></i> afficher
                      </a>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div id="footer_for_print" class="hidden print:flex justify-between print:py-2">
            <div class="p-2 font-bold text-xs hidden print:block"> {{ \Hp::annee()->nom_annee }} </div>
            <div class="p-2 font-bold text-xs hidden print:block"> {{ $parametres_generaux->nom_ecole }} </div>
            <div class="p-2 font-bold text-xs hidden print:block"> {{ now() }} </div>
          </div>
        </div> 
      </div>
    </div>
    <div id="formulaire-creation-annee" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <a data-tw-dismiss="modal" href="javascript:;">
                  <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
              </a>
              <div class="modal-header">
                  <h2 class="font-medium text-base mr-auto">Enregistrer une Année Scolaire</h2>
              </div>
              <div class="modal-body">
                <livewire:forms.annee.create-annee-form />
              </div>
              <div class="modal-footer w-full bottom-0">
                  <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
              </div>
          </div>
      </div>
    </div>
</section>

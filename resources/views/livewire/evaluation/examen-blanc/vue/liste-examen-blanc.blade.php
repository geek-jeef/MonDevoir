<div>
  <div class="intro-y tab-content mt-5">
    <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <div class="hidden md:block mx-auto text-slate-500"> {{count($examens)}} Examens Blancs enregistées </div>
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
      <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
        <table class="table table-report -mt-2">
        <thead>
          <tr>
          <th class="whitespace-nowrap">ID</th>
          <th class="text-center whitespace-nowrap">Nom Examen</th>
          <th class="text-center whitespace-nowrap">Responsable</th>
          <th class="text-center whitespace-nowrap">Année</th>
          <th class="text-center whitespace-nowrap">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($examens as $examen)
          <tr class="intro-x">
            <td class="text-center">{{$examen->id}}</td>
            <td><a href="javascript:;" class="font-medium whitespace-nowrap">{{ $examen->nom_examen}}</a></td>
            <td class="text-center">{{$examen->responsable['nom']}}</td>
            <td class="text-center">{{$examen->annee->nom_annee}}</td>
            <td class="table-report__action w-56">
            <div class="flex justify-center items-center">
              
              <a class="flex items-center mr-3" href="javascript:;" 
                        onclick="
                        window.$wireui.confirmDialog({
                          title:`Confirmation`,
                          description: `Afficher l\'Examen {{ $examen->nom_examen}} ?` ,
                          icon: 'question',
                          accept: {
                              label: 'Oui, Afficher',
                              execute: () => {window.location.href = '{{route('examen_blanc.show',[$examen->id])}}';}
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
      </div>
    </div>
  </div>
</div>
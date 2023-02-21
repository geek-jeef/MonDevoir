<div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
      {{--<button class="btn btn-primary shadow-md mr-2">Trier La Liste</button>
      <div class="dropdown">
        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
          <span class="w-5 h-5 flex items-center justify-center">
            <x-icon name="filter" class="w-4 h-4" />
          </span>
        </button>
        <div class="dropdown-menu w-40">
          <ul class="dropdown-content">
            <li>
              <a href="" class="dropdown-item">
                <i data-feather="users" class="w-4 h-4 mr-2"></i> Add Group
              </a>
            </li>
            <li>
              <a href="" class="dropdown-item">
                <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Ancien Employé ?
              </a>
            </li>
            
          </ul>
        </div>
      </div>
      --}}
      <div></div>
      {{--<div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>--}}
      {{ $eleves->links('components.pagination.custom-indicator') }}
      <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <div class="w-56 relative text-slate-500">
          <input type="text" class="form-control w-56 box pr-10" wire:model="recherche" placeholder="Recherche...">
          <x-icon name="search" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" />
        </div>
      </div>
    </div>
    
    
    @foreach ($eleves as $eleve)
      <div class="intro-y col-span-12 md:col-span-6"  wire:key="payement-eleve-{{ $eleve->eleve_id }}">
        @php 
          $eleveModel = App\Models\Eleve::find($eleve->eleve_id);
          $valeur_progression = $eleveModel->inscription_courante->valeurProgressionEcolage();
        @endphp
        <div class="box">
          <div class="flex flex-col lg:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
              <img alt="" class="rounded-full" src="{{ route('avatar',[$eleve->nom_complet]) }}">
            </div>
            <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
              <a href="javascript:;" class="font-medium">{{$eleve->nom_complet}}</a>
              <div class="text-slate-500 text-xs mt-0.5">{{$eleve->nom_classe}}/{{$eleve->nom_salle}}</div>
            </div>
            <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
              @foreach($eleveModel->inscription_courante->tags as $tag)
                <span title="{{$tag->name}}" class="tooltip px-2 py-1 rounded-full bg-primary text-white mr-1 cursor-pointer uppercase self-center" >
                  {{$tag->getTranslation('name', 'court')}}
                </span>
              @endforeach
              @if($valeur_progression == 0)
                <a href="javascript:;" class="w-8 h-8 rounded-full flex items-center justify-center ml-2 text-white zoom-in tooltip bg-danger" title="Compte Non Payé">
                  <x-icon name="x-circle" class="w-4 h-4" />
                </a>
              @elseif($valeur_progression == 100)
              <a href="javascript:;" class="w-8 h-8 rounded-full flex items-center justify-center ml-2 text-white zoom-in tooltip bg-success" title="Compte Soldé">
                <x-icon name="badge-check" class="w-4 h-4" />
              </a>
              @elseif($valeur_progression > 100)
              <a href="javascript:;" class="w-8 h-8 rounded-full flex items-center justify-center ml-2 text-white zoom-in tooltip bg-info" title="Remboursement en Attente">
                <x-icon name="badge-check" class="w-4 h-4" />
              </a>
              @else
                <a href="javascript:;" class="w-8 h-8 rounded-full flex items-center justify-center ml-2 text-white zoom-in tooltip bg-warning" title="En Cours">
                  <x-icon name="exclamation-circle" class="w-4 h-4" />
                </a>
              @endif

              @if($eleveModel->inscription_courante->needPayementIncription() && (!$eleveModel->inscription_courante->isInscriptionPaye() ))
                <a href="javascript:;" class="w-8 h-8 rounded-full flex items-center justify-center ml-2 text-white zoom-in tooltip bg-danger" title="Frais d'inscription non payé">
                  <x-icon name="clipboard-check" class="w-4 h-4" />
                </a>
              @endif

            </div>
          </div>
          <div class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
            <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
              <div class="flex text-slate-500 text-xs">
                <div class="mr-auto">Progression</div>
                <div> {{$valeur_progression}} %</div>
              </div>
              <div class="progress h-2 mt-2">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{$valeur_progression}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$valeur_progression}}%;"></div>
              </div>
            </div>
            <a class="btn btn-primary py-1 px-2 mr-2 "  wire:click="$emitTo('forms.payement.enregistrer-payement-ecolage-form', 'create-payement-for-eleve' , {{$eleve->eleve_id}} )"> Enregistrer Un Payement</a>
          </div>
        </div>
      </div>
    @endforeach
    

    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center justify-between">
      {{ $eleves->links() }}
      <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
        @foreach([2,5,12,16,24,32] as $nb)
          <option {{ ($perPage == $nb )? 'selected' : ''}} >{{$nb}}</option>
        @endforeach
      </select>
    </div>
  </div>
</div>
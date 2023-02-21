<div>
  <h2 class="intro-y text-lg font-medium mt-5">Actions</h2>
    {{--
    }}  <div class="intro-y col-span-12 md:col-span-6"  wire:key="payement-eleve-{{ $eleve->eleve_id }}">
        @php 
          $eleveModel = App\Models\Eleve::find($eleve->eleve_id);
          $valeur_progression = $eleveModel->valeurProgressionEcolage($eleve->annee_academique_id) ;
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

              @if($valeur_progression == 0)
                <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-white zoom-in tooltip bg-danger" title="Compte Non Payé">
                  <x-icon name="x-circle" class="w-4 h-4" />
                </a>
              @elseif($valeur_progression == 100)
              <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-white zoom-in tooltip bg-success" title="Compte Soldé">
                <x-icon name="badge-check" class="w-4 h-4" />
              </a>
              @elseif($valeur_progression > 100)
              <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-white zoom-in tooltip bg-info" title="Remboursement en Attente">
                <x-icon name="badge-check" class="w-4 h-4" />
              </a>
              @else
                <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-white zoom-in tooltip bg-warning" title="En Cours">
                  <x-icon name="exclamation-circle" class="w-4 h-4" />
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
    --}}
</div>
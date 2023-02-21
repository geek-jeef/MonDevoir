<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
    <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>

  {{--<div class="mt-3">
    <x-input label="Nom du Cycle Scolaire" wire:model.defer="cycle.nom_cycle" placeholder="exemple: Primaire , Collège ..." required />
  </div> --}}
  <div class="mt-3">
    <div class="overflow-x-auto">
      @if($eleve)
      <table class="table table-bordered table-striped table-primary">
        <tbody>
          <tr>
            <td>ID élève</td>
            <td>{{$eleve->id}}</td>
          </tr>
          <tr>
            <td>Nom et Prénoms</td>
            <td>
              <a title="Afficher le Profil" class="font-bold hover:underline hover:text-primary " href="{{route('eleve.show',[$eleve->id])}}" target="_blank">
                {{$eleve->nom_complet}}
              </a>
               
            @foreach($eleve->inscription_courante->tags as $tag)
               | <span title="{{$tag->name}}" class="tooltip px-2 py-1 rounded-full bg-primary text-white mr-1 cursor-pointer uppercase" >
              {{$tag->getTranslation('name', 'court')}}
              </span>
            @endforeach
          </td>
          </tr>
          <tr>
            <td>Date de Naissance</td>
            <td>{{date('d/m/Y', strtotime($eleve->date_de_naissance)) }}</td>
          </tr>
          <tr>
            <td>Année Academique</td>
            <td> {{$annee->nom_annee}} </td>
          </tr>
          <tr>
            <td>Classe</td>
            <td> {{$classe->nom_classe}} / {{$salle->nom_salle}} </td>
          </tr>
          @php
            $systeme = $eleve->inscription_courante->getSystemeEcolage();
            $balance = $eleve->inscription_courante->getBalance();
          @endphp
          <tr>
            <td>Systeme de Payement (montant) </td>
            <td>
              @if($systeme)
              <div title="{{$systeme->description}}" class="font-medium whitespace-nowrap cursor-pointer">{{$systeme->titre}}</div>
              <div class="text-slate-500 text-xs whitespace-nowrap">
              <span class="font-bold text-primary cursor-pointer" title="Montant Ecolage" >{{$systeme->montant}} FCFA</span> <span class="mx-1 font-bold cursor-pointer" title="Frais d'inscription" >| {{$systeme->inscription}} FCFA</span>
              @if(!$eleve->inscription_courante->systemeEcolage)
                <span class="mx-1" >| herité de 
                @if($eleve->inscription_courante->salle->systemeEcolage) 
                  <a class="text-primary" href="{{route('academique.salle.show',[$eleve->inscription_courante->salle_id])}}">
                  {{$eleve->inscription_courante->salle->nom_salle}} 
                  </a>
                @elseif($eleve->inscription_courante->salle->classe->systemeEcolage)
                  <a class="text-primary" href="{{route('academique.classe.show',[$eleve->inscription_courante->salle->classe->id])}}">
                  {{$eleve->inscription_courante->salle->classe->nom_classe}} 
                  </a>
                @else
                  <a class="text-primary" href="{{route('academique.cycle.show',[$eleve->inscription_courante->salle->classe->cycle->id])}}">
                  {{$eleve->inscription_courante->salle->classe->cycle->nom_cycle}} 
                  </a>
                @endif 
                </span>  
              @endif
              </div>
              @else
              <span class="font-semibold text-danger"> Aucun Systeme de Payement Défini </span>
              @endif
            </td>
          </tr>
          <tr>
            <td>Restant à payé</td>
            <td><span class="font-semibold text-primary">{{$balance}} FCFA</span></td>
          </tr>
        </tbody>
      </table>
      @endif
    </div>
  </div>
  <x-errors class="mt-3"/>
  @if( ($eleve) && ($systeme) )



    @if($balance != 0)

      <form wire:submit.prevent="save">
        <div class="mt-3">
        <x-input label="Montant à Payé" wire:model.defer="montant" right-icon="currency-dollar" required />
        </div>

        <div class="mt-3">
        <x-input label="Montant à Payé (Confirmer?) " wire:model.defer="montant_confirmation" right-icon="currency-dollar" required />
        </div>
        <div class="mt-3">
        <button class="btn btn-primary" type="submit">Enregistrer</button>
        </div>
      </form>
    @else
      <div class="mt-3">
      <x-small-empty-state message="Cet Eleve a soldé son compte" />
      </div>
    @endif

    @if($eleve->inscription_courante->needPayementIncription() && (!$eleve->inscription_courante->isInscriptionPaye() ))
      <div class="mt-3 box p-4 bg-primary w-full" >
        <div class="flex flex-wrap gap-3">
          <div class="mr-auto">
            <div class="text-white text-opacity-70 dark:text-slate-300 flex items-center leading-3">
              Payer L'inscription ?
            </div>
            <div class="text-white relative text-2xl font-medium leading-5 pl-4 mt-3.5">
               {{$systeme->inscription}} FCFA
            </div>
          </div>
          <button class="flex items-center justify-center px-5 h-12 rounded-full bg-white dark:bg-darkmode-300 bg-opacity-20 hover:bg-opacity-30 text-white" wire:click="confirmPayementInscription" >
            Payer <x-icon name="clipboard-check" class="w-6 h-6 ml-2" /> 
          </button>
        </div>
      </div>
    @endif




  @else
    <div class="mt-3">
    <x-small-empty-state message="Veuillez Attribuer Un Système De Payement à l'eleve ou à sa classe" />
    </div>
  @endif
</div>
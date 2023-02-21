<section>

  {{-- 

<div class="p-0.5 text-lg font-medium text-primary ">{{$parametres_generaux->nom_ecole}}</div>
              <div class="text-base text-slate-500 capitalize">N° employeur: {{$parametres_finance->id_employeur}}</div>
              <div class="mt-1">Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }}</div>
              <div class="mt-1 capitalize">
                <span class="capitalize">{{$parametres_generaux->ville}}</span>
                -
                <span  class="uppercase">{{$parametres_generaux->pays}}</span>
              </div>


   --}}
<div class="flex-col border border-primary p-1 relative text-small z-10" style="width: 8.50cm; height: 5.4cm;">
  <div class="grid grid-cols-12 gap-x-1 border-b-2 border-slate-200">
    <div class="col-span-2">
      <img src="{{asset('assets/Flag.png')}}" class="h-8">
    </div>
    <div class="col-span-8">
      <div class="flex justify-center">
        <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-8">
      </div>
    </div>
    <div class="col-span-2">
      <img src="{{asset('assets/logo/icon3.png')}}" class="h-8">
    </div>
    <div class="col-span-12 text-center">
      <span class="whitespace-nowrap">
        <span class="capitalize">{{$parametres_generaux->ville}}</span>-<span  class="uppercase">{{$parametres_generaux->pays}}</span> | Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }}</span>
    </div>
  </div>
  <div class="grid grid-cols-12 gap-x-1">
    <div class="col-span-4">
      <div class="flex-col gap-1">
        <div class="whitespace-nowrap text-center" ><span class="text-blue-700" >Classe:</span> {{$eleve->salle_annee($annee)->nom_salle}} </div>
        <div class="flex justify-center">
          <div class="border border-slate-200 rounded p-0.5">
            <img src="{{ ($eleve->photo)? $eleve->photo->original_url : asset('assets/eleve/'.$eleve->genre.'.png')}}" class="aspect-[2/3] h-[3cm] rounded">
          </div>
        </div>
        <div class="whitespace-nowrap text-center" ><span class="text-blue-700" >N° Mlle:</span> {{$eleve->id}} </div>
      </div>
    </div>
    <div class="col-span-8">
      <div class="flex-col gap-1">
        <div class="py-0 flex-col text-center">
          <div class="py-0 text-red-700 uppercase font-semibold">Carte D'Identité Scolaire</div>
          <div class="py-0 font-medium"> {{$annee->nom_annee}} </div>
        </div>
        <div>
          <table class="">
            <tbody>
              <tr>
                <td class="p-0 text-blue-700 font-medium">Nom:</td>
                <td class="p-0 whitespace-nowrap">{{$eleve->nom}}</td>
              </tr>
              <tr>
                <td class="p-0 text-blue-700 font-medium">Prénoms:</td>
                <td class="p-0 whitespace-nowrap">{{$eleve->prenoms}}</td>
              </tr>
              <tr>
                <td class="p-0 text-blue-700 font-medium">Né(e) le:</td>
                <td class="p-0 whitespace-nowrap">{{date('d/m/Y', strtotime($eleve->date_de_naissance))}}</td>
              </tr>
              <tr>
                <td class="p-0 text-blue-700 font-medium uppercase">à:</td>
                <td class="p-0 capitalize">{{$eleve->lieu_de_naissance}}</td>
              </tr>
              <tr>
                <td class="p-0 text-blue-700 font-medium">Sexe:</td>
                <td class="p-0 capitalize whitespace-nowrap">{{$eleve->genre}}</td>
              </tr>
              <tr>
                <td class="p-0 text-blue-700 font-medium">Nationalité:</td>
                <td class="p-0 whitespace-nowrap capitalize">{{$eleve->nationalite}} </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td class="p-0 text-red-700 underline" colspan="2">Personne à Prevenir :</td>
              </tr>
              <tr>
                <td class="p-0" colspan="2">
                  @php
                    $tuteur = $eleve->tuteurs; // collection
                    if( !($tuteur) ){
                      $tuteur = false;
                    }elseif($tuteur->count() == 1){
                      $tuteur = $tuteur->first();
                    }elseif($tuteur->count() >= 2){
                      // get tuteur principal form data
                      $tuteur = $tuteur->first();
                    }else{
                      $tuteur = false;
                    }
                  @endphp
                  @if($tuteur)
                    <div>
                      {{$tuteur->nom}}
                    </div>
                    <div class="ml-4">
                      {{$tuteur->phone_primaire}}
                    </div>
                  @endif
                </td>
              </tr>
            </tfoot>
          </table>        
        </div>
      </div>
    </div>
  </div>

  <div class="absolute bottom-0 right-0 flex-col p-1 z-[-1]">
    <div class="flex justify-end">
      @if($eleve->salle_annee($annee)->cycle->directeur->tampon)
        <img src="{{$eleve->salle_annee($annee)->cycle->directeur->tampon->original_url}}" class="w-16 h-16 ">
      @endif
    </div>
    <div class="text-center">{{$eleve->salle_annee($annee)->cycle->directeur->nom_complet}}</div>
    <div class="text-center">{{$eleve->salle_annee($annee)->cycle->directeur->phone}}</div>
  </div>
</div>
</section>

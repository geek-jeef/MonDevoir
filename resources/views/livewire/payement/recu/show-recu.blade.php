<section>
  <style type="text/css">
      .module {
        background-image:url({{asset('devoir.svg')}});;
      }
  </style>
  <div class="flex justify-center">
    <div class="module intro-y flex flex-col box overflow-hidden p-3" style="width: 20.9cm; height: 29.6cm;">
      @foreach(['Caisse','Client'] as $copie)
      <div class="flex flex-col {{ ($loop->first)?'  border-b-black border-b-2 border-dashed' : ''}} p-3" style="height: 14.8cm;">
        <header class="grid grid-cols-12 gap-2 mb-3">
          <div class="col-span-5 flex-col justify-between">
            <div class="flex justify-center mb-2">
              <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-12 w-auto">
            </div>
            <div class="text-center text-sm ">
              {{$parametres_generaux->programme}}
            </div>
            <div class="text-center text-sm  whitespace-nowrap">
              Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }} 
            </div>
            <div class="text-center text-sm  whitespace-nowrap">
              <span class="">{{$parametres_generaux->poste}}</span>
              <span class=""> {{$parametres_generaux->ville}} - </span>
              <span class="">{{$parametres_generaux->pays}}</span>
            </div>
          </div>
          <div class="col-span-7 flex flex-col gap-y-1">
            <div class="grid grid-cols-12">
              <div class="col-span-5 flex justify-center">
                <img src="{{asset('assets/logo/icon3.png')}}" class="h-16 w-auto">
              </div>
              <div class="col-span-7 flex justify-end gap-2">
                <div class="uppercase font-bold text-lg py-2">BPF</div>
                <div class="uppercase font-bold text-lg text-center">
                  <div class="bg-slate-100 border-y-2 border-y-black py-2 px-2 w-44">{{$recu->montant_paye}} F</div>
                </div>
              </div>
            </div>
            <div class=" p-2">
              <div class="flex justify-end mr-3">
                <div class="font-semibold text-primary text-3xl mr-3">RECU</div>
                <div class="font-semibold italic uppercase text-2xl mx-3">{{substr(str_repeat(0, 4).$recu->id,-4)}}</div>
              </div>
              <div class="flex justify-end mr-3 font-semibold text-xs ">
                Copie {{$copie}} | ref: {{$enregistrement->ref_no}}
              </div>
            </div>
          </div>
        </header>
        <main class="flex flex-col text-lg gap-y-2">
          <div class="flex gap-x-2">
            <div class="whitespace-nowrap capitalize"> Reçu de M</div>
            <div class="w-full whitespace-nowrap border-b-2 border-b-black border-dotted"></div>
          </div>
          <div class="flex gap-x-2">
            <div class="w-full whitespace-nowrap border-b-2 border-b-black border-dotted"></div>
            <div class="whitespace-nowrap capitalize">la somme de </div>
          </div>
          <div class="flex gap-x-2">
            <div class="w-full whitespace-nowrap bg-slate-100 border-y border-y-black px-2 capitalize">
              {{\Hp::nombreEnLettre($recu->montant_paye)}} francs
            </div>
          </div>
          <div class="flex gap-x-2 ">
            <div class="whitespace-nowrap capitalize">Pour <span class="font-semibold">{{ ($inscription)? 'Incription'  :'Ecolage'}}</span> de L'Elève</div>
            <div class="w-full border-b-2 border-b-black border-dotted">
              <span class="mx-2 font-bold">{{$enregistrement->eleve->nom_complet}}</span>
            </div>
          </div>
          <div class="flex gap-x-2 ">
            <div class="whitespace-nowrap capitalize">Inscrit en Classe de</div>
            <div class="w-full whitespace-nowrap border-b-2 border-b-black border-dotted">
              <span class="mx-2 font-bold">{{$salle->nom_salle}} ({{$salle->cycle->nom_cycle}})</span>
            </div>
              
          </div>
          <div class="flex gap-x-3 justify-around p-2 border">
            <div class="whitespace-nowrap ">
              @php
                $systeme = $enregistrement->eleve->inscription_courante->getSystemeEcolage();
              @endphp
              Total Avance : <span class="mx-2 font-bold">{{$systeme->montant - $enregistrement->balance }} FCFA</span>
            </div>
            <div class="whitespace-nowrap ">
              Restant : <span class="mx-2 font-bold">{{$enregistrement->balance}} FCFA</span>
            </div>
          </div>
        </main>
        <footer class="grid grid-cols-12 gap-x-5">
          <div class="col-span-3 flex justify-center p-2">
            <img src="{{route('qr',[$data_code])}}" style="height: 3cm; width: auto;">
          </div>
          <div class="col-span-9 flex flex-col text-lg gap-y-2">
            <div class="flex gap-x-3 justify-between p-2" style="height: 3cm;">
              <div class="whitespace-nowrap text-xs">
                Signature
              </div>
              <div class="whitespace-nowrap flex flex-col justify-between">
                <div class="text-xs">
                  Cachet
                </div>
                <div class="text-xs">
                  {{$parametres_generaux->ville}}, Le {{date('d/m/Y', strtotime($recu->created_at))}}
                </div>
              </div>
            </div>
          </div>
          <div class=" col-span-12 text-center text-xs">
            NB : l'Ecolage payé n'est ni remboursable et ni transférable. Merci
          </div>
        </footer>
      </div>
      @endforeach
    </div>
  </div>
</section>
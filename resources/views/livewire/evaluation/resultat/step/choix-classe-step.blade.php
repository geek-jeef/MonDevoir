<div>
  <div class="intro-y box py-10 sm:py-20 mt-5">
    <div class="relative before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
      <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
        <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
        <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Choisir L'Examen</div>
      </div>
      <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
        <button class="w-10 h-10 rounded-full btn btn-primary">2</button>
        <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto .text-slate-600 .dark:text-slate-400">Choisir Une Classe</div>
      </div>

      {{--
      <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
        <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">3</button>
        <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Setup Your Business Details</div>
      </div>
      <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
        <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">4</button>
        <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Setup Billing Account</div>
      </div>
      <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
        <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">5</button>
        <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Imprimer Les Bulletins</div>
      </div>
      --}}
    </div>
  </div>

    <div class=" mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
      <div class="intro-y flex flex-col sm:flex-row items-center mt-3">
        <h2 class="text-lg font-medium mr-auto">Choisir un Classe</h2>
      </div>
      <x-errors class="mt-3"/>

      <div class="intro-y mt-5">
          <div class="intro-y">
              <div class="grid grid-cols-12 gap-5 mt-5">
                @foreach($classes as $classe)
                  <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5  {{ ($classe->id == $classe_id)? 'bg-primary' : '' }}  cursor-pointer zoom-in" onclick="Livewire.emit('modifierListeMatiere',{{$classe->id}});">
                    @if($classe->id == $classe_id)
                      <div class="font-medium text-base text-white">{{$classe->nom_classe}}</div>
                      <div class="text-white text-opacity-80 dark:text-slate-500">{{$examen->matieres($classe->id)->count()}} Matiéres Enregistrées</div>
                    @else
                      <div class="font-medium text-base">{{$classe->nom_classe}}</div>
                      <div class="text-slate-500">{{$examen->matieres($classe->id)->count()}} Matiéres Enregistrées</div>
                    @endif
                  </div>
                @endforeach
              </div>

              <div class="mt-3 pt-3 border-t">
                <h2 class="text-lg font-medium mr-auto">Choisir une Matiere</h2>
              </div>
              <div class="grid grid-cols-12 gap-5 mt-3 pt-3">
                @if($matieres)
                  <a href="javascript:;" wire:click="$set('matiere_id', null)" class="intro-x block col-span-6 sm:col-span-3 2xl:col-span-2">
                    <div class="box rounded-md p-3 relative zoom-in {{ ($matiere_id == null)  ? 'border-2 border-primary' : ''}} ">
                      <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                        <div class="absolute top-0 left-0 w-full h-full image-fit">
                          <img alt="" class="rounded-md" src="{{ route('qr',['Toutes Les Matieres']) }}">
                        </div>
                      </div>
                      <div class="block font-medium text-center truncate mt-3"> Toutes les Matieres </div>
                    </div>
                  </a>
                @endif
                @foreach($matieres as $matiere)
                  <a href="javascript:;" wire:click="$set('matiere_id', {{$matiere->id}})" class="intro-x block col-span-6 sm:col-span-3 2xl:col-span-2">
                    <div class="box rounded-md p-3 relative zoom-in {{ ($matiere->id == $matiere_id)  ? 'border-2 border-primary' : ''}}">
                      <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                        <div class="absolute top-0 left-0 w-full h-full image-fit">
                          <img alt="" class="rounded-md" src="{{ route('qr',[$matiere->nom_matiere]) }}">
                        </div>
                      </div>
                      <div class="block font-medium text-center truncate mt-3">{{ $matiere->nom_matiere_court }}</div>
                    </div>
                  </a>
                @endforeach
              </div>

              <div class="flex mt-5">
                  <a href="{{route('resultats')}}" class="btn w-32 border-slate-300 dark:border-darkmode-400 text-slate-500 mr-5" >
                    <x-icon name="chevron-left" class="w-4 h-4 mr-2" /> Retour 
                  </a>
                  <button wire:click="Suivant" class="btn btn-primary w-32 shadow-md ml-auto">Suivant <x-icon name="chevron-right" class="w-4 h-4 ml-2" /></button>
              </div>
          </div>
      </div>
    </div>
    
</div>
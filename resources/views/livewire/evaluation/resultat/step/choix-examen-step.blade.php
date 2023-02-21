<div>
  <div class="intro-y box py-10 sm:py-20 mt-5">
    <div class="relative before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
      <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
        <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
        <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Choisir L'Examen</div>
      </div>

      {{--
      <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
        <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">2</button>
        <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Setup Your Profile</div>
      </div>
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

    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
      <div class="font-medium text-base">Choix de L'Examen</div>
      <form wire:submit.prevent="Soumettre" >

        <div class=" mt-5">
          <x-errors class="mt-3"/>
          <div class="mt-3">
            <h2 class="font-medium"> Les Données Sont disponible pour l'année <span class="text-primary"> {{$annee->nom_annee}} </span> </h2>
          </div>
          <div class="mt-3">
              <x-select
                  label="Choisir Un Cycle"
                  placeholder="Cycle"
                  :options="$cycles"
                  option-label="nom_cycle"
                  option-value="id"
                  wire:model="cycle_id"
                  x-on:close="Livewire.emit('modifierListePeriode')"
                  x-on:clear="Livewire.emit('modifierListePeriode')"
              />
          </div>

          <div class="mt-3">
              <x-select
                  label="Choisir Une Periode"
                  placeholder="Periode"
                  :options="$periodes"
                  option-label="nom_periode"
                  option-value="id"
                  wire:model="periode_id"
                  x-on:close="Livewire.emit('modifierListeExamen')"
                  x-on:clear="Livewire.emit('modifierListeExamen')"
              />
          </div>
          <div class="mt-3">
              <x-select
                  label="Choisir Un Examen"
                  placeholder="Examen"
                  :options="$examens"
                  option-label="nom_examen"
                  option-value="id"
                  wire:model.defer="examen_id"
              />
          </div>
          
          <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
            {{--<button class="btn btn-secondary w-24">Previous</button>--}}
            <button class="btn btn-primary w-24 ml-2" type="submit">Valider</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
